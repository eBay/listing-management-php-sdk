<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\ListingManagement;

use EBay\ListingManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\ListingManagement\Clients\GraphQL\ListingGraphQLClient;
use EBay\ListingManagement\Clients\Rest\FeedClient;
use EBay\ListingManagement\Clients\Rest\InventoryClient;
use EBay\ListingManagement\Clients\Rest\MediaClient;
use EBay\ListingManagement\Clients\Rest\StoresClient;
use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Main entry point for the eBay Listing Management PHP SDK.
 */
final class ListingManagementClient
{
    public readonly FeedClient $feed;
    public readonly InventoryClient $inventory;
    public readonly MediaClient $media;
    public readonly StoresClient $stores;
    public readonly ListingGraphQLClient $graphQL;

    public function __construct(
        ListingManagementConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= $this->buildGuzzle($config);

        $this->feed = new FeedClient($guzzle, $config);
        $this->inventory = new InventoryClient($guzzle, $config);
        $this->media = new MediaClient($guzzle, $config);
        $this->stores = new StoresClient($guzzle, $config);

        $this->graphQL = new ListingGraphQLClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }

    /**
     * Build a Guzzle client with optional diagnostic logging middleware.
     * When $config->diagnosticLogging is true, all non-2xx responses are
     * logged to STDERR with method, URI, status code, and response body.
     */
    private function buildGuzzle(ListingManagementConfiguration $config): GuzzleClient
    {
        $stack = HandlerStack::create();

        if ($config->diagnosticLogging) {
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler): mixed {
                    return $handler($request, $options)->then(
                        static function (ResponseInterface $response) use ($request): ResponseInterface {
                            $status = $response->getStatusCode();
                            if ($status < 200 || $status >= 300) {
                                $body = (string) $response->getBody();
                                fwrite(
                                    STDERR,
                                    sprintf(
                                        "[ListingManagementSDK] %s %s -> HTTP %d\n%s\n",
                                        $request->getMethod(),
                                        str_replace(["\r", "\n"], ' ', (string) $request->getUri()),
                                        $status,
                                        $body
                                    )
                                );
                            }
                            return $response;
                        }
                    );
                };
            });
        }

        return new GuzzleClient([
            'handler'         => $stack,
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);
    }
}
