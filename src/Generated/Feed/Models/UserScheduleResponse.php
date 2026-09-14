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
 * The type that defines the fields for a paginated result set of available schedules. The response consists of 0 or more sequenced <em> pages</em> where each page has 0 or more items.
*/
class UserScheduleResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $creationDate The creation date of the schedule in hours based on the 24&#8209;hour Coordinated Universal Time (UTC) clock.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $feedType The <strong>feedType</strong> associated with the schedule.
    */
    private ?string $feedType = null;
    
    /**
     * @var string|null $lastModifiedDate The date the schedule was last modified.
    */
    private ?string $lastModifiedDate = null;
    
    /**
     * @var int|null $preferredTriggerDayOfMonth The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the number of days in the month.
    */
    private ?int $preferredTriggerDayOfMonth = null;
    
    /**
     * @var DayOfWeekEnum|null $preferredTriggerDayOfWeek The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules.
    */
    private ?DayOfWeekEnum $preferredTriggerDayOfWeek = null;
    
    /**
     * @var string|null $preferredTriggerHour The preferred two-digit hour of the day to trigger the schedule. <br /><br /><strong>Format:</strong> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC: <code>11Z</code>
    */
    private ?string $preferredTriggerHour = null;
    
    /**
     * @var string|null $scheduleEndDate The timestamp on which the report generation (subscription) ends. After this date, the schedule status becomes <code>INACTIVE</code>.
    */
    private ?string $scheduleEndDate = null;
    
    /**
     * @var string|null $scheduleId The ID of the schedule. This ID is generated when the schedule was created by the <strong>createSchedule</strong> method.
    */
    private ?string $scheduleId = null;
    
    /**
     * @var string|null $scheduleName The schedule name assigned by the user for the created schedule. Users assign this name for their reference.
    */
    private ?string $scheduleName = null;
    
    /**
     * @var string|null $scheduleStartDate The timestamp that indicates the start of the report generation.
    */
    private ?string $scheduleStartDate = null;
    
    /**
     * @var string|null $scheduleTemplateId The ID of the template used to create this schedule.
    */
    private ?string $scheduleTemplateId = null;
    
    /**
     * @var string|null $schemaVersion The schema version of the <strong>feedType</strong> for the schedule.
    */
    private ?string $schemaVersion = null;
    
    /**
     * @var StatusEnum|null $status The enumeration value that indicates the state of the schedule.
    */
    private ?StatusEnum $status = null;
    
    /**
     * @var StatusReasonEnum|null $statusReason The reason the schedule is inactive.
    */
    private ?StatusReasonEnum $statusReason = null;
    
    /**
     * Instantiates a new UserScheduleResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserScheduleResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserScheduleResponse {
        return new UserScheduleResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the creationDate property value. The creation date of the schedule in hours based on the 24&#8209;hour Coordinated Universal Time (UTC) clock.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the feedType property value. The <strong>feedType</strong> associated with the schedule.
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
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'feedType' => fn(ParseNode $n) => $o->setFeedType($n->getStringValue()),
            'lastModifiedDate' => fn(ParseNode $n) => $o->setLastModifiedDate($n->getStringValue()),
            'preferredTriggerDayOfMonth' => fn(ParseNode $n) => $o->setPreferredTriggerDayOfMonth($n->getIntegerValue()),
            'preferredTriggerDayOfWeek' => fn(ParseNode $n) => $o->setPreferredTriggerDayOfWeek($n->getEnumValue(DayOfWeekEnum::class)),
            'preferredTriggerHour' => fn(ParseNode $n) => $o->setPreferredTriggerHour($n->getStringValue()),
            'scheduleEndDate' => fn(ParseNode $n) => $o->setScheduleEndDate($n->getStringValue()),
            'scheduleId' => fn(ParseNode $n) => $o->setScheduleId($n->getStringValue()),
            'scheduleName' => fn(ParseNode $n) => $o->setScheduleName($n->getStringValue()),
            'scheduleStartDate' => fn(ParseNode $n) => $o->setScheduleStartDate($n->getStringValue()),
            'scheduleTemplateId' => fn(ParseNode $n) => $o->setScheduleTemplateId($n->getStringValue()),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(StatusEnum::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getEnumValue(StatusReasonEnum::class)),
        ];
    }

    /**
     * Gets the lastModifiedDate property value. The date the schedule was last modified.
     * @return string|null
    */
    public function getLastModifiedDate(): ?string {
        return $this->lastModifiedDate;
    }

    /**
     * Gets the preferredTriggerDayOfMonth property value. The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the number of days in the month.
     * @return int|null
    */
    public function getPreferredTriggerDayOfMonth(): ?int {
        return $this->preferredTriggerDayOfMonth;
    }

    /**
     * Gets the preferredTriggerDayOfWeek property value. The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules.
     * @return DayOfWeekEnum|null
    */
    public function getPreferredTriggerDayOfWeek(): ?DayOfWeekEnum {
        return $this->preferredTriggerDayOfWeek;
    }

    /**
     * Gets the preferredTriggerHour property value. The preferred two-digit hour of the day to trigger the schedule. <br /><br /><strong>Format:</strong> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC: <code>11Z</code>
     * @return string|null
    */
    public function getPreferredTriggerHour(): ?string {
        return $this->preferredTriggerHour;
    }

    /**
     * Gets the scheduleEndDate property value. The timestamp on which the report generation (subscription) ends. After this date, the schedule status becomes <code>INACTIVE</code>.
     * @return string|null
    */
    public function getScheduleEndDate(): ?string {
        return $this->scheduleEndDate;
    }

    /**
     * Gets the scheduleId property value. The ID of the schedule. This ID is generated when the schedule was created by the <strong>createSchedule</strong> method.
     * @return string|null
    */
    public function getScheduleId(): ?string {
        return $this->scheduleId;
    }

    /**
     * Gets the scheduleName property value. The schedule name assigned by the user for the created schedule. Users assign this name for their reference.
     * @return string|null
    */
    public function getScheduleName(): ?string {
        return $this->scheduleName;
    }

    /**
     * Gets the scheduleStartDate property value. The timestamp that indicates the start of the report generation.
     * @return string|null
    */
    public function getScheduleStartDate(): ?string {
        return $this->scheduleStartDate;
    }

    /**
     * Gets the scheduleTemplateId property value. The ID of the template used to create this schedule.
     * @return string|null
    */
    public function getScheduleTemplateId(): ?string {
        return $this->scheduleTemplateId;
    }

    /**
     * Gets the schemaVersion property value. The schema version of the <strong>feedType</strong> for the schedule.
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Gets the status property value. The enumeration value that indicates the state of the schedule.
     * @return StatusEnum|null
    */
    public function getStatus(): ?StatusEnum {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. The reason the schedule is inactive.
     * @return StatusReasonEnum|null
    */
    public function getStatusReason(): ?StatusReasonEnum {
        return $this->statusReason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('feedType', $this->getFeedType());
        $writer->writeStringValue('lastModifiedDate', $this->getLastModifiedDate());
        $writer->writeIntegerValue('preferredTriggerDayOfMonth', $this->getPreferredTriggerDayOfMonth());
        $writer->writeEnumValue('preferredTriggerDayOfWeek', $this->getPreferredTriggerDayOfWeek());
        $writer->writeStringValue('preferredTriggerHour', $this->getPreferredTriggerHour());
        $writer->writeStringValue('scheduleEndDate', $this->getScheduleEndDate());
        $writer->writeStringValue('scheduleId', $this->getScheduleId());
        $writer->writeStringValue('scheduleName', $this->getScheduleName());
        $writer->writeStringValue('scheduleStartDate', $this->getScheduleStartDate());
        $writer->writeStringValue('scheduleTemplateId', $this->getScheduleTemplateId());
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('statusReason', $this->getStatusReason());
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
     * Sets the creationDate property value. The creation date of the schedule in hours based on the 24&#8209;hour Coordinated Universal Time (UTC) clock.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the feedType property value. The <strong>feedType</strong> associated with the schedule.
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the lastModifiedDate property value. The date the schedule was last modified.
     * @param string|null $value Value to set for the lastModifiedDate property.
    */
    public function setLastModifiedDate(?string $value): void {
        $this->lastModifiedDate = $value;
    }

    /**
     * Sets the preferredTriggerDayOfMonth property value. The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the number of days in the month.
     * @param int|null $value Value to set for the preferredTriggerDayOfMonth property.
    */
    public function setPreferredTriggerDayOfMonth(?int $value): void {
        $this->preferredTriggerDayOfMonth = $value;
    }

    /**
     * Sets the preferredTriggerDayOfWeek property value. The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules.
     * @param DayOfWeekEnum|null $value Value to set for the preferredTriggerDayOfWeek property.
    */
    public function setPreferredTriggerDayOfWeek(?DayOfWeekEnum $value): void {
        $this->preferredTriggerDayOfWeek = $value;
    }

    /**
     * Sets the preferredTriggerHour property value. The preferred two-digit hour of the day to trigger the schedule. <br /><br /><strong>Format:</strong> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC: <code>11Z</code>
     * @param string|null $value Value to set for the preferredTriggerHour property.
    */
    public function setPreferredTriggerHour(?string $value): void {
        $this->preferredTriggerHour = $value;
    }

    /**
     * Sets the scheduleEndDate property value. The timestamp on which the report generation (subscription) ends. After this date, the schedule status becomes <code>INACTIVE</code>.
     * @param string|null $value Value to set for the scheduleEndDate property.
    */
    public function setScheduleEndDate(?string $value): void {
        $this->scheduleEndDate = $value;
    }

    /**
     * Sets the scheduleId property value. The ID of the schedule. This ID is generated when the schedule was created by the <strong>createSchedule</strong> method.
     * @param string|null $value Value to set for the scheduleId property.
    */
    public function setScheduleId(?string $value): void {
        $this->scheduleId = $value;
    }

    /**
     * Sets the scheduleName property value. The schedule name assigned by the user for the created schedule. Users assign this name for their reference.
     * @param string|null $value Value to set for the scheduleName property.
    */
    public function setScheduleName(?string $value): void {
        $this->scheduleName = $value;
    }

    /**
     * Sets the scheduleStartDate property value. The timestamp that indicates the start of the report generation.
     * @param string|null $value Value to set for the scheduleStartDate property.
    */
    public function setScheduleStartDate(?string $value): void {
        $this->scheduleStartDate = $value;
    }

    /**
     * Sets the scheduleTemplateId property value. The ID of the template used to create this schedule.
     * @param string|null $value Value to set for the scheduleTemplateId property.
    */
    public function setScheduleTemplateId(?string $value): void {
        $this->scheduleTemplateId = $value;
    }

    /**
     * Sets the schemaVersion property value. The schema version of the <strong>feedType</strong> for the schedule.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

    /**
     * Sets the status property value. The enumeration value that indicates the state of the schedule.
     * @param StatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?StatusEnum $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. The reason the schedule is inactive.
     * @param StatusReasonEnum|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?StatusReasonEnum $value): void {
        $this->statusReason = $value;
    }

}
