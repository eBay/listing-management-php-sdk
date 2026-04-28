<?php

namespace EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku\Item;

use EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku\Item\Locations\LocationsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /listing/{listingId}/sku/{sku}
*/
class WithSkuItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The locations property
    */
    public function locations(): LocationsRequestBuilder {
        return new LocationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithSkuItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/listing/{listingId}/sku/{sku}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
