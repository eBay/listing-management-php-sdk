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
 * This type is used by the <b>createInventoryLocation</b> call to specify cut-off time(s) for an inventory location, as well as any overrides for these times.
*/
class SameDayShippingCutOffTimes implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Overrides>|null $overrides This container can be used to override the existing cut-off time(s), specified in the <b>weeklySchedule</b> container, for a specific date or date range.
    */
    private ?array $overrides = null;
    
    /**
     * @var array<WeeklySchedule>|null $weeklySchedule This container is used to specify the weekly schedule for shipping and handling cut-off times. A cut-off time is required for each business day that the fulfillment center operates. Any orders made after the specified <b>cutOffTime</b> on the specified day(s) of the week will be handled on the next day.
    */
    private ?array $weeklySchedule = null;
    
    /**
     * Instantiates a new SameDayShippingCutOffTimes and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SameDayShippingCutOffTimes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SameDayShippingCutOffTimes {
        return new SameDayShippingCutOffTimes();
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
            'overrides' => fn(ParseNode $n) => $o->setOverrides($n->getCollectionOfObjectValues([Overrides::class, 'createFromDiscriminatorValue'])),
            'weeklySchedule' => fn(ParseNode $n) => $o->setWeeklySchedule($n->getCollectionOfObjectValues([WeeklySchedule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the overrides property value. This container can be used to override the existing cut-off time(s), specified in the <b>weeklySchedule</b> container, for a specific date or date range.
     * @return array<Overrides>|null
    */
    public function getOverrides(): ?array {
        return $this->overrides;
    }

    /**
     * Gets the weeklySchedule property value. This container is used to specify the weekly schedule for shipping and handling cut-off times. A cut-off time is required for each business day that the fulfillment center operates. Any orders made after the specified <b>cutOffTime</b> on the specified day(s) of the week will be handled on the next day.
     * @return array<WeeklySchedule>|null
    */
    public function getWeeklySchedule(): ?array {
        return $this->weeklySchedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('overrides', $this->getOverrides());
        $writer->writeCollectionOfObjectValues('weeklySchedule', $this->getWeeklySchedule());
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
     * Sets the overrides property value. This container can be used to override the existing cut-off time(s), specified in the <b>weeklySchedule</b> container, for a specific date or date range.
     * @param array<Overrides>|null $value Value to set for the overrides property.
    */
    public function setOverrides(?array $value): void {
        $this->overrides = $value;
    }

    /**
     * Sets the weeklySchedule property value. This container is used to specify the weekly schedule for shipping and handling cut-off times. A cut-off time is required for each business day that the fulfillment center operates. Any orders made after the specified <b>cutOffTime</b> on the specified day(s) of the week will be handled on the next day.
     * @param array<WeeklySchedule>|null $value Value to set for the weeklySchedule property.
    */
    public function setWeeklySchedule(?array $value): void {
        $this->weeklySchedule = $value;
    }

}
