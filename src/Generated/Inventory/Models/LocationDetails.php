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
 * This type is used by the <b>createInventoryLocation</b> call to provide an full or partial address of an inventory location.
*/
class LocationDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Address|null $address This type is used to define the physical address of an inventory location.
    */
    private ?Address $address = null;
    
    /**
     * @var GeoCoordinates|null $geoCoordinates This type is used to express the Global Positioning System (GPS) latitude and longitude coordinates of an inventory location.
    */
    private ?GeoCoordinates $geoCoordinates = null;
    
    /**
     * Instantiates a new LocationDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocationDetails {
        return new LocationDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. This type is used to define the physical address of an inventory location.
     * @return Address|null
    */
    public function getAddress(): ?Address {
        return $this->address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'geoCoordinates' => fn(ParseNode $n) => $o->setGeoCoordinates($n->getObjectValue([GeoCoordinates::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the geoCoordinates property value. This type is used to express the Global Positioning System (GPS) latitude and longitude coordinates of an inventory location.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        return $this->geoCoordinates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
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
     * Sets the address property value. This type is used to define the physical address of an inventory location.
     * @param Address|null $value Value to set for the address property.
    */
    public function setAddress(?Address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the geoCoordinates property value. This type is used to express the Global Positioning System (GPS) latitude and longitude coordinates of an inventory location.
     * @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value): void {
        $this->geoCoordinates = $value;
    }

}
