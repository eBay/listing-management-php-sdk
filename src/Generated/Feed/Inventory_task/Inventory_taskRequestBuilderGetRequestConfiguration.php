<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\ListingManagement\Generated\Feed\Inventory_task;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Inventory_taskRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Inventory_taskRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Inventory_taskRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Inventory_taskRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Inventory_taskRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Inventory_taskRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Inventory_taskRequestBuilderGetQueryParameters.
     * @param string|null $date_range Specifies the range of task creation dates used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within the specified range. <p> <span class="tablenote"><strong>Note:</strong> Maximum date range window size is 90 days.</span></p><br /><strong>Valid Format (UTC):</strong> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ</code><br /><br />For example: Tasks created on March 31, 2021<br /> <code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code><br /><br />
     * @param string|null $feed_type The feed type associated with the inventory tasks being retrieved. Presently, only one feed type is available:<br><ul><li><code>LMS_ACTIVE_INVENTORY_REPORT</code></li></ul>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report value feed types</a> for more information.
     * @param int|null $limit The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used. <br /><br /><strong>Default: </strong> 10 <br /><br /><strong>Maximum: </strong>500
     * @param int|null $look_back_days The number of previous days in which to search for tasks. Do not use with the <code>date_range</code> parameter. If both <code>date_range</code> and <code>look_back_days</code> are omitted, this parameter's default value is used.  <br /><br /><strong>Default: </strong> 7 <br /><br /><strong>Range: </strong> 1-90 (inclusive)
     * @param int|null $offset The number of tasks to skip in the result set before returning the first task in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. <br /><br /><strong>Default: </strong>0
     * @param string|null $schedule_id <span class="tablenote"><strong>Note:</strong> Schedule functionality for ActiveInventoryReport is currently unavailable, so this field is not usable.</span>
     * @return Inventory_taskRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $date_range = null, ?string $feed_type = null, ?int $limit = null, ?int $look_back_days = null, ?int $offset = null, ?string $schedule_id = null): Inventory_taskRequestBuilderGetQueryParameters {
        return new Inventory_taskRequestBuilderGetQueryParameters($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id);
    }

}
