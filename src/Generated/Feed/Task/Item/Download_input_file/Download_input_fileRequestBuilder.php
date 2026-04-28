<?php

namespace EBay\ListingManagement\Generated\Feed\Task\Item\Download_input_file;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /task/{task_id}/download_input_file
*/
class Download_input_fileRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Download_input_fileRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/task/{task_id}/download_input_file');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method downloads the file previously uploaded using <strong>uploadFile</strong>. Specify the task_id from the <strong>uploadFile</strong> call. <p><span class="tablenote"><strong>Note:</strong> With respect to LMS, this method applies to all feed types except <code>LMS_ORDER_REPORT</code> and <code>LMS_ACTIVE_INVENTORY_REPORT</code>. See <a href="/api-docs/sell/static/feed/lms-feeds.html">LMS API Feeds</a> in the Selling Integration Guide.</span></p>
     * @param Download_input_fileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?Download_input_fileRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, null);
        return $result;
    }

    /**
     * This method downloads the file previously uploaded using <strong>uploadFile</strong>. Specify the task_id from the <strong>uploadFile</strong> call. <p><span class="tablenote"><strong>Note:</strong> With respect to LMS, this method applies to all feed types except <code>LMS_ORDER_REPORT</code> and <code>LMS_ACTIVE_INVENTORY_REPORT</code>. See <a href="/api-docs/sell/static/feed/lms-feeds.html">LMS API Feeds</a> in the Selling Integration Guide.</span></p>
     * @param Download_input_fileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Download_input_fileRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Download_input_fileRequestBuilder
    */
    public function withUrl(string $rawUrl): Download_input_fileRequestBuilder {
        return new Download_input_fileRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
