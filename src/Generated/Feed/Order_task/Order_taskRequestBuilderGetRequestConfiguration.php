<?php

namespace EBay\ListingManagement\Generated\Feed\Order_task;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Order_taskRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Order_taskRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Order_taskRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Order_taskRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Order_taskRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Order_taskRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Order_taskRequestBuilderGetQueryParameters.
     * @param string|null $date_range The order tasks creation date range. This range is used to filter the results. The filtered results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only orders less than 90 days old can be retrieved. Do not use with the <strong>look_back_days</strong> parameter. <br /><br /><b>Format: </b>UTC   <br /><br /> <b> For example: </b> <br /><br />Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on September 8, 2019<br /> <code>2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z</code><br />
     * @param string|null $feed_type The feed type associated with the order tasks being retrieved. The only presently supported value is <code>LMS_ORDER_REPORT</code><br><br>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types">Report download feed types</a> for more information.<br><br><span class="tablenote"><b>Note:</b> Do not use with the <strong>schedule_id</strong> parameter. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.</span>
     * @param string|null $limit The maximum number of order tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves order tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used.</p><p><b>Default:</b> 10 <p><b>Maximum:</b> 500</p>
     * @param string|null $look_back_days The number of previous days in which to search for tasks. Do not use with the <strong>date_range</strong> parameter. If both <strong>date_range</strong> and <strong>look_back_days</strong> are omitted, this parameter's default value is used.  <br /><br /><b>Default: </b> 7 <br /><br /><b>Range: </b> 1-90 (inclusive)  
     * @param string|null $offset The number of order tasks to skip in the result set before returning the first order in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.<br /><br /><b>Default: </b>0
     * @param string|null $schedule_id The schedule ID associated with the order tasks being retrieved. A schedule periodically generates a report, and these schedules can be created with the <a href="/api-docs/sell/feed/resources/schedule/methods/createSchedule">createSchedule</a> method.<br><br><span class="tablenote"><b>Note:</b> Do not use with the <strong>feed_type</strong> parameter. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.</span><br>Use the <a href="/api-docs/sell/feed/resources/schedule/methods/getSchedules">getSchedules</a> method to retrieve schedule IDs.
     * @return Order_taskRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $date_range = null, ?string $feed_type = null, ?string $limit = null, ?string $look_back_days = null, ?string $offset = null, ?string $schedule_id = null): Order_taskRequestBuilderGetQueryParameters {
        return new Order_taskRequestBuilderGetQueryParameters($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id);
    }

}
