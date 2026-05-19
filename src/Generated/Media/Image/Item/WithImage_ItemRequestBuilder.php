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

namespace EBay\ListingManagement\Generated\Media\Image\Item;

use EBay\ListingManagement\Generated\Media\Models\ImageResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /image/{image_id}
*/
class WithImage_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithImage_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/image/{image_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves an EPS image URL and its expiration details for the unique identifier specified in the path parameter <b>image_id</b>. Use the retrieved EPS image URL to add the image to a listing through the <b>Inventory API</b> or the <b>Trading API</b>. See <a href="/api-docs/sell/static/inventory/managing-image-media.html"  target="_blank">Managing images</a> for additional details.<br><br><span class="tablenote"><b>Note:</b> If a user inputs a valid <b>image_id</b> as a path parameter but the EPS image associated with that ID has expired, the call will fail and a <b>404 Not Found</b> status code will be returned.</span>
     * @param WithImage_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImageResponse|null>
     * @throws Exception
    */
    public function get(?WithImage_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ImageResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves an EPS image URL and its expiration details for the unique identifier specified in the path parameter <b>image_id</b>. Use the retrieved EPS image URL to add the image to a listing through the <b>Inventory API</b> or the <b>Trading API</b>. See <a href="/api-docs/sell/static/inventory/managing-image-media.html"  target="_blank">Managing images</a> for additional details.<br><br><span class="tablenote"><b>Note:</b> If a user inputs a valid <b>image_id</b> as a path parameter but the EPS image associated with that ID has expired, the call will fail and a <b>404 Not Found</b> status code will be returned.</span>
     * @param WithImage_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithImage_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithImage_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithImage_ItemRequestBuilder {
        return new WithImage_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
