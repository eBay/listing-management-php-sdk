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

use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\Configuration\TokenContext;
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

final class StoresClient
{
    public function __construct(
        private readonly StoresApiClient $kiota,
        private readonly ListingManagementConfiguration $config = new ListingManagementConfiguration(),
    ) {}

    /**
     * Merge default headers with per-request headers.
     * Default headers fill first; per-request headers fill any remaining gaps.
     *
     * @return array<string,string>
     */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    // ── Store ────────────────────────────────────────────────────────────────

    public function getStore(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->get(
            new StoreRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Store Categories ─────────────────────────────────────────────────────

    public function getStoreCategories(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->get(
            new CategoriesRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function addStoreCategory(AddStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->post(
            $body,
            new CategoriesRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteStoreCategory(string $categoryId, DeleteStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->store()->categories()->byCategory_id($categoryId)->delete(
            $body,
            new WithCategory_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function renameStoreCategory(string $categoryId, RenameStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->byCategory_id($categoryId)->put(
            $body,
            new WithCategory_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function moveStoreCategory(MoveStoreCategoryRequestType $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->move_category()->post(
            $body,
            new Move_categoryRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Store Tasks ──────────────────────────────────────────────────────────

    public function getStoreTasks(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->tasks()->get(
            new TasksRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function getStoreTask(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->tasks()->byTask_id($taskId)->get(
            new WithTask_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }
}
