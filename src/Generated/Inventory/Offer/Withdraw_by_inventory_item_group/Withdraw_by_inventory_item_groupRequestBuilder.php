<?php

namespace EBay\ListingManagement\Generated\Inventory\Offer\Withdraw_by_inventory_item_group;

use EBay\ListingManagement\Generated\Inventory\Models\WithdrawByInventoryItemGroupRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /offer/withdraw_by_inventory_item_group
*/
class Withdraw_by_inventory_item_groupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Withdraw_by_inventory_item_groupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/offer/withdraw_by_inventory_item_group');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call is used to end a multiple-variation eBay listing that is associated with the specified inventory item group. This call only ends multiple-variation eBay listing associated with the inventory item group but does not delete the inventory item group object. Similarly, this call also does not delete any of the offers associated with the inventory item group, but instead all of these offers go into the unpublished state. If the seller wanted to relist the multiple-variation eBay listing, they could use the <strong>publishOfferByInventoryItemGroup</strong> method.
     * @param WithdrawByInventoryItemGroupRequest $body This type is used by the base request of the <strong>WithdrawByInventoryItemGroup</strong> method, which is used to end a multiple-variation listing.
     * @param Withdraw_by_inventory_item_groupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(WithdrawByInventoryItemGroupRequest $body, ?Withdraw_by_inventory_item_groupRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This call is used to end a multiple-variation eBay listing that is associated with the specified inventory item group. This call only ends multiple-variation eBay listing associated with the inventory item group but does not delete the inventory item group object. Similarly, this call also does not delete any of the offers associated with the inventory item group, but instead all of these offers go into the unpublished state. If the seller wanted to relist the multiple-variation eBay listing, they could use the <strong>publishOfferByInventoryItemGroup</strong> method.
     * @param WithdrawByInventoryItemGroupRequest $body This type is used by the base request of the <strong>WithdrawByInventoryItemGroup</strong> method, which is used to end a multiple-variation listing.
     * @param Withdraw_by_inventory_item_groupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WithdrawByInventoryItemGroupRequest $body, ?Withdraw_by_inventory_item_groupRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Withdraw_by_inventory_item_groupRequestBuilder
    */
    public function withUrl(string $rawUrl): Withdraw_by_inventory_item_groupRequestBuilder {
        return new Withdraw_by_inventory_item_groupRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
