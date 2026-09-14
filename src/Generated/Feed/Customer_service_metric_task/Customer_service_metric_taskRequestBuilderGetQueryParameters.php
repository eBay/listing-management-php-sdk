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

namespace EBay\ListingManagement\Generated\Feed\Customer_service_metric_task;

/**
 * Use this method to return an array of customer service metric tasks. You can limit the tasks returned by specifying a date range. </p> <p> <span class="tablenote"><strong>Note:</strong> You can pass in either the <code>look_back_days</code> or <code>date_range</code>, but not both.</span></p>
*/
class Customer_service_metric_taskRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("date_range")
     * @var string|null $dateRange The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the look_back_days parameter. Format: UTC. For example, tasks within a range: yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ. Tasks created on March 8, 2020: 2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z. Maximum: 90 days.
    */
    public ?string $dateRange = null;
    
    /**
     * @QueryParameter("feed_type")
     * @var string|null $feedType The feed type associated with the tasks being retrieved. The only presently supported value is CUSTOMER_SERVICE_METRICS_REPORT.
    */
    public ?string $feedType = null;
    
    /**
     * @var int|null $limit The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 10. Maximum: 500.
    */
    public ?int $limit = null;
    
    /**
     * @QueryParameter("look_back_days")
     * @var int|null $lookBackDays The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default value: 7. Range: 1-90 (inclusive).
    */
    public ?int $lookBackDays = null;
    
    /**
     * @var int|null $offset The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0.
    */
    public ?int $offset = null;
    
    /**
     * Instantiates a new Customer_service_metric_taskRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $date_range The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the look_back_days parameter. Format: UTC. For example, tasks within a range: yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ. Tasks created on March 8, 2020: 2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z. Maximum: 90 days.
     * @param string|null $feed_type The feed type associated with the tasks being retrieved. The only presently supported value is CUSTOMER_SERVICE_METRICS_REPORT.
     * @param int|null $limit The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 10. Maximum: 500.
     * @param int|null $look_back_days The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default value: 7. Range: 1-90 (inclusive).
     * @param int|null $offset The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0.
    */
    public function __construct(?string $date_range = null, ?string $feed_type = null, ?int $limit = null, ?int $look_back_days = null, ?int $offset = null) {
        $this->dateRange = $date_range;
        $this->feedType = $feed_type;
        $this->limit = $limit;
        $this->lookBackDays = $look_back_days;
        $this->offset = $offset;
    }

}
