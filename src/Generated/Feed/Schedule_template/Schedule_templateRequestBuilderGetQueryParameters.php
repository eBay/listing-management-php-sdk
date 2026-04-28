<?php

namespace EBay\ListingManagement\Generated\Feed\Schedule_template;

/**
 * This method retrieves an array containing the details and status of all schedule templates based on the specified <strong>feed_type</strong>. Use this method to find a schedule template if you do not know the <strong>schedule_template_id</strong>.
*/
class Schedule_templateRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("feed_type")
     * @var string|null $feedType The feed type of the schedule templates to retrieve. <br><br><span class="tablenote"><b>Note:</b> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
    */
    public ?string $feedType = null;
    
    /**
     * @var string|null $limit The maximum number of schedule templates that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves schedule templates 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used. <br /><br /><b>Default: </b> 10 <br /><br /><b>Maximum: </b>500
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of schedule templates to skip in the result set before returning the first template in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.<br /><br /><b>Default: </b>0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Schedule_templateRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $feed_type The feed type of the schedule templates to retrieve. <br><br><span class="tablenote"><b>Note:</b> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
     * @param string|null $limit The maximum number of schedule templates that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves schedule templates 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used. <br /><br /><b>Default: </b> 10 <br /><br /><b>Maximum: </b>500
     * @param string|null $offset The number of schedule templates to skip in the result set before returning the first template in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.<br /><br /><b>Default: </b>0
    */
    public function __construct(?string $feed_type = null, ?string $limit = null, ?string $offset = null) {
        $this->feedType = $feed_type;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
