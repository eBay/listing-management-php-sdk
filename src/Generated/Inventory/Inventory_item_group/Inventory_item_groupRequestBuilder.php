<?php

namespace EBay\ListingManagement\Generated\Inventory\Inventory_item_group;

use EBay\ListingManagement\Generated\Inventory\Inventory_item_group\Item\WithInventoryItemGroupKeyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /inventory_item_group
*/
class Inventory_item_groupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Inventory.inventory_item_group.item collection
     * @param string $inventoryItemGroupKey This path parameter specifies the unique identifier of the inventory item group being retrieved. This value is assigned by the seller when an inventory item group is created.
     * @return WithInventoryItemGroupKeyItemRequestBuilder
    */
    public function byInventoryItemGroupKey(string $inventoryItemGroupKey): WithInventoryItemGroupKeyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['inventoryItemGroupKey'] = $inventoryItemGroupKey;
        return new WithInventoryItemGroupKeyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Inventory_item_groupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/inventory_item_group');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
