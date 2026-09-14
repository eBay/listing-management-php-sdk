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

namespace EBay\ListingManagement\Generated\Feed\Task\Item\Upload_file;

use EBay\ListingManagement\Generated\Feed\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\MultiPartBody;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /task/{task_id}/upload_file
*/
class Upload_fileRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Upload_fileRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/task/{task_id}/upload_file');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method associates the specified file with the specified task ID and uploads the input file. After the file has been uploaded, the processing of the file begins. <br><br>Reports often take time to generate and it's common for this method to return an HTTP status of 202, which indicates the report is being generated. Use the <strong>getTask</strong> with the task ID or <strong>getTasks</strong> to determine the status of a report. <br><br>The status flow is <code>QUEUED</code> &gt; <code>IN_PROCESS</code> &gt; <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code>. When the status is <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code>, this indicates the file has been processed and the order report can be downloaded. If there are errors, they will be indicated in the report file. <br /><br />For details of how this method is used in the upload flow, see <a href="/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html">Working with Order Feeds</a> in the Selling Integration Guide. <br><br>This call does not have a JSON Request payload but uploads the file as form-data. For example:<br /> <pre> fileName: &quot;AddFixedPriceItem_Macbook.xml&quot; <br /> name: &quot;file&quot; <br /> type: &quot;form-data&quot; <br /> file: @&quot;/C:/Users/.../AddFixedPriceItem_Macbook.7z&quot;</pre>See <strong>Samples</strong> for information.<p><span class="tablenote"><strong>Note:</strong> This method applies to all <a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#availabl" target="_blank">Seller Hub feed types</a>, and to all <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl" target="_blank">LMS feed types</a> except <code>LMS_ORDER_REPORT</code> and <code>LMS_ACTIVE_INVENTORY_REPORT</code>.</span></p><p> <span class="tablenote"><strong>Note:</strong> You must use a <strong>Content-Type</strong> header with its value set to "<strong>multipart/form-data</strong>". See <strong>Samples</strong> for information.</span></p><p><span class="tablenote"><strong>Note:</strong> For LMS feed types, upload a regular XML file or an XML file in zipped format (both formats are allowed).</span></p>
     * @param MultiPartBody $body The request body
     * @param Upload_fileRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Upload_filePostResponse|null>
     * @throws Exception
    */
    public function post(MultiPartBody $body, ?Upload_fileRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '401' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Upload_filePostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method associates the specified file with the specified task ID and uploads the input file. After the file has been uploaded, the processing of the file begins. <br><br>Reports often take time to generate and it's common for this method to return an HTTP status of 202, which indicates the report is being generated. Use the <strong>getTask</strong> with the task ID or <strong>getTasks</strong> to determine the status of a report. <br><br>The status flow is <code>QUEUED</code> &gt; <code>IN_PROCESS</code> &gt; <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code>. When the status is <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code>, this indicates the file has been processed and the order report can be downloaded. If there are errors, they will be indicated in the report file. <br /><br />For details of how this method is used in the upload flow, see <a href="/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html">Working with Order Feeds</a> in the Selling Integration Guide. <br><br>This call does not have a JSON Request payload but uploads the file as form-data. For example:<br /> <pre> fileName: &quot;AddFixedPriceItem_Macbook.xml&quot; <br /> name: &quot;file&quot; <br /> type: &quot;form-data&quot; <br /> file: @&quot;/C:/Users/.../AddFixedPriceItem_Macbook.7z&quot;</pre>See <strong>Samples</strong> for information.<p><span class="tablenote"><strong>Note:</strong> This method applies to all <a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#availabl" target="_blank">Seller Hub feed types</a>, and to all <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl" target="_blank">LMS feed types</a> except <code>LMS_ORDER_REPORT</code> and <code>LMS_ACTIVE_INVENTORY_REPORT</code>.</span></p><p> <span class="tablenote"><strong>Note:</strong> You must use a <strong>Content-Type</strong> header with its value set to "<strong>multipart/form-data</strong>". See <strong>Samples</strong> for information.</span></p><p><span class="tablenote"><strong>Note:</strong> For LMS feed types, upload a regular XML file or an XML file in zipped format (both formats are allowed).</span></p>
     * @param MultiPartBody $body The request body
     * @param Upload_fileRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MultiPartBody $body, ?Upload_fileRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "multipart/form-data", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Upload_fileRequestBuilder
    */
    public function withUrl(string $rawUrl): Upload_fileRequestBuilder {
        return new Upload_fileRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
