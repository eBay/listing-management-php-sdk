<?php

namespace EBay\ListingManagement\Generated\Media\Document\Item\Upload;

use EBay\ListingManagement\Generated\Media\Models\DocumentResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /document/{document_id}/upload
*/
class UploadRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UploadRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/document/{document_id}/upload');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method associates the specified file with the specified document ID and uploads the input file. After the file has been uploaded, the processing of the file begins. Supported file types include .PDF, .JPEG/.JPG, and .PNG, with a maximum file size of 10 MB (10485760 bytes).<br><br><span class="tablenote"><b>Note:</b> Animated and multi-page PNG files are not currently supported.</span><br><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The document ID value returned in the response of the <a href="/api-docs/commerce/media/resources/document/methods/createDocument">createDocument</a> method is a required input path parameter for this method. This value is also returned in the <b>location</b> header of the <b>createDocument</b> response payload.</span><br>A successful upload returns the HTTP Status Code <code>200 OK</code>.<br><p>See <a href="/api-docs/sell/static/inventory/managing-document-media.html" target="_blank">Managing documents</a> for additional information.</p> <span class="tablenote"><b>Note:</b> You must use a <strong>Content-Type</strong> header with its value set to <b>multipart/form-data</b>.</p></span></p>This call does not have a JSON Request payload but uploads the file as form-data. For example:<br /> <pre>file: @&quot;/C:/Users/.../drone_user_warranty.pdf&quot;</pre>See <a href="/api-docs/commerce/media/resources/document/methods/uploadDocument#h2-samples">Samples</a> for information.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds.</p></div>
     * @param UploadRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentResponse|null>
     * @throws Exception
    */
    public function post(?UploadRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method associates the specified file with the specified document ID and uploads the input file. After the file has been uploaded, the processing of the file begins. Supported file types include .PDF, .JPEG/.JPG, and .PNG, with a maximum file size of 10 MB (10485760 bytes).<br><br><span class="tablenote"><b>Note:</b> Animated and multi-page PNG files are not currently supported.</span><br><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The document ID value returned in the response of the <a href="/api-docs/commerce/media/resources/document/methods/createDocument">createDocument</a> method is a required input path parameter for this method. This value is also returned in the <b>location</b> header of the <b>createDocument</b> response payload.</span><br>A successful upload returns the HTTP Status Code <code>200 OK</code>.<br><p>See <a href="/api-docs/sell/static/inventory/managing-document-media.html" target="_blank">Managing documents</a> for additional information.</p> <span class="tablenote"><b>Note:</b> You must use a <strong>Content-Type</strong> header with its value set to <b>multipart/form-data</b>.</p></span></p>This call does not have a JSON Request payload but uploads the file as form-data. For example:<br /> <pre>file: @&quot;/C:/Users/.../drone_user_warranty.pdf&quot;</pre>See <a href="/api-docs/commerce/media/resources/document/methods/uploadDocument#h2-samples">Samples</a> for information.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>All POST methods in the Media API, including this method, are subject to short-duration rate limits at the user level: 50 requests per 5 seconds.</p></div>
     * @param UploadRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?UploadRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UploadRequestBuilder
    */
    public function withUrl(string $rawUrl): UploadRequestBuilder {
        return new UploadRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
