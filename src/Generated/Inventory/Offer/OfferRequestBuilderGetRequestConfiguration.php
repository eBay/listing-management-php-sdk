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

namespace EBay\ListingManagement\Generated\Inventory\Offer;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OfferRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OfferRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OfferRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OfferRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OfferRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OfferRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OfferRequestBuilderGetQueryParameters.
     * @param string|null $format This enumeration value sets the listing format for the offers being retrieved. This query parameter will be passed in if the seller only wants to see offers in a specified listing format, such as <code>FIXED_PRICE</code>.
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results.
     * @param string|null $marketplace_id The unique identifier of the eBay marketplace. This query parameter will be passed in if the seller only wants to see the product's offers on a specific eBay marketplace.<br><br><span class="tablenote"><strong>Note:</strong> At this time, the same SKU value can not be offered across multiple eBay marketplaces, so the <strong>marketplace_id</strong> query parameter currently does not have any practical use for this call.</span>
     * @param string|null $offset The value passed in this query parameter sets the page number to retrieve. Although this field is a string, the value passed in this field should be a integer value equal to or greater than <code>0</code>. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned.
     * @param string|null $sku The seller-defined SKU value is passed in as a query parameter. All offers associated with this product are returned in the response. <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers. Otherwise, only one offer will be returned.</span><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max length</strong>: 50.
     * @return OfferRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $format = null, ?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $sku = null): OfferRequestBuilderGetQueryParameters {
        return new OfferRequestBuilderGetQueryParameters($format, $limit, $marketplace_id, $offset, $sku);
    }

}
