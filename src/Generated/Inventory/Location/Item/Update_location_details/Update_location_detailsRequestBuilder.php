<?php

namespace EBay\ListingManagement\Generated\Inventory\Location\Item\Update_location_details;

use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocation;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /location/{merchantLocationKey}/update_location_details
*/
class Update_location_detailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_location_detailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/location/{merchantLocationKey}/update_location_details');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <p>Use this call to update location details for an existing inventory location. Specify the inventory location you want to update using the <b>merchantLocationKey</b> path parameter. <p>You can update the following text-based fields: <strong>name</strong>, <strong>phone</strong>, <strong>timeZoneId</strong>, <strong>geoCoordinates</strong>, <strong>fulfillmentCenterSpecifications</strong>, <strong>locationTypes</strong>, <strong>locationWebUrl</strong>, <strong>locationInstructions</strong> and <strong>locationAdditionalInformation</strong> any number of times for any location type.</p> <p>For warehouse and store inventory locations, address fields can be updated any number of times. Address fields <b>cannot</b> be updated for fulfillment center locations. However, if any address fields were omitted during the <b>createInventoryLocation</b> call, they can be added through this method.</p><span class="tablenote"><b>Note:</b> When updating a warehouse location to a fulfillment center, sellers can update any of the address fields a single time during the same call used to make this update. After this, they can no longer be updated.</span><p>For store locations, the operating hours and/or the special hours can also be updated.</p><p>Whatever text is passed in for these fields in an <strong>updateInventoryLocation</strong> call will replace the current text strings defined for these fields.</p><p>Unless one or more errors and/or warnings occurs with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>204 No Content</i>.</p>
     * @param InventoryLocation $body This type is used by the <strong>updateInventoryLocation</strong> call to update operating hours, special hours, phone number, and other minor details of an inventory location.
     * @param Update_location_detailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(InventoryLocation $body, ?Update_location_detailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * <p>Use this call to update location details for an existing inventory location. Specify the inventory location you want to update using the <b>merchantLocationKey</b> path parameter. <p>You can update the following text-based fields: <strong>name</strong>, <strong>phone</strong>, <strong>timeZoneId</strong>, <strong>geoCoordinates</strong>, <strong>fulfillmentCenterSpecifications</strong>, <strong>locationTypes</strong>, <strong>locationWebUrl</strong>, <strong>locationInstructions</strong> and <strong>locationAdditionalInformation</strong> any number of times for any location type.</p> <p>For warehouse and store inventory locations, address fields can be updated any number of times. Address fields <b>cannot</b> be updated for fulfillment center locations. However, if any address fields were omitted during the <b>createInventoryLocation</b> call, they can be added through this method.</p><span class="tablenote"><b>Note:</b> When updating a warehouse location to a fulfillment center, sellers can update any of the address fields a single time during the same call used to make this update. After this, they can no longer be updated.</span><p>For store locations, the operating hours and/or the special hours can also be updated.</p><p>Whatever text is passed in for these fields in an <strong>updateInventoryLocation</strong> call will replace the current text strings defined for these fields.</p><p>Unless one or more errors and/or warnings occurs with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>204 No Content</i>.</p>
     * @param InventoryLocation $body This type is used by the <strong>updateInventoryLocation</strong> call to update operating hours, special hours, phone number, and other minor details of an inventory location.
     * @param Update_location_detailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InventoryLocation $body, ?Update_location_detailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Update_location_detailsRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_location_detailsRequestBuilder {
        return new Update_location_detailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
