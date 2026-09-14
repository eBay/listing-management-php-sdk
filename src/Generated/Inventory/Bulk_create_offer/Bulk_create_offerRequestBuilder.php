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

namespace EBay\ListingManagement\Generated\Inventory\Bulk_create_offer;

use EBay\ListingManagement\Generated\Inventory\Models\BulkEbayOfferDetailsWithKeys;
use EBay\ListingManagement\Generated\Inventory\Models\BulkOfferResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /bulk_create_offer
*/
class Bulk_create_offerRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_create_offerRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bulk_create_offer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call creates multiple offers (up to 25) for specific inventory items on a specific eBay marketplace. Although it is not a requirement for the seller to create complete offers (with all necessary details) right from the start, eBay recommends that the seller provide all necessary details with this call since there is currently no bulk operation available to update multiple offers with one call. The following fields are always required in the request payload:  <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.sku" target="_blank">sku</a>, <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.marketplaceid" target="_blank">marketplaceId</a>, and (listing) <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.format" target="_blank">format</a>. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#offer" target="_blank">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that will be required before a offer can be published are highlighted below: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li> <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul><p><span class="tablenote"><strong>Note:</strong> Though the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.includecatalogproductdetails" target="_blank">includeCatalogProductDetails</a> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers.</span></p> <p>If the call is successful, unique <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.offerskuresponse.offerid" target="_blank">offerId</a> values are returned in the response for each successfully created offer. The <strong>offerId</strong> value will be required for many other offer-related calls. Note that this call only stages an offer for publishing. The seller must run either the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-publishoffer" target="_blank">publishOffer</a>, <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkpublishoffer" target="_blank">bulkPublishOffer</a>, or <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-publishofferbyinventoryitemgroup" target="_blank">publishOfferByInventoryItemGroup</a> call to convert offer(s) into an active single- or multiple-variation listing.</p><p>For those who prefer to create a single offer per call, the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-createoffer" target="_blank">createOffer</a> method can be used instead.</p>
     * @param BulkEbayOfferDetailsWithKeys $body Details of the offer for the channel
     * @param Bulk_create_offerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkOfferResponse|null>
     * @throws Exception
    */
    public function post(BulkEbayOfferDetailsWithKeys $body, ?Bulk_create_offerRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BulkOfferResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This call creates multiple offers (up to 25) for specific inventory items on a specific eBay marketplace. Although it is not a requirement for the seller to create complete offers (with all necessary details) right from the start, eBay recommends that the seller provide all necessary details with this call since there is currently no bulk operation available to update multiple offers with one call. The following fields are always required in the request payload:  <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.sku" target="_blank">sku</a>, <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.marketplaceid" target="_blank">marketplaceId</a>, and (listing) <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.format" target="_blank">format</a>. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#offer" target="_blank">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that will be required before a offer can be published are highlighted below: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li> <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul><p><span class="tablenote"><strong>Note:</strong> Though the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.ebayofferdetailswithkeys.includecatalogproductdetails" target="_blank">includeCatalogProductDetails</a> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers.</span></p> <p>If the call is successful, unique <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.offerskuresponse.offerid" target="_blank">offerId</a> values are returned in the response for each successfully created offer. The <strong>offerId</strong> value will be required for many other offer-related calls. Note that this call only stages an offer for publishing. The seller must run either the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-publishoffer" target="_blank">publishOffer</a>, <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkpublishoffer" target="_blank">bulkPublishOffer</a>, or <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-publishofferbyinventoryitemgroup" target="_blank">publishOfferByInventoryItemGroup</a> call to convert offer(s) into an active single- or multiple-variation listing.</p><p>For those who prefer to create a single offer per call, the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-createoffer" target="_blank">createOffer</a> method can be used instead.</p>
     * @param BulkEbayOfferDetailsWithKeys $body Details of the offer for the channel
     * @param Bulk_create_offerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkEbayOfferDetailsWithKeys $body, ?Bulk_create_offerRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_create_offerRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_create_offerRequestBuilder {
        return new Bulk_create_offerRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
