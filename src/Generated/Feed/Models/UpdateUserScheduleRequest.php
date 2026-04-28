<?php

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for a schedule update to a schedule generated with the Feed API.
*/
class UpdateUserScheduleRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $preferredTriggerDayOfMonth The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the actual number of days in the month. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Minimum: </b>1<b><br /><br /><b>Maximum: </b>31
    */
    private ?int $preferredTriggerDayOfMonth = null;
    
    /**
     * @var string|null $preferredTriggerDayOfWeek The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum'>eBay API documentation</a>
    */
    private ?string $preferredTriggerDayOfWeek = null;
    
    /**
     * @var string|null $preferredTriggerHour The preferred two-digit hour of the day to trigger the schedule. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Format:</b> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC:<code> 11Z</code><br /><br /><b>Minimum: </b><code>00Z</code><br /><br /><b>Maximum:</b> <code>23Z</code>
    */
    private ?string $preferredTriggerHour = null;
    
    /**
     * @var string|null $scheduleEndDate The timestamp on which the schedule (report generation) ends. After this date, the schedule status becomes <code>INACTIVE</code>. <br /><br />Use this field, if available, to end the schedule in the future. This value must be later than <strong>scheduleStartDate</strong> (if supplied). This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents UTC October 10, 2021 at 10:00 AM:<br /><code> 2021-10-10T10Z</code>
    */
    private ?string $scheduleEndDate = null;
    
    /**
     * @var string|null $scheduleName The schedule name assigned by the user for the created schedule.
    */
    private ?string $scheduleName = null;
    
    /**
     * @var string|null $scheduleStartDate The timestamp to start generating the report. After this timestamp, the schedule status becomes active until either the <strong>scheduleEndDate</strong> occurs or the <strong>scheduleTemplateId</strong> becomes inactive. <br /><br />Use this field, if available, to start the schedule in the future but before the <strong>scheduleEndDate</strong> (if supplied). This field is available as specified by the template <strong>(scheduleTemplateId)</strong>.  The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents a schedule start date of UTC October 01, 2020 at 12:00 PM:<br /><code> 2020-01-01T12Z</code>
    */
    private ?string $scheduleStartDate = null;
    
    /**
     * @var string|null $schemaVersion The schema version of a schedule.
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new UpdateUserScheduleRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateUserScheduleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateUserScheduleRequest {
        return new UpdateUserScheduleRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'preferredTriggerDayOfMonth' => fn(ParseNode $n) => $o->setPreferredTriggerDayOfMonth($n->getIntegerValue()),
            'preferredTriggerDayOfWeek' => fn(ParseNode $n) => $o->setPreferredTriggerDayOfWeek($n->getStringValue()),
            'preferredTriggerHour' => fn(ParseNode $n) => $o->setPreferredTriggerHour($n->getStringValue()),
            'scheduleEndDate' => fn(ParseNode $n) => $o->setScheduleEndDate($n->getStringValue()),
            'scheduleName' => fn(ParseNode $n) => $o->setScheduleName($n->getStringValue()),
            'scheduleStartDate' => fn(ParseNode $n) => $o->setScheduleStartDate($n->getStringValue()),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the preferredTriggerDayOfMonth property value. The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the actual number of days in the month. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Minimum: </b>1<b><br /><br /><b>Maximum: </b>31
     * @return int|null
    */
    public function getPreferredTriggerDayOfMonth(): ?int {
        return $this->preferredTriggerDayOfMonth;
    }

    /**
     * Gets the preferredTriggerDayOfWeek property value. The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPreferredTriggerDayOfWeek(): ?string {
        return $this->preferredTriggerDayOfWeek;
    }

    /**
     * Gets the preferredTriggerHour property value. The preferred two-digit hour of the day to trigger the schedule. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Format:</b> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC:<code> 11Z</code><br /><br /><b>Minimum: </b><code>00Z</code><br /><br /><b>Maximum:</b> <code>23Z</code>
     * @return string|null
    */
    public function getPreferredTriggerHour(): ?string {
        return $this->preferredTriggerHour;
    }

    /**
     * Gets the scheduleEndDate property value. The timestamp on which the schedule (report generation) ends. After this date, the schedule status becomes <code>INACTIVE</code>. <br /><br />Use this field, if available, to end the schedule in the future. This value must be later than <strong>scheduleStartDate</strong> (if supplied). This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents UTC October 10, 2021 at 10:00 AM:<br /><code> 2021-10-10T10Z</code>
     * @return string|null
    */
    public function getScheduleEndDate(): ?string {
        return $this->scheduleEndDate;
    }

    /**
     * Gets the scheduleName property value. The schedule name assigned by the user for the created schedule.
     * @return string|null
    */
    public function getScheduleName(): ?string {
        return $this->scheduleName;
    }

    /**
     * Gets the scheduleStartDate property value. The timestamp to start generating the report. After this timestamp, the schedule status becomes active until either the <strong>scheduleEndDate</strong> occurs or the <strong>scheduleTemplateId</strong> becomes inactive. <br /><br />Use this field, if available, to start the schedule in the future but before the <strong>scheduleEndDate</strong> (if supplied). This field is available as specified by the template <strong>(scheduleTemplateId)</strong>.  The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents a schedule start date of UTC October 01, 2020 at 12:00 PM:<br /><code> 2020-01-01T12Z</code>
     * @return string|null
    */
    public function getScheduleStartDate(): ?string {
        return $this->scheduleStartDate;
    }

    /**
     * Gets the schemaVersion property value. The schema version of a schedule.
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('preferredTriggerDayOfMonth', $this->getPreferredTriggerDayOfMonth());
        $writer->writeStringValue('preferredTriggerDayOfWeek', $this->getPreferredTriggerDayOfWeek());
        $writer->writeStringValue('preferredTriggerHour', $this->getPreferredTriggerHour());
        $writer->writeStringValue('scheduleEndDate', $this->getScheduleEndDate());
        $writer->writeStringValue('scheduleName', $this->getScheduleName());
        $writer->writeStringValue('scheduleStartDate', $this->getScheduleStartDate());
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
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
     * Sets the preferredTriggerDayOfMonth property value. The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the actual number of days in the month. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Minimum: </b>1<b><br /><br /><b>Maximum: </b>31
     * @param int|null $value Value to set for the preferredTriggerDayOfMonth property.
    */
    public function setPreferredTriggerDayOfMonth(?int $value): void {
        $this->preferredTriggerDayOfMonth = $value;
    }

    /**
     * Sets the preferredTriggerDayOfWeek property value. The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the preferredTriggerDayOfWeek property.
    */
    public function setPreferredTriggerDayOfWeek(?string $value): void {
        $this->preferredTriggerDayOfWeek = $value;
    }

    /**
     * Sets the preferredTriggerHour property value. The preferred two-digit hour of the day to trigger the schedule. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Format:</b> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC:<code> 11Z</code><br /><br /><b>Minimum: </b><code>00Z</code><br /><br /><b>Maximum:</b> <code>23Z</code>
     * @param string|null $value Value to set for the preferredTriggerHour property.
    */
    public function setPreferredTriggerHour(?string $value): void {
        $this->preferredTriggerHour = $value;
    }

    /**
     * Sets the scheduleEndDate property value. The timestamp on which the schedule (report generation) ends. After this date, the schedule status becomes <code>INACTIVE</code>. <br /><br />Use this field, if available, to end the schedule in the future. This value must be later than <strong>scheduleStartDate</strong> (if supplied). This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents UTC October 10, 2021 at 10:00 AM:<br /><code> 2021-10-10T10Z</code>
     * @param string|null $value Value to set for the scheduleEndDate property.
    */
    public function setScheduleEndDate(?string $value): void {
        $this->scheduleEndDate = $value;
    }

    /**
     * Sets the scheduleName property value. The schedule name assigned by the user for the created schedule.
     * @param string|null $value Value to set for the scheduleName property.
    */
    public function setScheduleName(?string $value): void {
        $this->scheduleName = $value;
    }

    /**
     * Sets the scheduleStartDate property value. The timestamp to start generating the report. After this timestamp, the schedule status becomes active until either the <strong>scheduleEndDate</strong> occurs or the <strong>scheduleTemplateId</strong> becomes inactive. <br /><br />Use this field, if available, to start the schedule in the future but before the <strong>scheduleEndDate</strong> (if supplied). This field is available as specified by the template <strong>(scheduleTemplateId)</strong>.  The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents a schedule start date of UTC October 01, 2020 at 12:00 PM:<br /><code> 2020-01-01T12Z</code>
     * @param string|null $value Value to set for the scheduleStartDate property.
    */
    public function setScheduleStartDate(?string $value): void {
        $this->scheduleStartDate = $value;
    }

    /**
     * Sets the schemaVersion property value. The schema version of a schedule.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
