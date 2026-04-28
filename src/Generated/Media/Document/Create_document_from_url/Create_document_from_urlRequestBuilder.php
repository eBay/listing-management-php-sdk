<?php

namespace EBay\ListingManagement\Generated\Media\Document\Create_document_from_url;

use EBay\ListingManagement\Generated\Media\Models\CreateDocumentFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /document/create_document_from_url
*/
class Create_document_from_urlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_document_from_urlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/document/create_document_from_url');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method downloads a document from the provided URL and adds that document to the user's account. This method requires the URL of the document, the type of document to be uploaded, and the language(s) that the document contains. <br><br>When a document is successfully created, the method returns the HTTP Status Code <code>201 Created.</code> The method returns <b>documentId</b> in the response payload, which you can use to retrieve the document resource. This ID is also returned in the <b>location</b> header, for convenience.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Make sure to capture the document ID value returned in the response payload. This value is required to use the other methods in the <b>document</b> resource, and also needed to associate a document to a listing using the Trading and Inventory APIs.</p></div><br>After creating a document using this method, a <a href="/api-docs/commerce/media/resources/document/methods/getDocument" target="_blank">getDocument</a> call should be made to check for a <b>documentStatus</b> of <code>ACCEPTED</code>. Only documents with this status can be added to a listing. See <a href="/api-docs/sell/static/inventory/managing-document-media.html" target="_blank">Managing documents</a> for more information on creating, uploading, and adding documents to listings.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds.</p></div>
     * @param CreateDocumentFromUrlRequest $body This type contains the metadata used to create the document ID when creating a document using a URL.
     * @param Create_document_from_urlRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateDocumentResponse|null>
     * @throws Exception
    */
    public function post(CreateDocumentFromUrlRequest $body, ?Create_document_from_urlRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateDocumentResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method downloads a document from the provided URL and adds that document to the user's account. This method requires the URL of the document, the type of document to be uploaded, and the language(s) that the document contains. <br><br>When a document is successfully created, the method returns the HTTP Status Code <code>201 Created.</code> The method returns <b>documentId</b> in the response payload, which you can use to retrieve the document resource. This ID is also returned in the <b>location</b> header, for convenience.</p><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Make sure to capture the document ID value returned in the response payload. This value is required to use the other methods in the <b>document</b> resource, and also needed to associate a document to a listing using the Trading and Inventory APIs.</p></div><br>After creating a document using this method, a <a href="/api-docs/commerce/media/resources/document/methods/getDocument" target="_blank">getDocument</a> call should be made to check for a <b>documentStatus</b> of <code>ACCEPTED</code>. Only documents with this status can be added to a listing. See <a href="/api-docs/sell/static/inventory/managing-document-media.html" target="_blank">Managing documents</a> for more information on creating, uploading, and adding documents to listings.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds.</p></div>
     * @param CreateDocumentFromUrlRequest $body This type contains the metadata used to create the document ID when creating a document using a URL.
     * @param Create_document_from_urlRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateDocumentFromUrlRequest $body, ?Create_document_from_urlRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Create_document_from_urlRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_document_from_urlRequestBuilder {
        return new Create_document_from_urlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
