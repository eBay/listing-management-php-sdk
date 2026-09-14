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

namespace EBay\ListingManagement\Generated\Inventory\Offer\Item\Withdraw;

use EBay\ListingManagement\Generated\Inventory\Models\Error;
use EBay\ListingManagement\Generated\Inventory\Models\WithdrawResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /offer/{offerId}/withdraw
*/
class WithdrawRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithdrawRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/offer/{offerId}/withdraw');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call is used to end a single-variation listing that is associated with the specified offer. This call is used in place of the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-deleteoffer" target="_blank">deleteOffer</a> call if the seller only wants to end the listing associated with the offer but does not want to delete the offer object. With this call, the offer object remains, but it goes into the unpublished state, and will require a <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-publishoffer" target="_blank">publishOffer</a> call to relist the offer.<br><br>To end a multiple-variation listing that is associated with an inventory item group, the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-withdrawofferbyinventoryitemgroup" target="_blank">withdrawOfferByInventoryItemGroup</a> method can be used. This call only ends the multiple-variation listing associated with an inventory item group but does not delete the inventory item group object, nor does it delete any of the offers associated with the inventory item group, but instead all of these offers go into the unpublished state.
     * @param WithdrawRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WithdrawResponse|null>
     * @throws Exception
    */
    public function post(?WithdrawRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WithdrawResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This call is used to end a single-variation listing that is associated with the specified offer. This call is used in place of the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-deleteoffer" target="_blank">deleteOffer</a> call if the seller only wants to end the listing associated with the offer but does not want to delete the offer object. With this call, the offer object remains, but it goes into the unpublished state, and will require a <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-publishoffer" target="_blank">publishOffer</a> call to relist the offer.<br><br>To end a multiple-variation listing that is associated with an inventory item group, the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-withdrawofferbyinventoryitemgroup" target="_blank">withdrawOfferByInventoryItemGroup</a> method can be used. This call only ends the multiple-variation listing associated with an inventory item group but does not delete the inventory item group object, nor does it delete any of the offers associated with the inventory item group, but instead all of these offers go into the unpublished state.
     * @param WithdrawRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?WithdrawRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithdrawRequestBuilder
    */
    public function withUrl(string $rawUrl): WithdrawRequestBuilder {
        return new WithdrawRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
