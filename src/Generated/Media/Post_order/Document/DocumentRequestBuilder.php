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

namespace EBay\ListingManagement\Generated\Media\Post_order\Document;

use EBay\ListingManagement\Generated\Media\Models\Error;
use EBay\ListingManagement\Generated\Media\Post_order\Document\Item\WithDocument_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post_order/document
*/
class DocumentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Media.post_order.document.item collection
     * @param string $document_id This path parameter is the unique identifier of the document associated with the file to be downloaded. This ID was returned in the <a href="/develop/guides-v2/using-ebay-restful-apis#responseheaders" target="_blank">Location response header</a> when calling the <strong><a href="/develop/api/sell/media_api#sell-media_api-post_order-uploadpostorderdocument">uploadPostOrderDocument</a></strong> method to upload the document.
     * @return WithDocument_ItemRequestBuilder
    */
    public function byDocument_id(string $document_id): WithDocument_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['document_id'] = $document_id;
        return new WithDocument_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DocumentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post_order/document');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method uploads a document for post‑order processes (for example, a seller providing a return shipping label).<p> Supported file types include .PDF, .JPEG/.JPG, .BMP, .GIF and .PNG, with a maximum file size of 5&nbsp;MB&nbsp;(5,242,880&nbsp;bytes).<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method is currently restricted and requires a special <strong>OAuth scope</strong> not available to all users.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Animated and multi-page PNG files are not currently supported. For multi-page content, use PDF. The maximum number of pages allowed varies by the <strong>documentUsageType</strong>.</span></p><p>Send a multipart/form‑data request with:</p><ul><li><strong>file</strong>: the document file, set <code>key: file</code></li><li><strong>documentUsageType</strong>: for example, <code>RETURN_SHIPPING_LABEL</code></li><li><strong>entityType</strong>: for example, <code>RETURNS</code></li><li><strong>entityId</strong>: the unique identifier for the post-order entity</li></ul><p>A successful call returns the HTTP Status Code <strong>201 Created</strong> with the document ID in the <strong>Location header</strong> (no response body is returned). The document’s initial state is <strong>SUBMITTED</strong>. When its identifier is associated with a post-order entity through an eBay GraphQL mutation, the state changes to <strong>PUBLISHED</strong>. </p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A post-order entity is part of eBay's order management for activities after purchase (such as returns).</span></p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important! </span></strong></span></span><br><ul><li>Capture and retain the <strong>documentId</strong> in the response's <a href="/develop/guides-v2/using-ebay-restful-apis#responseheaders" target="_blank">Location header</a>. It is required to use the other <strong>post_order</strong> methods and to associate the document with a post-order entity. The location response header contains the URI of the newly created document ID in the format:<br><code> https://apiz.ebay.com/commerce/media/v1_beta/post_order/document/{documentId}</code></li><li>All documents (published or submitted) expire and become inaccessible after their expiration date.</li><li>All <strong>POST</strong> methods in the <strong>Media API</strong>, including this method, are subject to short-duration, user-level rate limits: 50 requests per 5 seconds.</li></ul></p></div>
     * @param DocumentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentPostResponse|null>
     * @throws Exception
    */
    public function post(?DocumentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '401' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method uploads a document for post‑order processes (for example, a seller providing a return shipping label).<p> Supported file types include .PDF, .JPEG/.JPG, .BMP, .GIF and .PNG, with a maximum file size of 5&nbsp;MB&nbsp;(5,242,880&nbsp;bytes).<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method is currently restricted and requires a special <strong>OAuth scope</strong> not available to all users.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Animated and multi-page PNG files are not currently supported. For multi-page content, use PDF. The maximum number of pages allowed varies by the <strong>documentUsageType</strong>.</span></p><p>Send a multipart/form‑data request with:</p><ul><li><strong>file</strong>: the document file, set <code>key: file</code></li><li><strong>documentUsageType</strong>: for example, <code>RETURN_SHIPPING_LABEL</code></li><li><strong>entityType</strong>: for example, <code>RETURNS</code></li><li><strong>entityId</strong>: the unique identifier for the post-order entity</li></ul><p>A successful call returns the HTTP Status Code <strong>201 Created</strong> with the document ID in the <strong>Location header</strong> (no response body is returned). The document’s initial state is <strong>SUBMITTED</strong>. When its identifier is associated with a post-order entity through an eBay GraphQL mutation, the state changes to <strong>PUBLISHED</strong>. </p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A post-order entity is part of eBay's order management for activities after purchase (such as returns).</span></p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important! </span></strong></span></span><br><ul><li>Capture and retain the <strong>documentId</strong> in the response's <a href="/develop/guides-v2/using-ebay-restful-apis#responseheaders" target="_blank">Location header</a>. It is required to use the other <strong>post_order</strong> methods and to associate the document with a post-order entity. The location response header contains the URI of the newly created document ID in the format:<br><code> https://apiz.ebay.com/commerce/media/v1_beta/post_order/document/{documentId}</code></li><li>All documents (published or submitted) expire and become inaccessible after their expiration date.</li><li>All <strong>POST</strong> methods in the <strong>Media API</strong>, including this method, are subject to short-duration, user-level rate limits: 50 requests per 5 seconds.</li></ul></p></div>
     * @param DocumentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?DocumentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DocumentRequestBuilder
    */
    public function withUrl(string $rawUrl): DocumentRequestBuilder {
        return new DocumentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
