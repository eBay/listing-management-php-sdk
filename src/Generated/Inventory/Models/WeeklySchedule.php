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

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type describes the weekly schedule for cut-off times.
*/
class WeeklySchedule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cutOffTime This field specifies the cut-off times (in 24-hour format) for the business day(s) specified in the <b>dayOfWeekEnum</b> array.<br><br>Cut-off times default to the time zone of the specified address if the <b>timeZoneId</b> is not provided.<br><br><span class="tablenote"><b>Note:</b> If cut-off hours are not specified for a particular day, the fulfillment center is considered to be on holiday for that day.</span><br><b>Format:</b> <code>00:00</code>
    */
    private ?string $cutOffTime = null;
    
    /**
     * @var array<DayOfWeekEnum>|null $dayOfWeekEnum This comma-separated array defines the days of week for which the specified <b>cutOffTime</b> is used.
    */
    private ?array $dayOfWeekEnum = null;
    
    /**
     * Instantiates a new WeeklySchedule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WeeklySchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WeeklySchedule {
        return new WeeklySchedule();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cutOffTime property value. This field specifies the cut-off times (in 24-hour format) for the business day(s) specified in the <b>dayOfWeekEnum</b> array.<br><br>Cut-off times default to the time zone of the specified address if the <b>timeZoneId</b> is not provided.<br><br><span class="tablenote"><b>Note:</b> If cut-off hours are not specified for a particular day, the fulfillment center is considered to be on holiday for that day.</span><br><b>Format:</b> <code>00:00</code>
     * @return string|null
    */
    public function getCutOffTime(): ?string {
        return $this->cutOffTime;
    }

    /**
     * Gets the dayOfWeekEnum property value. This comma-separated array defines the days of week for which the specified <b>cutOffTime</b> is used.
     * @return array<DayOfWeekEnum>|null
    */
    public function getDayOfWeekEnum(): ?array {
        return $this->dayOfWeekEnum;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cutOffTime' => fn(ParseNode $n) => $o->setCutOffTime($n->getStringValue()),
            'dayOfWeekEnum' => fn(ParseNode $n) => $o->setDayOfWeekEnum($n->getCollectionOfEnumValues(DayOfWeekEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cutOffTime', $this->getCutOffTime());
        $writer->writeCollectionOfEnumValues('dayOfWeekEnum', $this->getDayOfWeekEnum());
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
     * Sets the cutOffTime property value. This field specifies the cut-off times (in 24-hour format) for the business day(s) specified in the <b>dayOfWeekEnum</b> array.<br><br>Cut-off times default to the time zone of the specified address if the <b>timeZoneId</b> is not provided.<br><br><span class="tablenote"><b>Note:</b> If cut-off hours are not specified for a particular day, the fulfillment center is considered to be on holiday for that day.</span><br><b>Format:</b> <code>00:00</code>
     * @param string|null $value Value to set for the cutOffTime property.
    */
    public function setCutOffTime(?string $value): void {
        $this->cutOffTime = $value;
    }

    /**
     * Sets the dayOfWeekEnum property value. This comma-separated array defines the days of week for which the specified <b>cutOffTime</b> is used.
     * @param array<DayOfWeekEnum>|null $value Value to set for the dayOfWeekEnum property.
    */
    public function setDayOfWeekEnum(?array $value): void {
        $this->dayOfWeekEnum = $value;
    }

}
