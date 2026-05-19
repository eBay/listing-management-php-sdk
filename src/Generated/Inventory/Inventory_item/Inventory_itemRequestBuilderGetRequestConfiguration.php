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

namespace EBay\ListingManagement\Generated\Inventory\Inventory_item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Inventory_itemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Inventory_itemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Inventory_itemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Inventory_itemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Inventory_itemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Inventory_itemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Inventory_itemRequestBuilderGetQueryParameters.
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be an integer from <code>1</code> to <code>200</code>.<br><br><strong>Min:</strong> 1<br><br><strong>Max:</strong> 200<br><br><b>Default:</b> 25
     * @param string|null $offset The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned. 
     * @return Inventory_itemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null): Inventory_itemRequestBuilderGetQueryParameters {
        return new Inventory_itemRequestBuilderGetQueryParameters($limit, $offset);
    }

}
