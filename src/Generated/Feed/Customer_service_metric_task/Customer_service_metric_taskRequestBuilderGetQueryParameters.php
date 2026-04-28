<?php

namespace EBay\ListingManagement\Generated\Feed\Customer_service_metric_task;

/**
 * Use this method to return an array of customer service metric tasks. You can limit the tasks returned by specifying a date range. </p> <p> <span class="tablenote"><strong>Note:</strong> You can pass in either the <code>look_back_days </code>or<code> date_range</code>, but not both.</span></p>
*/
class Customer_service_metric_taskRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("date_range")
     * @var string|null $dateRange The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the <code>look_back_days</code> parameter.<p><strong>Format: </strong>UTC</p><p>For example, tasks within a range: </p><p><code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code></p><p>Tasks created on March 8, 2020</p><p><code>2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z</code></p><p><b>Maximum: </b>90 days</p>
    */
    public ?string $dateRange = null;
    
    /**
     * @QueryParameter("feed_type")
     * @var string|null $feedType The feed type associated with the tasks being retrieved. The only presently supported value is <code>CUSTOMER_SERVICE_METRICS_REPORT</code>.
    */
    public ?string $feedType = null;
    
    /**
     * @var string|null $limit The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. <p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used.</p><p> <span class="tablenote"><strong>Note:</strong>This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p><b>Default:</b> 10 <p><b>Maximum:</b> 500</p>
    */
    public ?string $limit = null;
    
    /**
     * @QueryParameter("look_back_days")
     * @var string|null $lookBackDays The number of previous days in which to search for tasks. Do not use with the <code>date_range</code> parameter. If both <code>date_range</code> and <code>look_back_days</code> are omitted, this parameter's default value is used. <p><b>Default value:</b> 7</p><p><b>Range:</b> 1-90 (inclusive)</p>
    */
    public ?string $lookBackDays = null;
    
    /**
     * @var string|null $offset The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. <br /><br /><b>Default: </b>0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Customer_service_metric_taskRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $date_range The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the <code>look_back_days</code> parameter.<p><strong>Format: </strong>UTC</p><p>For example, tasks within a range: </p><p><code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code></p><p>Tasks created on March 8, 2020</p><p><code>2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z</code></p><p><b>Maximum: </b>90 days</p>
     * @param string|null $feed_type The feed type associated with the tasks being retrieved. The only presently supported value is <code>CUSTOMER_SERVICE_METRICS_REPORT</code>.
     * @param string|null $limit The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. <p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used.</p><p> <span class="tablenote"><strong>Note:</strong>This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p><b>Default:</b> 10 <p><b>Maximum:</b> 500</p>
     * @param string|null $look_back_days The number of previous days in which to search for tasks. Do not use with the <code>date_range</code> parameter. If both <code>date_range</code> and <code>look_back_days</code> are omitted, this parameter's default value is used. <p><b>Default value:</b> 7</p><p><b>Range:</b> 1-90 (inclusive)</p>
     * @param string|null $offset The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. <br /><br /><b>Default: </b>0
    */
    public function __construct(?string $date_range = null, ?string $feed_type = null, ?string $limit = null, ?string $look_back_days = null, ?string $offset = null) {
        $this->dateRange = $date_range;
        $this->feedType = $feed_type;
        $this->limit = $limit;
        $this->lookBackDays = $look_back_days;
        $this->offset = $offset;
    }

}
