<?php

namespace EBay\ListingManagement\Generated\Inventory\Listing;

use EBay\ListingManagement\Generated\Inventory\Listing\Item\WithListingItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /listing
*/
class ListingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Inventory.listing.item collection
     * @param string $listingId This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be retrieved.<br><br>Use the <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers" target="_blank ">getOffers</a> method of the <b>Inventory API</b> or the <a href="/devzone/xml/docs/reference/ebay/getmyebayselling.html" target="_blank ">GetMyEbaySelling</a> method of the <b>Trading API</b> to retrieve all listing IDs for all active listings.
     * @return WithListingItemRequestBuilder
    */
    public function byListingId(string $listingId): WithListingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['listingId'] = $listingId;
        return new WithListingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ListingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/listing');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
