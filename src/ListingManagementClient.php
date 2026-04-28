<?php

declare(strict_types=1);

namespace EBay\ListingManagement;

use EBay\ListingManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\ListingManagement\Clients\GraphQL\ListingGraphQLClient;
use EBay\ListingManagement\Clients\Rest\FeedClient;
use EBay\ListingManagement\Clients\Rest\InventoryClient;
use EBay\ListingManagement\Clients\Rest\MediaClient;
use EBay\ListingManagement\Clients\Rest\StoresClient;
use EBay\ListingManagement\Configuration\KiotaAuthProvider;
use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Generated\Feed\FeedApiClient;
use EBay\ListingManagement\Generated\Inventory\InventoryApiClient;
use EBay\ListingManagement\Generated\Media\MediaApiClient;
use EBay\ListingManagement\Generated\Stores\StoresApiClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Main entry point for the eBay Listing Management PHP SDK.
 *
 * Usage:
 *   $config = new ListingManagementConfiguration();
 *   $config->accessToken = 'your-token';
 *   $sdk = new ListingManagementClient($config);
 *
 *   // REST
 *   $item = $sdk->inventory->getInventoryItem('MY-SKU');
 *
 *   // GraphQL
 *   $result = $sdk->graphQL->createListing([...]);
 *
 *   // GraphQL escape hatch
 *   $raw = $sdk->graphQL->executeRaw('{ sellerListingSearch { ... } }');
 *
 *   // Per-request headers
 *   use EBay\ListingManagement\Configuration\RequestOptions;
 *   $item = $sdk->inventory->getInventoryItem('MY-SKU', requestOptions: new RequestOptions(['X-Request-Id' => 'abc']));
 *
 *   // Default headers on all requests
 *   $config->defaultRequestOptions->headers['X-Ebay-Marketplace-Id'] = 'EBAY_US';
 *
 *   // Diagnostic logging (non-2xx logged to STDERR)
 *   $config->diagnosticLogging = true;
 */
final class ListingManagementClient
{
    public readonly InventoryClient $inventory;
    public readonly FeedClient $feed;
    public readonly MediaClient $media;
    public readonly StoresClient $stores;
    public readonly ListingGraphQLClient $graphQL;

    public function __construct(
        ListingManagementConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= $this->buildGuzzle($config);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        // Inventory
        $inventoryAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $inventoryAdapter->setBaseUrl($config->inventoryBaseUrl);
        $this->inventory = new InventoryClient(new InventoryApiClient($inventoryAdapter), $config);

        // Feed
        $feedAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $feedAdapter->setBaseUrl($config->feedBaseUrl);
        $this->feed = new FeedClient(new FeedApiClient($feedAdapter), $config);

        // Media
        $mediaAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $mediaAdapter->setBaseUrl($config->mediaBaseUrl);
        $this->media = new MediaClient(new MediaApiClient($mediaAdapter), $config);

        // Stores
        $storesAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $storesAdapter->setBaseUrl($config->storesBaseUrl);
        $this->stores = new StoresClient(new StoresApiClient($storesAdapter), $config);

        // GraphQL (Guzzle shared — no Kiota involved)
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
                                        (string) $request->getUri(),
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
