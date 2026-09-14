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

namespace EBay\ListingManagement\Generated\Media\Image\Create_image_from_url;

use EBay\ListingManagement\Generated\Media\Models\CreateImageFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\Error;
use EBay\ListingManagement\Generated\Media\Models\ImageResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /image/create_image_from_url
*/
class Create_image_from_urlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_image_from_urlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/image/create_image_from_url');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method uploads a picture to eBay Picture Services (EPS) from the specified URL. Specify the location of the picture on an external web server through the <strong>imageUrl</strong> field. <p>All images must comply with eBay’s picture requirements, such as dimension and file size restrictions. For more information, see <a href="https://www.ebay.com/help/policies/listing-policies/picture-policy?id=4370" target="_blank">Picture policy</a>. The image formats supported are <strong>JPG</strong>, <strong>GIF</strong>, <strong>PNG</strong>, <strong>BMP</strong>, <strong>TIFF</strong>, <strong>AVIF</strong>, <strong>HEIC</strong>, and <strong>WEBP</strong>. In addition, the provided URL must be secured using HTTPS (HTTP is not permitted). For more information, see <a href="/api-docs/sell/static/inventory/managing-image-media.html#image-requirements" target="_blank">Image requirements</a>.</p><p><span class="tablenote"><strong>Note:</strong> Animated GIF, and multi-page PNG/TIFF files, are not supported. Any animation effect of supported formats will be lost upon upload.</span></p><p>When an EPS image is successfully created, the method returns the HTTP Status Code <code>201 Created</code>. The method also returns the getImage URI in the <strong>Location</strong> response header.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> Make sure to capture the image ID URI returned in the response <a href="/develop/guides-v2/using-ebay-restful-apis#responseheaders" target="_blank">Location header</a> provided in the following format:</p><p><code>https://apim.ebay.com/commerce/media/v1_beta/image/<em>{image_id}</em></code> </p><p>You can capture the entire URI, or just save the <code>{image_id}</code> only. Pass the <code>{image_id}</code> as a path parameter in the <strong><a href="/develop/api/sell/media_api#sell-media_api-image-getimage" >getImage</a></strong> method to return the value needed to associate an image to a listing using the Trading and Inventory APIs.</p></div><p>See <a href="/api-docs/sell/static/inventory/managing-image-media.html" target="_blank">Managing images</a> for additional details.</p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds. </p></div>
     * @param CreateImageFromUrlRequest $body A type that provides the location of the image.
     * @param Create_image_from_urlRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImageResponse|null>
     * @throws Exception
    */
    public function post(CreateImageFromUrlRequest $body, ?Create_image_from_urlRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImageResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method uploads a picture to eBay Picture Services (EPS) from the specified URL. Specify the location of the picture on an external web server through the <strong>imageUrl</strong> field. <p>All images must comply with eBay’s picture requirements, such as dimension and file size restrictions. For more information, see <a href="https://www.ebay.com/help/policies/listing-policies/picture-policy?id=4370" target="_blank">Picture policy</a>. The image formats supported are <strong>JPG</strong>, <strong>GIF</strong>, <strong>PNG</strong>, <strong>BMP</strong>, <strong>TIFF</strong>, <strong>AVIF</strong>, <strong>HEIC</strong>, and <strong>WEBP</strong>. In addition, the provided URL must be secured using HTTPS (HTTP is not permitted). For more information, see <a href="/api-docs/sell/static/inventory/managing-image-media.html#image-requirements" target="_blank">Image requirements</a>.</p><p><span class="tablenote"><strong>Note:</strong> Animated GIF, and multi-page PNG/TIFF files, are not supported. Any animation effect of supported formats will be lost upon upload.</span></p><p>When an EPS image is successfully created, the method returns the HTTP Status Code <code>201 Created</code>. The method also returns the getImage URI in the <strong>Location</strong> response header.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> Make sure to capture the image ID URI returned in the response <a href="/develop/guides-v2/using-ebay-restful-apis#responseheaders" target="_blank">Location header</a> provided in the following format:</p><p><code>https://apim.ebay.com/commerce/media/v1_beta/image/<em>{image_id}</em></code> </p><p>You can capture the entire URI, or just save the <code>{image_id}</code> only. Pass the <code>{image_id}</code> as a path parameter in the <strong><a href="/develop/api/sell/media_api#sell-media_api-image-getimage" >getImage</a></strong> method to return the value needed to associate an image to a listing using the Trading and Inventory APIs.</p></div><p>See <a href="/api-docs/sell/static/inventory/managing-image-media.html" target="_blank">Managing images</a> for additional details.</p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds. </p></div>
     * @param CreateImageFromUrlRequest $body A type that provides the location of the image.
     * @param Create_image_from_urlRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateImageFromUrlRequest $body, ?Create_image_from_urlRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Create_image_from_urlRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_image_from_urlRequestBuilder {
        return new Create_image_from_urlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
