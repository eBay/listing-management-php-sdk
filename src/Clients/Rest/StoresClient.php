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

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\KiotaAuthProvider;
use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\Generated\Stores\StoresApiClient;
use EBay\ListingManagement\Generated\Stores\Models\AddStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\DeleteStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\MoveStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\RenameStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Store\Categories\CategoriesRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\Categories\CategoriesRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\Categories\Item\WithCategory_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\Categories\Item\WithCategory_ItemRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\Categories\Move_category\Move_categoryRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\StoreRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\Tasks\Item\WithTask_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Stores\Store\Tasks\TasksRequestBuilderGetRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class StoresClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingManagementConfiguration $config,
    ) {}

    /**
     * Merge default headers with per-request headers.
     * Default headers fill first; per-request headers fill any remaining gaps.
     *
     * @return array<string,string>
     */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }

    // ── Store ────────────────────────────────────────────────────────────────

    public function getStore(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->get(
                new StoreRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Store Categories ─────────────────────────────────────────────────────

    public function getStoreCategories(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->categories()->get(
                new CategoriesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function addStoreCategory(AddStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->categories()->post(
                $body,
                new CategoriesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteStoreCategory(string $categoryId, DeleteStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->store()->categories()->byCategory_id($categoryId)->delete(
                $body,
                new WithCategory_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function renameStoreCategory(string $categoryId, RenameStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->categories()->byCategory_id($categoryId)->put(
                $body,
                new WithCategory_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function moveStoreCategory(MoveStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->categories()->move_category()->post(
                $body,
                new Move_categoryRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Store Tasks ──────────────────────────────────────────────────────────

    public function getStoreTasks(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->tasks()->get(
                new TasksRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getStoreTask(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->store()->tasks()->byTask_id($taskId)->get(
                new WithTask_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): StoresApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->storesBaseUrl);
        return new StoresApiClient($adapter);
    }
}
