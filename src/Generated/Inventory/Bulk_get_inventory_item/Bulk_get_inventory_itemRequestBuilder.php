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

namespace EBay\ListingManagement\Generated\Inventory\Bulk_get_inventory_item;

use EBay\ListingManagement\Generated\Inventory\Models\BulkGetInventoryItem;
use EBay\ListingManagement\Generated\Inventory\Models\BulkGetInventoryItemResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /bulk_get_inventory_item
*/
class Bulk_get_inventory_itemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_get_inventory_itemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bulk_get_inventory_item');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves up to 25 inventory item records. The SKU value of each inventory item record to retrieve is specified in the request payload.<br><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> header. See the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkGetInventoryItem#h3-request-headers">HTTP request headers</a> for more information.</span><br>For those who prefer to retrieve only one inventory item record by SKU value, the <strong>getInventoryItem</strong> method can be used. To retrieve all inventory item records defined on the seller's account, the <strong>getInventoryItems</strong> method can be used (with pagination control if desired).
     * @param BulkGetInventoryItem $body This type is used by the base request of the <strong>bulkGetInventoryItem</strong> method.
     * @param Bulk_get_inventory_itemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkGetInventoryItemResponse|null>
     * @throws Exception
    */
    public function post(BulkGetInventoryItem $body, ?Bulk_get_inventory_itemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [BulkGetInventoryItemResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call retrieves up to 25 inventory item records. The SKU value of each inventory item record to retrieve is specified in the request payload.<br><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> header. See the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkGetInventoryItem#h3-request-headers">HTTP request headers</a> for more information.</span><br>For those who prefer to retrieve only one inventory item record by SKU value, the <strong>getInventoryItem</strong> method can be used. To retrieve all inventory item records defined on the seller's account, the <strong>getInventoryItems</strong> method can be used (with pagination control if desired).
     * @param BulkGetInventoryItem $body This type is used by the base request of the <strong>bulkGetInventoryItem</strong> method.
     * @param Bulk_get_inventory_itemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkGetInventoryItem $body, ?Bulk_get_inventory_itemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_get_inventory_itemRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_get_inventory_itemRequestBuilder {
        return new Bulk_get_inventory_itemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
