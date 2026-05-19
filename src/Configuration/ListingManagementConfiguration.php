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

namespace EBay\ListingManagement\Configuration;

final class ListingManagementConfiguration
{
    public string $inventoryBaseUrl = 'https://api.ebay.com/sell/inventory/v1';
    public string $feedBaseUrl      = 'https://api.ebay.com/sell/feed/v1';
    public string $mediaBaseUrl     = 'https://api.ebay.com/commerce/media/v1_beta';
    public string $storesBaseUrl    = 'https://api.ebay.com/sell/stores/v1';
    public string $graphQLBaseUrl   = 'https://api.ebay.com/graphql';

    /** Static fallback access token; per-call token takes precedence. */
    public ?string $accessToken = null;

    /** Default headers applied to every REST and GraphQL request. */
    public RequestOptions $defaultRequestOptions;

    public bool $diagnosticLogging = false;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_filter(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [
                $this->inventoryBaseUrl,
                $this->feedBaseUrl,
                $this->mediaBaseUrl,
                $this->storesBaseUrl,
                $this->graphQLBaseUrl,
            ]
        )));
    }
}
