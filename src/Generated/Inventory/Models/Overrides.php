<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the override dates for cut-off times. This allows sellers to set special hours for their inventory location and specify different cut-off times on these days.
*/
class Overrides implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cutOffTime This field is used to override the cut-off time(s) specified in the <b>weeklySchedule</b> container. If an order is placed after this time in the specified date or date range, it will be handled by the seller on the following day.<br><br><b>Format:</b> <code>00:00</code>
    */
    private ?string $cutOffTime = null;
    
    /**
     * @var string|null $endDate The end date of the cut-off time override in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> format, which is based on the 24-hour Coordinated Universal Time (UTC) clock.<br><br><span class="tablenote"><b>Note:</b> If the cut-off time override is only for a single day, input the same date in the <b>startDate</b> and <b>endDate</b> fields.</span><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]</code><br><br><b>Example:</b> <code>2024-08-06</code><br><br><span class="tablenote"><b>Note:</b> The time zone for this date is specified from the <b>timeZoneId</b> field. If this field is not used, the time zone will be derived from the provided address.</span>
    */
    private ?string $endDate = null;
    
    /**
     * @var string|null $startDate The start date of the cut-off time override in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> format, which is based on the 24-hour Coordinated Universal Time (UTC) clock.<br><br><span class="tablenote"><b>Note:</b> If the cut-off time override is only for a single day, input the same date in the <b>startDate</b> and <b>endDate</b> fields.</span><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]</code><br><br><b>Example:</b> <code>2024-08-04</code><br><br><span class="tablenote"><b>Note:</b> The time zone for this date is specified from the <b>timeZoneId</b> field. If this field is not used, the time zone will be derived from the provided address.</span>
    */
    private ?string $startDate = null;
    
    /**
     * Instantiates a new Overrides and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Overrides
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Overrides {
        return new Overrides();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cutOffTime property value. This field is used to override the cut-off time(s) specified in the <b>weeklySchedule</b> container. If an order is placed after this time in the specified date or date range, it will be handled by the seller on the following day.<br><br><b>Format:</b> <code>00:00</code>
     * @return string|null
    */
    public function getCutOffTime(): ?string {
        return $this->cutOffTime;
    }

    /**
     * Gets the endDate property value. The end date of the cut-off time override in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> format, which is based on the 24-hour Coordinated Universal Time (UTC) clock.<br><br><span class="tablenote"><b>Note:</b> If the cut-off time override is only for a single day, input the same date in the <b>startDate</b> and <b>endDate</b> fields.</span><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]</code><br><br><b>Example:</b> <code>2024-08-06</code><br><br><span class="tablenote"><b>Note:</b> The time zone for this date is specified from the <b>timeZoneId</b> field. If this field is not used, the time zone will be derived from the provided address.</span>
     * @return string|null
    */
    public function getEndDate(): ?string {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cutOffTime' => fn(ParseNode $n) => $o->setCutOffTime($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the startDate property value. The start date of the cut-off time override in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> format, which is based on the 24-hour Coordinated Universal Time (UTC) clock.<br><br><span class="tablenote"><b>Note:</b> If the cut-off time override is only for a single day, input the same date in the <b>startDate</b> and <b>endDate</b> fields.</span><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]</code><br><br><b>Example:</b> <code>2024-08-04</code><br><br><span class="tablenote"><b>Note:</b> The time zone for this date is specified from the <b>timeZoneId</b> field. If this field is not used, the time zone will be derived from the provided address.</span>
     * @return string|null
    */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cutOffTime', $this->getCutOffTime());
        $writer->writeStringValue('endDate', $this->getEndDate());
        $writer->writeStringValue('startDate', $this->getStartDate());
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
     * Sets the cutOffTime property value. This field is used to override the cut-off time(s) specified in the <b>weeklySchedule</b> container. If an order is placed after this time in the specified date or date range, it will be handled by the seller on the following day.<br><br><b>Format:</b> <code>00:00</code>
     * @param string|null $value Value to set for the cutOffTime property.
    */
    public function setCutOffTime(?string $value): void {
        $this->cutOffTime = $value;
    }

    /**
     * Sets the endDate property value. The end date of the cut-off time override in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> format, which is based on the 24-hour Coordinated Universal Time (UTC) clock.<br><br><span class="tablenote"><b>Note:</b> If the cut-off time override is only for a single day, input the same date in the <b>startDate</b> and <b>endDate</b> fields.</span><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]</code><br><br><b>Example:</b> <code>2024-08-06</code><br><br><span class="tablenote"><b>Note:</b> The time zone for this date is specified from the <b>timeZoneId</b> field. If this field is not used, the time zone will be derived from the provided address.</span>
     * @param string|null $value Value to set for the endDate property.
    */
    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    /**
     * Sets the startDate property value. The start date of the cut-off time override in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> format, which is based on the 24-hour Coordinated Universal Time (UTC) clock.<br><br><span class="tablenote"><b>Note:</b> If the cut-off time override is only for a single day, input the same date in the <b>startDate</b> and <b>endDate</b> fields.</span><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]</code><br><br><b>Example:</b> <code>2024-08-04</code><br><br><span class="tablenote"><b>Note:</b> The time zone for this date is specified from the <b>timeZoneId</b> field. If this field is not used, the time zone will be derived from the provided address.</span>
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

}
