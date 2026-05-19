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

namespace EBay\ListingManagement\Generated\Inventory\Location\Item;

use EBay\ListingManagement\Generated\Inventory\Location\Item\Disable\DisableRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Location\Item\Enable\EnableRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Location\Item\Update_location_details\Update_location_detailsRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocationFull;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocationResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /location/{merchantLocationKey}
*/
class WithMerchantLocationKeyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The disable property
    */
    public function disable(): DisableRequestBuilder {
        return new DisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The enable property
    */
    public function enable(): EnableRequestBuilder {
        return new EnableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_location_details property
    */
    public function update_location_details(): Update_location_detailsRequestBuilder {
        return new Update_location_detailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithMerchantLocationKeyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/location/{merchantLocationKey}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <p>This call deletes the inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Note that deleting a location will not affect any active eBay listings associated with the deleted location, but the seller will not be able modify the offers associated with the location once it is deleted.</p><span class="tablenote"><b>Note:</b> Deletion is not currently supported for fulfillment center locations, as location mappings will still be retained despite the location being deleted. Instead, fulfillment center locations should be disabled using the <a href="/api-docs/sell/inventory/resources/location/methods/disableInventoryLocation" target="_blank">disableInventoryLocation</a> method.</span><p>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>200 OK</i>.</p>
     * @param WithMerchantLocationKeyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithMerchantLocationKeyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This call retrieves all defined details of the inventory location that is specified by the <b>merchantLocationKey</b> path parameter.<p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>
     * @param WithMerchantLocationKeyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InventoryLocationResponse|null>
     * @throws Exception
    */
    public function get(?WithMerchantLocationKeyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [InventoryLocationResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <p>Use this call to create a new inventory location. In order to create and publish an offer (and create an eBay listing), a seller must have at least one location, as every offer must be associated with at least one location.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#location " target="_blank">Location fields</a> for a list of fields required to publish an offer.</p></span></div><p>Upon first creating an inventory location, only a seller-defined location identifier and a physical location is required, and once set, these values can not be changed. The unique identifier value (<i>merchantLocationKey</i>) is passed in at the end of the call URI. This <i>merchantLocationKey</i> value will be used in other Inventory Location calls to identify the location to perform an action against.</p><p>When creating an inventory location, the <b>locationTypes</b> can be specified to define the function of a location. At this time, the following <b>locationTypes</b> are supported:<ul><li><b>Fulfillment center</b> locations are used by sellers selling products through the Multi-warehouse program to get improved estimated delivery dates on their listings. A full address is required when creating a fulfillment center location, as well as the <b>fulfillmentCenterSpecifications</b> of the location. For more information on using the fulfillment center location type to get improved delivery dates, see <a href="/api-docs/sell/static/inventory/multi-warehouse-program.html" target="_blank ">Multi-warehouse program</a>.</li><li><b>Warehouse</b> locations are used for traditional shipping. A full street address is not needed, but the <b>postalCode</b> and <b>country</b> OR <b>city</b>, <b>stateOrProvince</b>, and <b>country</b> of the location must be provided.</li><li><b>Store</b> locations are generally used by merchants selling product through the In-Store Pickup program. A full address is required when creating a store location.</li></ul></p><p>Note that all inventory locations are "enabled" by default when they are created, and you must specifically disable them (by passing in a value of <code>DISABLED</code> in the <strong>merchantLocationStatus</strong> field) if you want them to be set to the disabled state. The seller's inventory cannot be loaded to inventory locations in the disabled state.</p><p>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>204 No Content</i>.</p>
     * @param InventoryLocationFull $body This type is used by the <strong>createInventoryLocation</strong> call to provide details on the inventory location, including the location's name, physical address, operating hours, special hours, phone number and other details of an inventory location.
     * @param WithMerchantLocationKeyItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(InventoryLocationFull $body, ?WithMerchantLocationKeyItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * <p>This call deletes the inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Note that deleting a location will not affect any active eBay listings associated with the deleted location, but the seller will not be able modify the offers associated with the location once it is deleted.</p><span class="tablenote"><b>Note:</b> Deletion is not currently supported for fulfillment center locations, as location mappings will still be retained despite the location being deleted. Instead, fulfillment center locations should be disabled using the <a href="/api-docs/sell/inventory/resources/location/methods/disableInventoryLocation" target="_blank">disableInventoryLocation</a> method.</span><p>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>200 OK</i>.</p>
     * @param WithMerchantLocationKeyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithMerchantLocationKeyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * This call retrieves all defined details of the inventory location that is specified by the <b>merchantLocationKey</b> path parameter.<p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>
     * @param WithMerchantLocationKeyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithMerchantLocationKeyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * <p>Use this call to create a new inventory location. In order to create and publish an offer (and create an eBay listing), a seller must have at least one location, as every offer must be associated with at least one location.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#location " target="_blank">Location fields</a> for a list of fields required to publish an offer.</p></span></div><p>Upon first creating an inventory location, only a seller-defined location identifier and a physical location is required, and once set, these values can not be changed. The unique identifier value (<i>merchantLocationKey</i>) is passed in at the end of the call URI. This <i>merchantLocationKey</i> value will be used in other Inventory Location calls to identify the location to perform an action against.</p><p>When creating an inventory location, the <b>locationTypes</b> can be specified to define the function of a location. At this time, the following <b>locationTypes</b> are supported:<ul><li><b>Fulfillment center</b> locations are used by sellers selling products through the Multi-warehouse program to get improved estimated delivery dates on their listings. A full address is required when creating a fulfillment center location, as well as the <b>fulfillmentCenterSpecifications</b> of the location. For more information on using the fulfillment center location type to get improved delivery dates, see <a href="/api-docs/sell/static/inventory/multi-warehouse-program.html" target="_blank ">Multi-warehouse program</a>.</li><li><b>Warehouse</b> locations are used for traditional shipping. A full street address is not needed, but the <b>postalCode</b> and <b>country</b> OR <b>city</b>, <b>stateOrProvince</b>, and <b>country</b> of the location must be provided.</li><li><b>Store</b> locations are generally used by merchants selling product through the In-Store Pickup program. A full address is required when creating a store location.</li></ul></p><p>Note that all inventory locations are "enabled" by default when they are created, and you must specifically disable them (by passing in a value of <code>DISABLED</code> in the <strong>merchantLocationStatus</strong> field) if you want them to be set to the disabled state. The seller's inventory cannot be loaded to inventory locations in the disabled state.</p><p>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>204 No Content</i>.</p>
     * @param InventoryLocationFull $body This type is used by the <strong>createInventoryLocation</strong> call to provide details on the inventory location, including the location's name, physical address, operating hours, special hours, phone number and other details of an inventory location.
     * @param WithMerchantLocationKeyItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InventoryLocationFull $body, ?WithMerchantLocationKeyItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithMerchantLocationKeyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithMerchantLocationKeyItemRequestBuilder {
        return new WithMerchantLocationKeyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
