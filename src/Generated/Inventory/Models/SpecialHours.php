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
 * This type is used to express the special operating hours of a store location on a specific date. A <strong>specialHours</strong> container is needed when the store's opening hours on a specific date are different than the normal operating hours on that particular day of the week.
*/
class SpecialHours implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $date A <strong>date</strong> value is required for each specific date that the store location has special operating hours or is closed for that date.  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2025-08-04T00:00:00.000Z</code> <br><br>This field is returned if set for the store location.
    */
    private ?string $date = null;
    
    /**
     * @var array<Interval>|null $intervals This array is used to set the operating hours for the date specified in the corresponding <strong>date</strong> field. These special operating hours on this specific date will override the normal operating hours for that day of the week that is specified through the <strong>operatingHours</strong> array. <br><br>To specify a location as closed on the corresponding <strong>date</strong>, include the <strong>intervals</strong> array as empty. <br><br>If a location closes for lunch (or any other period during the day) and then reopens, multiple <strong>open</strong> and <strong>close</strong> pairs are needed to specify each interval where the location is open. <br><br>This container is returned if set for the store location.
    */
    private ?array $intervals = null;
    
    /**
     * Instantiates a new SpecialHours and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpecialHours
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpecialHours {
        return new SpecialHours();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the date property value. A <strong>date</strong> value is required for each specific date that the store location has special operating hours or is closed for that date.  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2025-08-04T00:00:00.000Z</code> <br><br>This field is returned if set for the store location.
     * @return string|null
    */
    public function getDate(): ?string {
        return $this->date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'date' => fn(ParseNode $n) => $o->setDate($n->getStringValue()),
            'intervals' => fn(ParseNode $n) => $o->setIntervals($n->getCollectionOfObjectValues([Interval::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the intervals property value. This array is used to set the operating hours for the date specified in the corresponding <strong>date</strong> field. These special operating hours on this specific date will override the normal operating hours for that day of the week that is specified through the <strong>operatingHours</strong> array. <br><br>To specify a location as closed on the corresponding <strong>date</strong>, include the <strong>intervals</strong> array as empty. <br><br>If a location closes for lunch (or any other period during the day) and then reopens, multiple <strong>open</strong> and <strong>close</strong> pairs are needed to specify each interval where the location is open. <br><br>This container is returned if set for the store location.
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
        $writer->writeStringValue('date', $this->getDate());
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
     * Sets the date property value. A <strong>date</strong> value is required for each specific date that the store location has special operating hours or is closed for that date.  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2025-08-04T00:00:00.000Z</code> <br><br>This field is returned if set for the store location.
     * @param string|null $value Value to set for the date property.
    */
    public function setDate(?string $value): void {
        $this->date = $value;
    }

    /**
     * Sets the intervals property value. This array is used to set the operating hours for the date specified in the corresponding <strong>date</strong> field. These special operating hours on this specific date will override the normal operating hours for that day of the week that is specified through the <strong>operatingHours</strong> array. <br><br>To specify a location as closed on the corresponding <strong>date</strong>, include the <strong>intervals</strong> array as empty. <br><br>If a location closes for lunch (or any other period during the day) and then reopens, multiple <strong>open</strong> and <strong>close</strong> pairs are needed to specify each interval where the location is open. <br><br>This container is returned if set for the store location.
     * @param array<Interval>|null $value Value to set for the intervals property.
    */
    public function setIntervals(?array $value): void {
        $this->intervals = $value;
    }

}
