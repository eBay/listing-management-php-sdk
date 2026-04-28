<?php

namespace EBay\ListingManagement\Generated\Inventory\Location;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LocationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LocationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LocationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LocationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LocationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LocationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LocationRequestBuilderGetQueryParameters.
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results. <br><br> <strong>Min</strong>: 1
     * @param string|null $offset Specifies the number of locations to skip in the result set before returning the first location in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @return LocationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null): LocationRequestBuilderGetQueryParameters {
        return new LocationRequestBuilderGetQueryParameters($limit, $offset);
    }

}
