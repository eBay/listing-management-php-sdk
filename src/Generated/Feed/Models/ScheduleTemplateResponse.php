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

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for a paginated result set of available schedule templates. The response consists of 0 or more sequenced <em> pages</em> where each page has 0 or more items.
*/
class ScheduleTemplateResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $feedType The feed type of the schedule template. <p> <span class="tablenote"><strong>Note:</strong> When calling <strong>createSchedule</strong> and <strong>updateSchedule</strong> methods, you must match the feed type specified by the schedule template (this <strong>feedType</strong>).</span></p>
    */
    private ?string $feedType = null;
    
    /**
     * @var FrequencyEnum|null $frequency This field specifies how often the schedule is generated. If set to <code>HALF_HOUR</code> or <code>ONE_HOUR</code>, you cannot set a <strong>preferredTriggerHour</strong> using <strong>createSchedule</strong> or <strong>updateSchedule</strong>.
    */
    private ?FrequencyEnum $frequency = null;
    
    /**
     * @var string|null $name The template name provided by the template.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $scheduleTemplateId The ID of the template. Use this ID to create a schedule based on the properties of this schedule template.
    */
    private ?string $scheduleTemplateId = null;
    
    /**
     * @var StatusEnum|null $status The present status of the template. You cannot create or modify a schedule using a template with an <code>INACTIVE</code> status. 
    */
    private ?StatusEnum $status = null;
    
    /**
     * @var array<SupportedConfiguration>|null $supportedConfigurations An array of the configuration supported by this template.
    */
    private ?array $supportedConfigurations = null;
    
    /**
     * Instantiates a new ScheduleTemplateResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleTemplateResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleTemplateResponse {
        return new ScheduleTemplateResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedType property value. The feed type of the schedule template. <p> <span class="tablenote"><strong>Note:</strong> When calling <strong>createSchedule</strong> and <strong>updateSchedule</strong> methods, you must match the feed type specified by the schedule template (this <strong>feedType</strong>).</span></p>
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
        return  [
            'feedType' => fn(ParseNode $n) => $o->setFeedType($n->getStringValue()),
            'frequency' => fn(ParseNode $n) => $o->setFrequency($n->getEnumValue(FrequencyEnum::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'scheduleTemplateId' => fn(ParseNode $n) => $o->setScheduleTemplateId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(StatusEnum::class)),
            'supportedConfigurations' => fn(ParseNode $n) => $o->setSupportedConfigurations($n->getCollectionOfObjectValues([SupportedConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the frequency property value. This field specifies how often the schedule is generated. If set to <code>HALF_HOUR</code> or <code>ONE_HOUR</code>, you cannot set a <strong>preferredTriggerHour</strong> using <strong>createSchedule</strong> or <strong>updateSchedule</strong>.
     * @return FrequencyEnum|null
    */
    public function getFrequency(): ?FrequencyEnum {
        return $this->frequency;
    }

    /**
     * Gets the name property value. The template name provided by the template.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the scheduleTemplateId property value. The ID of the template. Use this ID to create a schedule based on the properties of this schedule template.
     * @return string|null
    */
    public function getScheduleTemplateId(): ?string {
        return $this->scheduleTemplateId;
    }

    /**
     * Gets the status property value. The present status of the template. You cannot create or modify a schedule using a template with an <code>INACTIVE</code> status. 
     * @return StatusEnum|null
    */
    public function getStatus(): ?StatusEnum {
        return $this->status;
    }

    /**
     * Gets the supportedConfigurations property value. An array of the configuration supported by this template.
     * @return array<SupportedConfiguration>|null
    */
    public function getSupportedConfigurations(): ?array {
        return $this->supportedConfigurations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('feedType', $this->getFeedType());
        $writer->writeEnumValue('frequency', $this->getFrequency());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('scheduleTemplateId', $this->getScheduleTemplateId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('supportedConfigurations', $this->getSupportedConfigurations());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the feedType property value. The feed type of the schedule template. <p> <span class="tablenote"><strong>Note:</strong> When calling <strong>createSchedule</strong> and <strong>updateSchedule</strong> methods, you must match the feed type specified by the schedule template (this <strong>feedType</strong>).</span></p>
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the frequency property value. This field specifies how often the schedule is generated. If set to <code>HALF_HOUR</code> or <code>ONE_HOUR</code>, you cannot set a <strong>preferredTriggerHour</strong> using <strong>createSchedule</strong> or <strong>updateSchedule</strong>.
     * @param FrequencyEnum|null $value Value to set for the frequency property.
    */
    public function setFrequency(?FrequencyEnum $value): void {
        $this->frequency = $value;
    }

    /**
     * Sets the name property value. The template name provided by the template.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the scheduleTemplateId property value. The ID of the template. Use this ID to create a schedule based on the properties of this schedule template.
     * @param string|null $value Value to set for the scheduleTemplateId property.
    */
    public function setScheduleTemplateId(?string $value): void {
        $this->scheduleTemplateId = $value;
    }

    /**
     * Sets the status property value. The present status of the template. You cannot create or modify a schedule using a template with an <code>INACTIVE</code> status. 
     * @param StatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?StatusEnum $value): void {
        $this->status = $value;
    }

    /**
     * Sets the supportedConfigurations property value. An array of the configuration supported by this template.
     * @param array<SupportedConfiguration>|null $value Value to set for the supportedConfigurations property.
    */
    public function setSupportedConfigurations(?array $value): void {
        $this->supportedConfigurations = $value;
    }

}
