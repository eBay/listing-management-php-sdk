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

use EBay\ListingManagement\Generated\Inventory\Models\EbayOfferDetailsWithKeys;
use EBay\ListingManagement\Generated\Inventory\Models\OfferResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Offers;
use EBay\ListingManagement\Generated\Inventory\Offer\Get_listing_fees\Get_listing_feesRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Offer\Item\WithOfferItemRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Offer\Publish_by_inventory_item_group\Publish_by_inventory_item_groupRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Offer\Withdraw_by_inventory_item_group\Withdraw_by_inventory_item_groupRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /offer
*/
class OfferRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_listing_fees property
    */
    public function get_listing_fees(): Get_listing_feesRequestBuilder {
        return new Get_listing_feesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The publish_by_inventory_item_group property
    */
    public function publish_by_inventory_item_group(): Publish_by_inventory_item_groupRequestBuilder {
        return new Publish_by_inventory_item_groupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The withdraw_by_inventory_item_group property
    */
    public function withdraw_by_inventory_item_group(): Withdraw_by_inventory_item_groupRequestBuilder {
        return new Withdraw_by_inventory_item_groupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Inventory.offer.item collection
     * @param string $offerId This path parameter specifies the unique identifier of the offer that is to be retrieved.<br><br>Use the <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> method to retrieve offer IDs.
     * @return WithOfferItemRequestBuilder
    */
    public function byOfferId(string $offerId): WithOfferItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['offerId'] = $offerId;
        return new WithOfferItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OfferRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/offer{?format*,limit*,marketplace_id*,offset*,sku*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves all existing offers for the specified SKU value. The seller has the option of limiting the offers that are retrieved to a specific eBay marketplace, or to a listing format.<br><br><span class="tablenote"><strong>Note:</strong> At this time, the same SKU value can not be offered across multiple eBay marketplaces, so the <strong>marketplace_id</strong> query parameter currently does not have any practical use for this call.</span><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers. Otherwise, only one offer will be returned.</span><br>The <code>authorization</code> header is the only required HTTP header for this call. See the <strong>HTTP request headers</strong> section for more information.
     * @param OfferRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Offers|null>
     * @throws Exception
    */
    public function get(?OfferRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Offers::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call creates an offer for a specific inventory item on a specific eBay marketplace. It is up to the sellers whether they want to create a complete offer (with all necessary details) right from the start, or sellers can provide only some information with the initial <strong>createOffer</strong> call, and then make one or more subsequent <strong>updateOffer</strong> calls to complete the offer and prepare to publish the offer. Upon first creating an offer, the following fields are required in the request payload:  <strong>sku</strong>, <strong>marketplaceId</strong>, and (listing) <strong>format</strong>.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#offer" target="_blank">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that will be required before an offer can be published are highlighted below. These settings are either set with <strong>createOffer</strong>, or they can be set with a subsequent <strong>updateOffer</strong> call: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li> <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul> <p><span class="tablenote"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span></p><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href="/api-docs/sell/inventory/resources/offer/methods/createOffer#h3-request-headers">HTTP request headers</a> for more information.</span><p>If the call is successful, a unique <strong>offerId</strong> value is returned in the response. This value will be required for many other offer-related calls. Note that this call only stages an offer for publishing. The seller must run the <strong>publishOffer</strong> call to convert the offer to an active eBay listing.</p><p>For those who prefer to create multiple offers (up to 25 at a time) with one call, the <strong>bulkCreateOffer</strong> method can be used.</p>
     * @param EbayOfferDetailsWithKeys $body This type provides details of an offer, and is used by the base request payload of the <strong>createOffer</strong> and <strong>bulkCreateOffer</strong> methods.
     * @param OfferRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OfferResponse|null>
     * @throws Exception
    */
    public function post(EbayOfferDetailsWithKeys $body, ?OfferRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [OfferResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call retrieves all existing offers for the specified SKU value. The seller has the option of limiting the offers that are retrieved to a specific eBay marketplace, or to a listing format.<br><br><span class="tablenote"><strong>Note:</strong> At this time, the same SKU value can not be offered across multiple eBay marketplaces, so the <strong>marketplace_id</strong> query parameter currently does not have any practical use for this call.</span><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers. Otherwise, only one offer will be returned.</span><br>The <code>authorization</code> header is the only required HTTP header for this call. See the <strong>HTTP request headers</strong> section for more information.
     * @param OfferRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OfferRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This call creates an offer for a specific inventory item on a specific eBay marketplace. It is up to the sellers whether they want to create a complete offer (with all necessary details) right from the start, or sellers can provide only some information with the initial <strong>createOffer</strong> call, and then make one or more subsequent <strong>updateOffer</strong> calls to complete the offer and prepare to publish the offer. Upon first creating an offer, the following fields are required in the request payload:  <strong>sku</strong>, <strong>marketplaceId</strong>, and (listing) <strong>format</strong>.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#offer" target="_blank">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that will be required before an offer can be published are highlighted below. These settings are either set with <strong>createOffer</strong>, or they can be set with a subsequent <strong>updateOffer</strong> call: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li> <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul> <p><span class="tablenote"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span></p><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href="/api-docs/sell/inventory/resources/offer/methods/createOffer#h3-request-headers">HTTP request headers</a> for more information.</span><p>If the call is successful, a unique <strong>offerId</strong> value is returned in the response. This value will be required for many other offer-related calls. Note that this call only stages an offer for publishing. The seller must run the <strong>publishOffer</strong> call to convert the offer to an active eBay listing.</p><p>For those who prefer to create multiple offers (up to 25 at a time) with one call, the <strong>bulkCreateOffer</strong> method can be used.</p>
     * @param EbayOfferDetailsWithKeys $body This type provides details of an offer, and is used by the base request payload of the <strong>createOffer</strong> and <strong>bulkCreateOffer</strong> methods.
     * @param OfferRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EbayOfferDetailsWithKeys $body, ?OfferRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OfferRequestBuilder
    */
    public function withUrl(string $rawUrl): OfferRequestBuilder {
        return new OfferRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
