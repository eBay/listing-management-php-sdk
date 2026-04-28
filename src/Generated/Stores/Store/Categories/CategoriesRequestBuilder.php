<?php

namespace EBay\ListingManagement\Generated\Stores\Store\Categories;

use EBay\ListingManagement\Generated\Stores\Models\AddStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\GetStoreCategoriesResponseType;
use EBay\ListingManagement\Generated\Stores\Store\Categories\Item\WithCategory_ItemRequestBuilder;
use EBay\ListingManagement\Generated\Stores\Store\Categories\Move_category\Move_categoryRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /store/categories
*/
class CategoriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The move_category property
    */
    public function move_category(): Move_categoryRequestBuilder {
        return new Move_categoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Stores.store.categories.item collection
     * @param string $category_id The unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID. This is the category that is to be renamed.
     * @return WithCategory_ItemRequestBuilder
    */
    public function byCategory_id(string $category_id): WithCategory_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['category_id'] = $category_id;
        return new WithCategory_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CategoriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/store/categories');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to retrieve the category hierarchy for an eBay user's store.<br><br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported.</span>
     * @param CategoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetStoreCategoriesResponseType|null>
     * @throws Exception
    */
    public function get(?CategoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetStoreCategoriesResponseType::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method is used to add a single new custom category to a user's eBay store through an asynchronous request. A successful call returns the <b>getStoreTask</b> URI in the Location response header. Call <b>getStoreTask</b> (or <b>getStoreTasks</b>) method to retrieve the status of the add category operation.<br><br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported.</span><br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> If you initiate a category change, you cannot make additional category changes until the previous change request has completed. Use getStoreTask (or getStoreTasks) method to get latest status of your last request.</p></div>
     * @param AddStoreCategoryRequestType $body The base request type of the <b>addStoreCategory</b> method. It is used to provide the name and location for the new category.
     * @param CategoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(AddStoreCategoryRequestType $body, ?CategoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method is used to retrieve the category hierarchy for an eBay user's store.<br><br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported.</span>
     * @param CategoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CategoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method is used to add a single new custom category to a user's eBay store through an asynchronous request. A successful call returns the <b>getStoreTask</b> URI in the Location response header. Call <b>getStoreTask</b> (or <b>getStoreTasks</b>) method to retrieve the status of the add category operation.<br><br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported.</span><br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> If you initiate a category change, you cannot make additional category changes until the previous change request has completed. Use getStoreTask (or getStoreTasks) method to get latest status of your last request.</p></div>
     * @param AddStoreCategoryRequestType $body The base request type of the <b>addStoreCategory</b> method. It is used to provide the name and location for the new category.
     * @param CategoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddStoreCategoryRequestType $body, ?CategoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return CategoriesRequestBuilder
    */
    public function withUrl(string $rawUrl): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
