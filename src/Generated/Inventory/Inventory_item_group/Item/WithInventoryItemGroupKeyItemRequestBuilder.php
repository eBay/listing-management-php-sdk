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

namespace EBay\ListingManagement\Generated\Inventory\Inventory_item_group\Item;

use EBay\ListingManagement\Generated\Inventory\Models\BaseResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Error;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemGroup;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /inventory_item_group/{inventoryItemGroupKey}
*/
class WithInventoryItemGroupKeyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithInventoryItemGroupKeyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/inventory_item_group/{inventoryItemGroupKey}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call deletes the inventory item group for a given <strong>inventoryItemGroupKey</strong> value.
     * @param WithInventoryItemGroupKeyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithInventoryItemGroupKeyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This call retrieves the inventory item group for a given <strong>inventoryItemGroupKey</strong> value. The <strong>inventoryItemGroupKey</strong> value is passed in at the end of the call URI.
     * @param WithInventoryItemGroupKeyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InventoryItemGroup|null>
     * @throws Exception
    */
    public function get(?WithInventoryItemGroupKeyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InventoryItemGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <span class="tablenote"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call creates a new inventory item group or updates an existing inventory item group. It is up to sellers whether they want to create a complete inventory item group record right from the start, or sellers can provide only some information with the initial <strong>createOrReplaceInventoryItemGroup</strong> call, and then make one or more additional <strong>createOrReplaceInventoryItemGroup</strong> calls to complete the inventory item group record. Upon first creating an inventory item group record, the only required elements are  the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-createorreplaceinventoryitemgroup.inventoryitemgroup.subtitle" target="_blank">inventoryItemGroupKey</a> identifier in the call URI, and the members of the inventory item group specified through the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-createorreplaceinventoryitemgroup.inventoryitemgroup.variantskus" target="_blank">variantSKUs</a> array in the request payload.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#inventory_item_group" target="_blank">Inventory item group fields</a> for a list of fields required to publish an offer.</p></span></div><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers.</span><br>In the case of updating/replacing an existing inventory item group, this call does a complete replacement of the existing inventory item group record, so all fields (including the member SKUs) that make up the inventory item group are required, regardless of whether their values changed. So, when replacing/updating an inventory item group record, it is advised that the seller run a <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-getinventoryitemgroup" target="_blank">getInventoryItemGroup</a> call for that inventory item group to see all of its current values/settings/members before attempting to update the record. And if changes are made to an inventory item group that is part of a live, multiple-variation eBay listing, these changes automatically update the eBay listing. For example, if a SKU value is removed from the inventory item group, the corresponding product variation will be removed from the eBay listing as well.<br><br>In addition to the required inventory item group identifier and member SKUs, other key information that is set with this call include: <ul> <li>Title and description of the inventory item group. The string values provided in these fields will actually become the listing title and listing description of the listing once the first SKU of the inventory item group is published successfully</li> <li>Common aspects that inventory items in the group share</li> <li>Product aspects that vary within each product variation</li> <li>Links to images demonstrating the variations of the product, and these images should correspond to the product aspect that is set with the <a href="/develop/api/sell/inventory_api#sell-inventory_api-listing-bulkmigratelisting" target="_blank">variesBy.aspectsImageVariesBy</a> field</li> </ul><br><span class="tablenote"><b>Note:</b> For more information, see <a href="/api-docs/sell/static/inventory/inventory-item-groups.html" target="_blank">Creating and managing inventory item groups</a>.</span>
     * @param InventoryItemGroup $body Details of the inventory Item Group
     * @param WithInventoryItemGroupKeyItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BaseResponse|null>
     * @throws Exception
    */
    public function put(InventoryItemGroup $body, ?WithInventoryItemGroupKeyItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BaseResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This call deletes the inventory item group for a given <strong>inventoryItemGroupKey</strong> value.
     * @param WithInventoryItemGroupKeyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithInventoryItemGroupKeyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This call retrieves the inventory item group for a given <strong>inventoryItemGroupKey</strong> value. The <strong>inventoryItemGroupKey</strong> value is passed in at the end of the call URI.
     * @param WithInventoryItemGroupKeyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithInventoryItemGroupKeyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * <span class="tablenote"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call creates a new inventory item group or updates an existing inventory item group. It is up to sellers whether they want to create a complete inventory item group record right from the start, or sellers can provide only some information with the initial <strong>createOrReplaceInventoryItemGroup</strong> call, and then make one or more additional <strong>createOrReplaceInventoryItemGroup</strong> calls to complete the inventory item group record. Upon first creating an inventory item group record, the only required elements are  the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-createorreplaceinventoryitemgroup.inventoryitemgroup.subtitle" target="_blank">inventoryItemGroupKey</a> identifier in the call URI, and the members of the inventory item group specified through the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-createorreplaceinventoryitemgroup.inventoryitemgroup.variantskus" target="_blank">variantSKUs</a> array in the request payload.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#inventory_item_group" target="_blank">Inventory item group fields</a> for a list of fields required to publish an offer.</p></span></div><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers.</span><br>In the case of updating/replacing an existing inventory item group, this call does a complete replacement of the existing inventory item group record, so all fields (including the member SKUs) that make up the inventory item group are required, regardless of whether their values changed. So, when replacing/updating an inventory item group record, it is advised that the seller run a <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-getinventoryitemgroup" target="_blank">getInventoryItemGroup</a> call for that inventory item group to see all of its current values/settings/members before attempting to update the record. And if changes are made to an inventory item group that is part of a live, multiple-variation eBay listing, these changes automatically update the eBay listing. For example, if a SKU value is removed from the inventory item group, the corresponding product variation will be removed from the eBay listing as well.<br><br>In addition to the required inventory item group identifier and member SKUs, other key information that is set with this call include: <ul> <li>Title and description of the inventory item group. The string values provided in these fields will actually become the listing title and listing description of the listing once the first SKU of the inventory item group is published successfully</li> <li>Common aspects that inventory items in the group share</li> <li>Product aspects that vary within each product variation</li> <li>Links to images demonstrating the variations of the product, and these images should correspond to the product aspect that is set with the <a href="/develop/api/sell/inventory_api#sell-inventory_api-listing-bulkmigratelisting" target="_blank">variesBy.aspectsImageVariesBy</a> field</li> </ul><br><span class="tablenote"><b>Note:</b> For more information, see <a href="/api-docs/sell/static/inventory/inventory-item-groups.html" target="_blank">Creating and managing inventory item groups</a>.</span>
     * @param InventoryItemGroup $body Details of the inventory Item Group
     * @param WithInventoryItemGroupKeyItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(InventoryItemGroup $body, ?WithInventoryItemGroupKeyItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return WithInventoryItemGroupKeyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithInventoryItemGroupKeyItemRequestBuilder {
        return new WithInventoryItemGroupKeyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
