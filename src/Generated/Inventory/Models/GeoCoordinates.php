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
 * This type is used to express the Global Positioning System (GPS) latitude and longitude coordinates of an inventory location.
*/
class GeoCoordinates implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $latitude The latitude (North-South) component of the geographic coordinate. This field is required if a <strong>geoCoordinates</strong> container is used.<br><br>This field is returned if geographical coordinates are set for the location.<br><br><b>Example:</b> <code>33.089805</code>
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude The longitude (East-West) component of the geographic coordinate. This field is required if a <strong>geoCoordinates</strong> container is used.<br><br>This field is returned if geographical coordinates are set for the location.<br><br><b>Example:</b> <code>-88.709822</code>
    */
    private ?float $longitude = null;
    
    /**
     * Instantiates a new GeoCoordinates and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GeoCoordinates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GeoCoordinates {
        return new GeoCoordinates();
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
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
        ];
    }

    /**
     * Gets the latitude property value. The latitude (North-South) component of the geographic coordinate. This field is required if a <strong>geoCoordinates</strong> container is used.<br><br>This field is returned if geographical coordinates are set for the location.<br><br><b>Example:</b> <code>33.089805</code>
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the longitude property value. The longitude (East-West) component of the geographic coordinate. This field is required if a <strong>geoCoordinates</strong> container is used.<br><br>This field is returned if geographical coordinates are set for the location.<br><br><b>Example:</b> <code>-88.709822</code>
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('latitude', $this->getLatitude());
        $writer->writeFloatValue('longitude', $this->getLongitude());
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
     * Sets the latitude property value. The latitude (North-South) component of the geographic coordinate. This field is required if a <strong>geoCoordinates</strong> container is used.<br><br>This field is returned if geographical coordinates are set for the location.<br><br><b>Example:</b> <code>33.089805</code>
     * @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->latitude = $value;
    }

    /**
     * Sets the longitude property value. The longitude (East-West) component of the geographic coordinate. This field is required if a <strong>geoCoordinates</strong> container is used.<br><br>This field is returned if geographical coordinates are set for the location.<br><br><b>Example:</b> <code>-88.709822</code>
     * @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->longitude = $value;
    }

}
