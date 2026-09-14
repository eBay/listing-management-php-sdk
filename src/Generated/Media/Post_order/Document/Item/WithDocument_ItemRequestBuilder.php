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

namespace EBay\ListingManagement\Generated\Media\Post_order\Document\Item;

use EBay\ListingManagement\Generated\Media\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post_order/document/{document_id}
*/
class WithDocument_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithDocument_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post_order/document/{document_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method deletes a previously uploaded document by its document ID. Only documents in <strong>SUBMITTED</strong> state can be removed; documents in the <strong>PUBLISHED</strong> state cannot be deleted.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method is currently restricted and requires a special <strong>OAuth scope</strong> not available to all users.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>After a document is uploaded (but not yet published), its status is <strong>SUBMITTED</strong>. When its identifier is associated with a post‑order entity through an eBay GraphQL mutation, the status changes to <strong>PUBLISHED</strong>. A post-order entity is part of eBay's order management for activities after purchase (such as returns).</span></p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important! </span></strong></span></span>All documents, whether submitted or published, expire and become inaccessible after their expiration date.</p></div> 
     * @param WithDocument_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithDocument_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '401' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method downloads the  file associated with the specified document ID. Access depends on the document’s state:<ul><li>SUBMITTED: Only the document owner can download it </li><li>PUBLISHED: The document is no longer restricted to the owner and can be downloaded by authorized parties involved in the specific post‑order flow based on the <strong>documentUsageType</strong></li></ul><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method is currently restricted and requires a special <strong>OAuth scope</strong> not available to all users.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>After a document is uploaded (but not yet published), its status is <strong>SUBMITTED</strong>. Once its identifier is linked to a post‑order entity through an eBay GraphQL mutation, the status changes to <strong>PUBLISHED</strong>. A post-order entity is part of eBay's order management for activities after purchase (such as returns).</span></p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important! </span></strong></span></span>The document must be in the <strong>SUBMITTED</strong>  or <strong>PUBLISHED</strong> state to be downloadable. All documents (published or submitted) expire and become inaccessible after their expiration date.</p></div>
     * @param WithDocument_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?WithDocument_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '401' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method deletes a previously uploaded document by its document ID. Only documents in <strong>SUBMITTED</strong> state can be removed; documents in the <strong>PUBLISHED</strong> state cannot be deleted.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method is currently restricted and requires a special <strong>OAuth scope</strong> not available to all users.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>After a document is uploaded (but not yet published), its status is <strong>SUBMITTED</strong>. When its identifier is associated with a post‑order entity through an eBay GraphQL mutation, the status changes to <strong>PUBLISHED</strong>. A post-order entity is part of eBay's order management for activities after purchase (such as returns).</span></p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important! </span></strong></span></span>All documents, whether submitted or published, expire and become inaccessible after their expiration date.</p></div> 
     * @param WithDocument_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithDocument_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method downloads the  file associated with the specified document ID. Access depends on the document’s state:<ul><li>SUBMITTED: Only the document owner can download it </li><li>PUBLISHED: The document is no longer restricted to the owner and can be downloaded by authorized parties involved in the specific post‑order flow based on the <strong>documentUsageType</strong></li></ul><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method is currently restricted and requires a special <strong>OAuth scope</strong> not available to all users.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>After a document is uploaded (but not yet published), its status is <strong>SUBMITTED</strong>. Once its identifier is linked to a post‑order entity through an eBay GraphQL mutation, the status changes to <strong>PUBLISHED</strong>. A post-order entity is part of eBay's order management for activities after purchase (such as returns).</span></p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important! </span></strong></span></span>The document must be in the <strong>SUBMITTED</strong>  or <strong>PUBLISHED</strong> state to be downloadable. All documents (published or submitted) expire and become inaccessible after their expiration date.</p></div>
     * @param WithDocument_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithDocument_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/pdf, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithDocument_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithDocument_ItemRequestBuilder {
        return new WithDocument_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
