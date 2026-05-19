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

namespace EBay\ListingManagement\Generated\Inventory\Offer\Get_listing_fees;

use EBay\ListingManagement\Generated\Inventory\Models\FeesSummaryResponse;
use EBay\ListingManagement\Generated\Inventory\Models\OfferKeysWithId;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /offer/get_listing_fees
*/
class Get_listing_feesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_listing_feesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/offer/get_listing_fees');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call is used to retrieve the expected listing fees for up to 250 unpublished offers. An array of one or more <strong>offerId</strong> values are passed in under the <strong>offers</strong> container.<br><br>In the response payload, all listing fees are grouped by eBay marketplace, and listing fees per offer are not shown. A <strong>fees</strong> container will be returned for each eBay marketplace where the seller is selling the products associated with the specified offers. <br><br>Errors will occur if the seller passes in <strong>offerIds</strong> that represent published offers, so this call should be made before the seller publishes offers with the <strong>publishOffer</strong>.
     * @param OfferKeysWithId $body This type is used by the base request payload of the <strong>getListingFees</strong> call.
     * @param Get_listing_feesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FeesSummaryResponse|null>
     * @throws Exception
    */
    public function post(OfferKeysWithId $body, ?Get_listing_feesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [FeesSummaryResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call is used to retrieve the expected listing fees for up to 250 unpublished offers. An array of one or more <strong>offerId</strong> values are passed in under the <strong>offers</strong> container.<br><br>In the response payload, all listing fees are grouped by eBay marketplace, and listing fees per offer are not shown. A <strong>fees</strong> container will be returned for each eBay marketplace where the seller is selling the products associated with the specified offers. <br><br>Errors will occur if the seller passes in <strong>offerIds</strong> that represent published offers, so this call should be made before the seller publishes offers with the <strong>publishOffer</strong>.
     * @param OfferKeysWithId $body This type is used by the base request payload of the <strong>getListingFees</strong> call.
     * @param Get_listing_feesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OfferKeysWithId $body, ?Get_listing_feesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_listing_feesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_listing_feesRequestBuilder {
        return new Get_listing_feesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
