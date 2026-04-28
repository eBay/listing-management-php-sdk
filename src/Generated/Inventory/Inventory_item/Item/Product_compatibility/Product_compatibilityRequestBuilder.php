<?php

namespace EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\Product_compatibility;

use EBay\ListingManagement\Generated\Inventory\Models\BaseResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Compatibility;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /inventory_item/{sku}/product_compatibility
*/
class Product_compatibilityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Product_compatibilityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/inventory_item/{sku}/product_compatibility');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call is used by the seller to delete the list of products that are compatible with the inventory item that is associated with the compatible product list. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.
     * @param Product_compatibilityRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?Product_compatibilityRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This call is used by the seller to retrieve the list of products that are compatible with the inventory item. The SKU value for the inventory item is passed into the call URI, and a successful call with return the compatible vehicle list associated with this inventory item. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.
     * @param Product_compatibilityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Compatibility|null>
     * @throws Exception
    */
    public function get(?Product_compatibilityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Compatibility::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call is used by the seller to create or replace a list of products that are compatible with the inventory item. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.<br><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href="/api-docs/sell/inventory/resources/inventory_item/product_compatibility/methods/createOrReplaceProductCompatibility#h3-request-headers">HTTP request headers</a> for more information.</span>
     * @param Compatibility $body This type is used by the <strong>createOrReplaceProductCompatibility</strong> call to associate compatible vehicles to an inventory item. This type is also the base response of the <strong>getProductCompatibility</strong> call.
     * @param Product_compatibilityRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BaseResponse|null>
     * @throws Exception
    */
    public function put(Compatibility $body, ?Product_compatibilityRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [BaseResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call is used by the seller to delete the list of products that are compatible with the inventory item that is associated with the compatible product list. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.
     * @param Product_compatibilityRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?Product_compatibilityRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * This call is used by the seller to retrieve the list of products that are compatible with the inventory item. The SKU value for the inventory item is passed into the call URI, and a successful call with return the compatible vehicle list associated with this inventory item. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.
     * @param Product_compatibilityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Product_compatibilityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This call is used by the seller to create or replace a list of products that are compatible with the inventory item. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.<br><br><span class="tablenote"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href="/api-docs/sell/inventory/resources/inventory_item/product_compatibility/methods/createOrReplaceProductCompatibility#h3-request-headers">HTTP request headers</a> for more information.</span>
     * @param Compatibility $body This type is used by the <strong>createOrReplaceProductCompatibility</strong> call to associate compatible vehicles to an inventory item. This type is also the base response of the <strong>getProductCompatibility</strong> call.
     * @param Product_compatibilityRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(Compatibility $body, ?Product_compatibilityRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return Product_compatibilityRequestBuilder
    */
    public function withUrl(string $rawUrl): Product_compatibilityRequestBuilder {
        return new Product_compatibilityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
