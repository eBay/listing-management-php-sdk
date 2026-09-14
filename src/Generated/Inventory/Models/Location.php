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
 * A complex type that is used to provide the physical address of a location, and it geo-coordinates.
*/
class Location implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Address|null $address The <strong>address</strong> container is always returned in <strong>getInventoryLocation</strong>/<strong>getInventoryLocations</strong> calls. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory location.
    */
    private ?Address $address = null;
    
    /**
     * @var GeoCoordinates|null $geoCoordinates This container displays the Global Positioning System (GPS) latitude and longitude coordinates for the inventory location.<br><br>This container is only returned if the geo-coordinates are set for an inventory location.
    */
    private ?GeoCoordinates $geoCoordinates = null;
    
    /**
     * @var string|null $locationId A unique eBay-assigned ID for the location. <br><br> <span class="tablenote"> <strong>Note:</strong> This field should not be confused with the seller-defined <b>merchantLocationKey</b> value. It is the <b>merchantLocationKey</b> value which is used to identify an inventory location when working with inventory location API calls. The <strong>locationId</strong> value is only used internally by eBay.</span>
    */
    private ?string $locationId = null;
    
    /**
     * Instantiates a new Location and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Location
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Location {
        return new Location();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The <strong>address</strong> container is always returned in <strong>getInventoryLocation</strong>/<strong>getInventoryLocations</strong> calls. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory location.
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
            'locationId' => fn(ParseNode $n) => $o->setLocationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the geoCoordinates property value. This container displays the Global Positioning System (GPS) latitude and longitude coordinates for the inventory location.<br><br>This container is only returned if the geo-coordinates are set for an inventory location.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        return $this->geoCoordinates;
    }

    /**
     * Gets the locationId property value. A unique eBay-assigned ID for the location. <br><br> <span class="tablenote"> <strong>Note:</strong> This field should not be confused with the seller-defined <b>merchantLocationKey</b> value. It is the <b>merchantLocationKey</b> value which is used to identify an inventory location when working with inventory location API calls. The <strong>locationId</strong> value is only used internally by eBay.</span>
     * @return string|null
    */
    public function getLocationId(): ?string {
        return $this->locationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
        $writer->writeStringValue('locationId', $this->getLocationId());
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
     * Sets the address property value. The <strong>address</strong> container is always returned in <strong>getInventoryLocation</strong>/<strong>getInventoryLocations</strong> calls. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory location.
     * @param Address|null $value Value to set for the address property.
    */
    public function setAddress(?Address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the geoCoordinates property value. This container displays the Global Positioning System (GPS) latitude and longitude coordinates for the inventory location.<br><br>This container is only returned if the geo-coordinates are set for an inventory location.
     * @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value): void {
        $this->geoCoordinates = $value;
    }

    /**
     * Sets the locationId property value. A unique eBay-assigned ID for the location. <br><br> <span class="tablenote"> <strong>Note:</strong> This field should not be confused with the seller-defined <b>merchantLocationKey</b> value. It is the <b>merchantLocationKey</b> value which is used to identify an inventory location when working with inventory location API calls. The <strong>locationId</strong> value is only used internally by eBay.</span>
     * @param string|null $value Value to set for the locationId property.
    */
    public function setLocationId(?string $value): void {
        $this->locationId = $value;
    }

}
