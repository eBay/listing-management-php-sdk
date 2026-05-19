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

namespace EBay\ListingManagement\Generated\Inventory\Bulk_update_price_quantity;

use EBay\ListingManagement\Generated\Inventory\Models\BulkPriceQuantity;
use EBay\ListingManagement\Generated\Inventory\Models\BulkPriceQuantityResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /bulk_update_price_quantity
*/
class Bulk_update_price_quantityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_update_price_quantityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bulk_update_price_quantity');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call is used by the seller to update the total ship-to-home quantity of one inventory item, and/or to update the price and/or quantity of one or more offers associated with one inventory item. Up to 25 offers associated with an inventory item may be updated with one <strong>bulkUpdatePriceQuantity</strong> call. Only one SKU (one product) can be updated per call.<br><br><span class="tablenote"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> header. See the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#h3-request-headers">HTTP request headers</a> for more information.</span><br>The <strong>getOffers</strong> call can be used to retrieve all offers associated with a SKU. The seller will just pass in the correct SKU value through the <strong>sku</strong> query parameter. To update an offer, the <strong>offerId</strong> value is required, and this value is returned in the <strong>getOffers</strong> call response. It is also useful to know which offers are unpublished and which ones are published. To get this status, look for the <strong>status</strong> value in the <strong>getOffers</strong> call response. Offers in the published state are live eBay listings, and these listings will be revised with a successful <strong>bulkUpdatePriceQuantity</strong> call.<br><br>An issue will occur if duplicate <strong>offerId</strong> values are passed through the same <strong>offers</strong> container, or if one or more of the specified offers are associated with different products/SKUs.<br><br><span class="tablenote"><strong>Note:</strong> For multiple-variation listings, it is recommended that the <strong>bulkUpdatePriceQuantity</strong> call be used to update price and quantity information for each SKU within that multiple-variation listing instead of using <strong>createOrReplaceInventoryItem</strong> calls to update the price and quantity for each SKU. Just remember that only one SKU (one product variation) can be updated per call.</span></p>
     * @param BulkPriceQuantity $body This type is used by the base request payload of the <strong>bulkUpdatePriceQuantity</strong> call. The <strong>bulkUpdatePriceQuantity</strong> call allows the seller to update the total 'ship-to-home' quantity of one or more inventory items (up to 25) and/or to update the price and/or quantity of one or more specific published offers.
     * @param Bulk_update_price_quantityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkPriceQuantityResponse|null>
     * @throws Exception
    */
    public function post(BulkPriceQuantity $body, ?Bulk_update_price_quantityRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [BulkPriceQuantityResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call is used by the seller to update the total ship-to-home quantity of one inventory item, and/or to update the price and/or quantity of one or more offers associated with one inventory item. Up to 25 offers associated with an inventory item may be updated with one <strong>bulkUpdatePriceQuantity</strong> call. Only one SKU (one product) can be updated per call.<br><br><span class="tablenote"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> header. See the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#h3-request-headers">HTTP request headers</a> for more information.</span><br>The <strong>getOffers</strong> call can be used to retrieve all offers associated with a SKU. The seller will just pass in the correct SKU value through the <strong>sku</strong> query parameter. To update an offer, the <strong>offerId</strong> value is required, and this value is returned in the <strong>getOffers</strong> call response. It is also useful to know which offers are unpublished and which ones are published. To get this status, look for the <strong>status</strong> value in the <strong>getOffers</strong> call response. Offers in the published state are live eBay listings, and these listings will be revised with a successful <strong>bulkUpdatePriceQuantity</strong> call.<br><br>An issue will occur if duplicate <strong>offerId</strong> values are passed through the same <strong>offers</strong> container, or if one or more of the specified offers are associated with different products/SKUs.<br><br><span class="tablenote"><strong>Note:</strong> For multiple-variation listings, it is recommended that the <strong>bulkUpdatePriceQuantity</strong> call be used to update price and quantity information for each SKU within that multiple-variation listing instead of using <strong>createOrReplaceInventoryItem</strong> calls to update the price and quantity for each SKU. Just remember that only one SKU (one product variation) can be updated per call.</span></p>
     * @param BulkPriceQuantity $body This type is used by the base request payload of the <strong>bulkUpdatePriceQuantity</strong> call. The <strong>bulkUpdatePriceQuantity</strong> call allows the seller to update the total 'ship-to-home' quantity of one or more inventory items (up to 25) and/or to update the price and/or quantity of one or more specific published offers.
     * @param Bulk_update_price_quantityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkPriceQuantity $body, ?Bulk_update_price_quantityRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Bulk_update_price_quantityRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_update_price_quantityRequestBuilder {
        return new Bulk_update_price_quantityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
