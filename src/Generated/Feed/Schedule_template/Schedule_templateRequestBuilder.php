<?php

namespace EBay\ListingManagement\Generated\Feed\Schedule_template;

use EBay\ListingManagement\Generated\Feed\Models\ScheduleTemplateCollection;
use EBay\ListingManagement\Generated\Feed\Schedule_template\Item\WithSchedule_template_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /schedule_template
*/
class Schedule_templateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Feed.schedule_template.item collection
     * @param string $schedule_template_id This path parameter is the unique identifier of the schedule template being retrieved.<br><br>Use the <a href="/api-docs/sell/feed/resources/schedule/methods/getScheduleTemplates" target="_blank ">getScheduleTemplates</a> method to retrieve schedule template IDs.<br><br><span class="tablenote"><b>Note:</b> Template schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
     * @return WithSchedule_template_ItemRequestBuilder
    */
    public function bySchedule_template_id(string $schedule_template_id): WithSchedule_template_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schedule_template_id'] = $schedule_template_id;
        return new WithSchedule_template_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Schedule_templateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/schedule_template?feed_type={feed_type}{&limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves an array containing the details and status of all schedule templates based on the specified <strong>feed_type</strong>. Use this method to find a schedule template if you do not know the <strong>schedule_template_id</strong>.
     * @param Schedule_templateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScheduleTemplateCollection|null>
     * @throws Exception
    */
    public function get(?Schedule_templateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ScheduleTemplateCollection::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves an array containing the details and status of all schedule templates based on the specified <strong>feed_type</strong>. Use this method to find a schedule template if you do not know the <strong>schedule_template_id</strong>.
     * @param Schedule_templateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Schedule_templateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Schedule_templateRequestBuilder
    */
    public function withUrl(string $rawUrl): Schedule_templateRequestBuilder {
        return new Schedule_templateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
