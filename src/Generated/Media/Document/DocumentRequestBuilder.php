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

namespace EBay\ListingManagement\Generated\Media\Document;

use EBay\ListingManagement\Generated\Media\Document\Create_document_from_url\Create_document_from_urlRequestBuilder;
use EBay\ListingManagement\Generated\Media\Document\Item\WithDocument_ItemRequestBuilder;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /document
*/
class DocumentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The create_document_from_url property
    */
    public function create_document_from_url(): Create_document_from_urlRequestBuilder {
        return new Create_document_from_urlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Media.document.item collection
     * @param string $document_id The unique identifier of the document for which status and metadata is being retrieved.<br><br>This value is returned in the response of the <a href="/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/document');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method stages a document to be uploaded, and requires the type of document to be uploaded, and the language(s) that the document contains. A successful call returns a <b>documentId</b> value that is then used as a path parameter in an <a href=" /api-docs/commerce/media/resources/document/methods/uploadDocument" >uploadDocument</a> call.<p>When a document is successfully created, the method returns the HTTP Status Code <code>201 Created.</code> The method returns <b>documentId</b> in the response payload, which you can use to retrieve the document resource. This ID is also returned in the <b>location</b> header, for convenience.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Make sure to capture the document ID value returned in the response payload. This value is required to use the other methods in the <b>document</b> resource, and also needed to associate a document to a listing using the Trading and Inventory APIs.</p></div><br><p>To upload a created document, use the document ID returned from this method's response with the <a href=" /api-docs/commerce/media/resources/document/methods/uploadDocument" >uploadDocument</a> method. See <a href="/api-docs/sell/static/inventory/managing-document-media.html" target="_blank">Managing documents</a> for information on creating, uploading, and adding documents to listings.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds.</p></div> 
     * @param CreateDocumentRequest $body This type contains the metadata used to create the document ID.
     * @param DocumentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateDocumentResponse|null>
     * @throws Exception
    */
    public function post(CreateDocumentRequest $body, ?DocumentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateDocumentResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method stages a document to be uploaded, and requires the type of document to be uploaded, and the language(s) that the document contains. A successful call returns a <b>documentId</b> value that is then used as a path parameter in an <a href=" /api-docs/commerce/media/resources/document/methods/uploadDocument" >uploadDocument</a> call.<p>When a document is successfully created, the method returns the HTTP Status Code <code>201 Created.</code> The method returns <b>documentId</b> in the response payload, which you can use to retrieve the document resource. This ID is also returned in the <b>location</b> header, for convenience.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Make sure to capture the document ID value returned in the response payload. This value is required to use the other methods in the <b>document</b> resource, and also needed to associate a document to a listing using the Trading and Inventory APIs.</p></div><br><p>To upload a created document, use the document ID returned from this method's response with the <a href=" /api-docs/commerce/media/resources/document/methods/uploadDocument" >uploadDocument</a> method. See <a href="/api-docs/sell/static/inventory/managing-document-media.html" target="_blank">Managing documents</a> for information on creating, uploading, and adding documents to listings.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds.</p></div> 
     * @param CreateDocumentRequest $body This type contains the metadata used to create the document ID.
     * @param DocumentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateDocumentRequest $body, ?DocumentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DocumentRequestBuilder
    */
    public function withUrl(string $rawUrl): DocumentRequestBuilder {
        return new DocumentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
