<?php

namespace EBay\ListingManagement\Generated\Inventory\Offer\Publish_by_inventory_item_group;

use EBay\ListingManagement\Generated\Inventory\Models\PublishByInventoryItemGroupRequest;
use EBay\ListingManagement\Generated\Inventory\Models\PublishResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /offer/publish_by_inventory_item_group
*/
class Publish_by_inventory_item_groupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Publish_by_inventory_item_groupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/offer/publish_by_inventory_item_group');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><strong>Note:</strong> Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls.</span><br><span class="tablenote"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call is used to convert all unpublished offers associated with an inventory item group into an active, multiple-variation listing.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling the create or update methods, but become required when publishing the offer to create active listings. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#offer" target="_blank">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>The unique identifier of the inventory item group (<strong>inventoryItemGroupKey</strong>) is passed in the request payload. All inventory items and their corresponding offers in the inventory item group must be valid (meet all requirements) for the <strong>publishOfferByInventoryItemGroup</strong> call to be completely successful. For any inventory items in the group that are missing required data or have no corresponding offers, the <strong>publishOfferByInventoryItemGroup</strong> will create a new multiple-variation listing, but any inventory items with missing required data/offers will not be in the newly-created listing. If any inventory items in the group to be published have invalid data, or one or more of the inventory items have conflicting data with one another, the <strong>publishOfferByInventoryItemGroup</strong> call will fail. Be sure to check for any error or warning messages in the call response for any applicable information about one or more inventory items/offers having issues.
     * @param PublishByInventoryItemGroupRequest $body This type is used by the request payload of the <strong>publishByInventoryItemGroup</strong> call. The identifier of the inventory item group to publish and the eBay marketplace where the listing will be published is needed in the request payload.
     * @param Publish_by_inventory_item_groupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PublishResponse|null>
     * @throws Exception
    */
    public function post(PublishByInventoryItemGroupRequest $body, ?Publish_by_inventory_item_groupRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PublishResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><strong>Note:</strong> Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls.</span><br><span class="tablenote"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call is used to convert all unpublished offers associated with an inventory item group into an active, multiple-variation listing.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling the create or update methods, but become required when publishing the offer to create active listings. For this method, see <a href="/api-docs/sell/static/inventory/publishing-offers.html#offer" target="_blank">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>The unique identifier of the inventory item group (<strong>inventoryItemGroupKey</strong>) is passed in the request payload. All inventory items and their corresponding offers in the inventory item group must be valid (meet all requirements) for the <strong>publishOfferByInventoryItemGroup</strong> call to be completely successful. For any inventory items in the group that are missing required data or have no corresponding offers, the <strong>publishOfferByInventoryItemGroup</strong> will create a new multiple-variation listing, but any inventory items with missing required data/offers will not be in the newly-created listing. If any inventory items in the group to be published have invalid data, or one or more of the inventory items have conflicting data with one another, the <strong>publishOfferByInventoryItemGroup</strong> call will fail. Be sure to check for any error or warning messages in the call response for any applicable information about one or more inventory items/offers having issues.
     * @param PublishByInventoryItemGroupRequest $body This type is used by the request payload of the <strong>publishByInventoryItemGroup</strong> call. The identifier of the inventory item group to publish and the eBay marketplace where the listing will be published is needed in the request payload.
     * @param Publish_by_inventory_item_groupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PublishByInventoryItemGroupRequest $body, ?Publish_by_inventory_item_groupRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Publish_by_inventory_item_groupRequestBuilder
    */
    public function withUrl(string $rawUrl): Publish_by_inventory_item_groupRequestBuilder {
        return new Publish_by_inventory_item_groupRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
