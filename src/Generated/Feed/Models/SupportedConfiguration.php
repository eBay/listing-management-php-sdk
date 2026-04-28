<?php

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An array that defines the configuration supported by this template. This includes specified properties and usage (whether the property is REQUIRED or OPTIONAL), and an optional default value.
*/
class SupportedConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $defaultValue The default value for the property. If a value is omitted from the schedule and a default value is supplied, the default value is used.
    */
    private ?string $defaultValue = null;
    
    /**
     * @var string|null $property Properties supported by the template. Properties can include the following: <ul><li><b>scheduleStartDate:</b> The timestamp that the report generation (subscription) begins. After this timestamp, the schedule status becomes active until either the scheduleEndDate occurs or the scheduleTemplate becomes inactive. Format: UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>scheduleEndDate:</b> The timestamp that the report generation (subscription) ends. After this date, the schedule status becomes INACTIVE. Format: UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>schemaVersion:</b> The schema version of the schedule templates feedType. This field is required if the feedType has a schema version.</li><li><b>preferredTriggerDayOfMonth:</b> The preferred day of the month to trigger the schedule. </li><li><b>preferredTriggerDayOfWeek:</b> The preferred day of the week to trigger the schedule. </li><li><b>preferredTriggerHour:</b> The preferred two-digit hour of the day to trigger the schedule. Format: UTC <code>hhZ</code></li><ul>
    */
    private ?string $property = null;
    
    /**
     * @var string|null $usage Whether the specified property is REQUIRED or OPTIONAL. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:ConfigurationsUsageEnum'>eBay API documentation</a>
    */
    private ?string $usage = null;
    
    /**
     * Instantiates a new SupportedConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SupportedConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SupportedConfiguration {
        return new SupportedConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. The default value for the property. If a value is omitted from the schedule and a default value is supplied, the default value is used.
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'property' => fn(ParseNode $n) => $o->setProperty($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the property property value. Properties supported by the template. Properties can include the following: <ul><li><b>scheduleStartDate:</b> The timestamp that the report generation (subscription) begins. After this timestamp, the schedule status becomes active until either the scheduleEndDate occurs or the scheduleTemplate becomes inactive. Format: UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>scheduleEndDate:</b> The timestamp that the report generation (subscription) ends. After this date, the schedule status becomes INACTIVE. Format: UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>schemaVersion:</b> The schema version of the schedule templates feedType. This field is required if the feedType has a schema version.</li><li><b>preferredTriggerDayOfMonth:</b> The preferred day of the month to trigger the schedule. </li><li><b>preferredTriggerDayOfWeek:</b> The preferred day of the week to trigger the schedule. </li><li><b>preferredTriggerHour:</b> The preferred two-digit hour of the day to trigger the schedule. Format: UTC <code>hhZ</code></li><ul>
     * @return string|null
    */
    public function getProperty(): ?string {
        return $this->property;
    }

    /**
     * Gets the usage property value. Whether the specified property is REQUIRED or OPTIONAL. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:ConfigurationsUsageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUsage(): ?string {
        return $this->usage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeStringValue('property', $this->getProperty());
        $writer->writeStringValue('usage', $this->getUsage());
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
     * Sets the defaultValue property value. The default value for the property. If a value is omitted from the schedule and a default value is supplied, the default value is used.
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the property property value. Properties supported by the template. Properties can include the following: <ul><li><b>scheduleStartDate:</b> The timestamp that the report generation (subscription) begins. After this timestamp, the schedule status becomes active until either the scheduleEndDate occurs or the scheduleTemplate becomes inactive. Format: UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>scheduleEndDate:</b> The timestamp that the report generation (subscription) ends. After this date, the schedule status becomes INACTIVE. Format: UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>schemaVersion:</b> The schema version of the schedule templates feedType. This field is required if the feedType has a schema version.</li><li><b>preferredTriggerDayOfMonth:</b> The preferred day of the month to trigger the schedule. </li><li><b>preferredTriggerDayOfWeek:</b> The preferred day of the week to trigger the schedule. </li><li><b>preferredTriggerHour:</b> The preferred two-digit hour of the day to trigger the schedule. Format: UTC <code>hhZ</code></li><ul>
     * @param string|null $value Value to set for the property property.
    */
    public function setProperty(?string $value): void {
        $this->property = $value;
    }

    /**
     * Sets the usage property value. Whether the specified property is REQUIRED or OPTIONAL. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:ConfigurationsUsageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->usage = $value;
    }

}
