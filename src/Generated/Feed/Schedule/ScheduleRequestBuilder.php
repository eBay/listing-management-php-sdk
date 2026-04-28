<?php

namespace EBay\ListingManagement\Generated\Feed\Schedule;

use EBay\ListingManagement\Generated\Feed\Models\CreateUserScheduleRequest;
use EBay\ListingManagement\Generated\Feed\Models\UserScheduleCollection;
use EBay\ListingManagement\Generated\Feed\Schedule\Item\WithSchedule_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /schedule
*/
class ScheduleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Feed.schedule.item collection
     * @param string $schedule_id This path parameter is the unique identifier of the schedule for which to retrieve details.<br><br> Use the <a href="/api-docs/sell/feed/resources/schedule/methods/getSchedules" target="_blank ">getSchedules</a> method to retrieve schedule IDs.
     * @return WithSchedule_ItemRequestBuilder
    */
    public function bySchedule_id(string $schedule_id): WithSchedule_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schedule_id'] = $schedule_id;
        return new WithSchedule_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ScheduleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/schedule?feed_type={feed_type}{&limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves an array containing the details and status of all schedules based on the specified <strong>feed_type</strong>. Use this method to find a schedule if you do not know the <strong>schedule_id</strong>.
     * @param ScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserScheduleCollection|null>
     * @throws Exception
    */
    public function get(?ScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UserScheduleCollection::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method creates a schedule, which is a subscription to the specified schedule template. A schedule periodically generates a report for the <strong>feedType</strong> specified by the template. Specify the same <strong>feedType</strong> as the <strong>feedType</strong> of the associated schedule template. When creating the schedule, if available from the template, you can specify a preferred trigger hour, day of the week, or day of the month. These and other fields are conditionally available as specified by the template.<p> <span class="tablenote"><strong>Note:</strong> Make sure to include all fields required by the schedule template (<strong>scheduleTemplateId</strong>). Call the <strong>getScheduleTemplate</strong> method (or the <strong>getScheduleTemplates</strong> method), to find out which fields are required or optional. If a field is optional and a default value is provided by the template, the default value will be used if omitted from the payload.</span></p>A successful call returns the location response header containing the <strong>getSchedule</strong> call URI to retrieve the schedule you just created. The URL includes the eBay-assigned schedule ID, which you can use to reference the schedule task. <br /><br />To retrieve the details of the create schedule task, use the <strong>getSchedule</strong> method for a single schedule ID or the <strong>getSchedules</strong> method to retrieve all schedule details for the specified <strong>feed_type</strong>. The number of schedules for each feedType is limited. Error code 160031 is returned when you have reached this maximum.<p> <span class="tablenote"><strong>Note:</strong> Except for schedules with a HALF-HOUR frequency, all schedules will ideally run at the start of each hour ('00' minutes). Actual start time may vary time may vary due to load and other factors.</span></p>
     * @param CreateUserScheduleRequest $body The type that defines the fields for the <strong>createSchedule</strong> method.
     * @param ScheduleRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchedulePostResponse|null>
     * @throws Exception
    */
    public function post(CreateUserScheduleRequest $body, ?ScheduleRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SchedulePostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves an array containing the details and status of all schedules based on the specified <strong>feed_type</strong>. Use this method to find a schedule if you do not know the <strong>schedule_id</strong>.
     * @param ScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method creates a schedule, which is a subscription to the specified schedule template. A schedule periodically generates a report for the <strong>feedType</strong> specified by the template. Specify the same <strong>feedType</strong> as the <strong>feedType</strong> of the associated schedule template. When creating the schedule, if available from the template, you can specify a preferred trigger hour, day of the week, or day of the month. These and other fields are conditionally available as specified by the template.<p> <span class="tablenote"><strong>Note:</strong> Make sure to include all fields required by the schedule template (<strong>scheduleTemplateId</strong>). Call the <strong>getScheduleTemplate</strong> method (or the <strong>getScheduleTemplates</strong> method), to find out which fields are required or optional. If a field is optional and a default value is provided by the template, the default value will be used if omitted from the payload.</span></p>A successful call returns the location response header containing the <strong>getSchedule</strong> call URI to retrieve the schedule you just created. The URL includes the eBay-assigned schedule ID, which you can use to reference the schedule task. <br /><br />To retrieve the details of the create schedule task, use the <strong>getSchedule</strong> method for a single schedule ID or the <strong>getSchedules</strong> method to retrieve all schedule details for the specified <strong>feed_type</strong>. The number of schedules for each feedType is limited. Error code 160031 is returned when you have reached this maximum.<p> <span class="tablenote"><strong>Note:</strong> Except for schedules with a HALF-HOUR frequency, all schedules will ideally run at the start of each hour ('00' minutes). Actual start time may vary time may vary due to load and other factors.</span></p>
     * @param CreateUserScheduleRequest $body The type that defines the fields for the <strong>createSchedule</strong> method.
     * @param ScheduleRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateUserScheduleRequest $body, ?ScheduleRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/schedule';
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
     * @return ScheduleRequestBuilder
    */
    public function withUrl(string $rawUrl): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
