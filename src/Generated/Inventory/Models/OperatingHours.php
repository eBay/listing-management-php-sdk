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
 * This type is used to express the regular operating hours of a merchant's store or fulfillment center during the days of the week.
*/
class OperatingHours implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $dayOfWeekEnum A <strong>dayOfWeekEnum</strong> value is required for each day of the week that the store location has regular operating hours. <br><br>This field is returned if operating hours are defined for the store location. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:DayOfWeekEnum'>eBay API documentation</a>
    */
    private ?string $dayOfWeekEnum = null;
    
    /**
     * @var array<Interval>|null $intervals This container is used to define the opening and closing times of a store location's working day (defined in the <strong>dayOfWeekEnum</strong> field). An <strong>intervals</strong> container is needed for each day of the week that the store location is open. If a store location closes for lunch (or any other period during the day) and then reopens, multiple <strong>open</strong> and <strong>close</strong> pairs are needed <br><br>This container is returned if operating hours are defined for the store location.
    */
    private ?array $intervals = null;
    
    /**
     * Instantiates a new OperatingHours and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperatingHours
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperatingHours {
        return new OperatingHours();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dayOfWeekEnum property value. A <strong>dayOfWeekEnum</strong> value is required for each day of the week that the store location has regular operating hours. <br><br>This field is returned if operating hours are defined for the store location. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:DayOfWeekEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDayOfWeekEnum(): ?string {
        return $this->dayOfWeekEnum;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dayOfWeekEnum' => fn(ParseNode $n) => $o->setDayOfWeekEnum($n->getStringValue()),
            'intervals' => fn(ParseNode $n) => $o->setIntervals($n->getCollectionOfObjectValues([Interval::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the intervals property value. This container is used to define the opening and closing times of a store location's working day (defined in the <strong>dayOfWeekEnum</strong> field). An <strong>intervals</strong> container is needed for each day of the week that the store location is open. If a store location closes for lunch (or any other period during the day) and then reopens, multiple <strong>open</strong> and <strong>close</strong> pairs are needed <br><br>This container is returned if operating hours are defined for the store location.
     * @return array<Interval>|null
    */
    public function getIntervals(): ?array {
        return $this->intervals;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dayOfWeekEnum', $this->getDayOfWeekEnum());
        $writer->writeCollectionOfObjectValues('intervals', $this->getIntervals());
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
     * Sets the dayOfWeekEnum property value. A <strong>dayOfWeekEnum</strong> value is required for each day of the week that the store location has regular operating hours. <br><br>This field is returned if operating hours are defined for the store location. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:DayOfWeekEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the dayOfWeekEnum property.
    */
    public function setDayOfWeekEnum(?string $value): void {
        $this->dayOfWeekEnum = $value;
    }

    /**
     * Sets the intervals property value. This container is used to define the opening and closing times of a store location's working day (defined in the <strong>dayOfWeekEnum</strong> field). An <strong>intervals</strong> container is needed for each day of the week that the store location is open. If a store location closes for lunch (or any other period during the day) and then reopens, multiple <strong>open</strong> and <strong>close</strong> pairs are needed <br><br>This container is returned if operating hours are defined for the store location.
     * @param array<Interval>|null $value Value to set for the intervals property.
    */
    public function setIntervals(?array $value): void {
        $this->intervals = $value;
    }

}
