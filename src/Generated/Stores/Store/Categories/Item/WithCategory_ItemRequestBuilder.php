<?php

namespace EBay\ListingManagement\Generated\Stores\Store\Categories\Item;

use EBay\ListingManagement\Generated\Stores\Models\DeleteStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\RenameStoreCategoryRequestType;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /store/categories/{category_id}
*/
class WithCategory_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithCategory_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/store/categories/{category_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to delete one custom category of a user's eBay store through an asynchronous request. A successful call returns the <b>getStoreTask</b> URI in the Location response header. Call <b>getStoreTask</b> (or <b>getStoreTasks</b>) method to retrieve the status of the delete category operation.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> If you initiate a category change, you cannot make additional category changes until the previous change request has completed. Use getStoreTask (or getStoreTasks) method to get latest status of your last request.</p></div>
     * @param DeleteStoreCategoryRequestType $body The base request type of the <b>deleteStoreCategory</b> method. It is used to provide a new category home for the listings that are currently in the store category to be deleted.
     * @param WithCategory_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(DeleteStoreCategoryRequestType $body, ?WithCategory_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method is used to rename the single category of a user's eBay store through an asynchronous request. A successful call returns the <b>getStoreTask</b> URI in the Location response header. The user calls <b>getStoreTask</b> to retrieve the status of the rename category operation.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> If you initiate a category change, you cannot make additional category changes until the previous change request has completed. Use getStoreTask (or getStoreTasks) method to get latest status of your last request.</p></div>
     * @param RenameStoreCategoryRequestType $body The base request type of the <b>renameStoreCategory</b> method. It is used to rename a customized eBay Store category.
     * @param WithCategory_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function put(RenameStoreCategoryRequestType $body, ?WithCategory_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method is used to delete one custom category of a user's eBay store through an asynchronous request. A successful call returns the <b>getStoreTask</b> URI in the Location response header. Call <b>getStoreTask</b> (or <b>getStoreTasks</b>) method to retrieve the status of the delete category operation.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> If you initiate a category change, you cannot make additional category changes until the previous change request has completed. Use getStoreTask (or getStoreTasks) method to get latest status of your last request.</p></div>
     * @param DeleteStoreCategoryRequestType $body The base request type of the <b>deleteStoreCategory</b> method. It is used to provide a new category home for the listings that are currently in the store category to be deleted.
     * @param WithCategory_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(DeleteStoreCategoryRequestType $body, ?WithCategory_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * This method is used to rename the single category of a user's eBay store through an asynchronous request. A successful call returns the <b>getStoreTask</b> URI in the Location response header. The user calls <b>getStoreTask</b> to retrieve the status of the rename category operation.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> If you initiate a category change, you cannot make additional category changes until the previous change request has completed. Use getStoreTask (or getStoreTasks) method to get latest status of your last request.</p></div>
     * @param RenameStoreCategoryRequestType $body The base request type of the <b>renameStoreCategory</b> method. It is used to rename a customized eBay Store category.
     * @param WithCategory_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(RenameStoreCategoryRequestType $body, ?WithCategory_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithCategory_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCategory_ItemRequestBuilder {
        return new WithCategory_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
