<?php

namespace EBay\ListingManagement\Generated\Inventory\Location\Item\Enable;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /location/{merchantLocationKey}/enable
*/
class EnableRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EnableRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/location/{merchantLocationKey}/enable');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <p>This call enables a disabled inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Once a disabled location is enabled, sellers can start loading/modifying inventory to that location. </p><p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>
     * @param EnableRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EnablePostResponse|null>
     * @throws Exception
    */
    public function post(?EnableRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EnablePostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <p>This call enables a disabled inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Once a disabled location is enabled, sellers can start loading/modifying inventory to that location. </p><p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>
     * @param EnableRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?EnableRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EnableRequestBuilder
    */
    public function withUrl(string $rawUrl): EnableRequestBuilder {
        return new EnableRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
