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

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-createschedule" target="_blank">createSchedule</a> method.
*/
class CreateUserScheduleRequest extends UpdateUserScheduleRequest implements Parsable 
{
    /**
     * @var string|null $feedType The name of the feed type for the created schedule.<br><br> Use the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates" target="_blank">getScheduleTemplates</a> method to retrieve the feed type of a schedule template.<br><br><span class="tablenote"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
    */
    private ?string $feedType = null;
    
    /**
     * @var string|null $scheduleTemplateId The unique identifier of the template to be used for this schedule. <br><br>Use the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates" target="_blank">getScheduleTemplates</a> method to retrieve the schedule template ID. This method requires a schedule template ID that is <code>ACTIVE</code>.<br><br><span class="tablenote"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
    */
    private ?string $scheduleTemplateId = null;
    
    /**
     * Instantiates a new CreateUserScheduleRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateUserScheduleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateUserScheduleRequest {
        return new CreateUserScheduleRequest();
    }

    /**
     * Gets the feedType property value. The name of the feed type for the created schedule.<br><br> Use the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates" target="_blank">getScheduleTemplates</a> method to retrieve the feed type of a schedule template.<br><br><span class="tablenote"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
     * @return string|null
    */
    public function getFeedType(): ?string {
        return $this->feedType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'feedType' => fn(ParseNode $n) => $o->setFeedType($n->getStringValue()),
            'scheduleTemplateId' => fn(ParseNode $n) => $o->setScheduleTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the scheduleTemplateId property value. The unique identifier of the template to be used for this schedule. <br><br>Use the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates" target="_blank">getScheduleTemplates</a> method to retrieve the schedule template ID. This method requires a schedule template ID that is <code>ACTIVE</code>.<br><br><span class="tablenote"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
     * @return string|null
    */
    public function getScheduleTemplateId(): ?string {
        return $this->scheduleTemplateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('feedType', $this->getFeedType());
        $writer->writeStringValue('scheduleTemplateId', $this->getScheduleTemplateId());
    }

    /**
     * Sets the feedType property value. The name of the feed type for the created schedule.<br><br> Use the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates" target="_blank">getScheduleTemplates</a> method to retrieve the feed type of a schedule template.<br><br><span class="tablenote"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the scheduleTemplateId property value. The unique identifier of the template to be used for this schedule. <br><br>Use the <a href="/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates" target="_blank">getScheduleTemplates</a> method to retrieve the schedule template ID. This method requires a schedule template ID that is <code>ACTIVE</code>.<br><br><span class="tablenote"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
     * @param string|null $value Value to set for the scheduleTemplateId property.
    */
    public function setScheduleTemplateId(?string $value): void {
        $this->scheduleTemplateId = $value;
    }

}
