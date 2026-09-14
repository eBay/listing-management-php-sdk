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

namespace EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku;

use EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku\Item\WithSkuItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /listing/{listingId}/sku
*/
class SkuRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Inventory.listing.item.sku.item collection
     * @param string $sku This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be retrieved. This SKU value must be defined in the listing specified in <b>listingId</b> parameter<br><br>Use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank ">getOffers</a> method of the <b>Inventory API</b> or the <a href="/devzone/xml/docs/reference/ebay/getmyebayselling.html" target="_blank ">GetMyEbaySelling</a> method of the <b>Trading API</b> to retrieve all SKUs for all active listings.
     * @return WithSkuItemRequestBuilder
    */
    public function bySku(string $sku): WithSkuItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sku'] = $sku;
        return new WithSkuItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SkuRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/listing/{listingId}/sku');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
