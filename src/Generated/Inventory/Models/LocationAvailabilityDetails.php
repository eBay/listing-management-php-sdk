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
 * This type provides the unique identifier of an inventory location that is associated with a SKU within a listing.
*/
class LocationAvailabilityDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $merchantLocationKey The unique identifier of a seller’s fulfillment center location where inventory is available for the item or item variation.<br><br><span class="tablenote"><b>Note:</b> When creating a location mapping using the <b>createOrReplaceSkuLocationMapping</b> method, the value entered in this field <b>must</b> be associated with a location with the <code>FULFILLMENT_CENTER</code> location type, or an error will occur. Sellers can check the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations#response.locations.locationTypes" target="_blank">locationTypes</a> array in the response of the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to see if their location has a value of <code>FULFILLMENT_CENTER</code>.</span>
    */
    private ?string $merchantLocationKey = null;
    
    /**
     * Instantiates a new LocationAvailabilityDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocationAvailabilityDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocationAvailabilityDetails {
        return new LocationAvailabilityDetails();
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
            'merchantLocationKey' => fn(ParseNode $n) => $o->setMerchantLocationKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the merchantLocationKey property value. The unique identifier of a seller’s fulfillment center location where inventory is available for the item or item variation.<br><br><span class="tablenote"><b>Note:</b> When creating a location mapping using the <b>createOrReplaceSkuLocationMapping</b> method, the value entered in this field <b>must</b> be associated with a location with the <code>FULFILLMENT_CENTER</code> location type, or an error will occur. Sellers can check the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations#response.locations.locationTypes" target="_blank">locationTypes</a> array in the response of the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to see if their location has a value of <code>FULFILLMENT_CENTER</code>.</span>
     * @return string|null
    */
    public function getMerchantLocationKey(): ?string {
        return $this->merchantLocationKey;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('merchantLocationKey', $this->getMerchantLocationKey());
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
     * Sets the merchantLocationKey property value. The unique identifier of a seller’s fulfillment center location where inventory is available for the item or item variation.<br><br><span class="tablenote"><b>Note:</b> When creating a location mapping using the <b>createOrReplaceSkuLocationMapping</b> method, the value entered in this field <b>must</b> be associated with a location with the <code>FULFILLMENT_CENTER</code> location type, or an error will occur. Sellers can check the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations#response.locations.locationTypes" target="_blank">locationTypes</a> array in the response of the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to see if their location has a value of <code>FULFILLMENT_CENTER</code>.</span>
     * @param string|null $value Value to set for the merchantLocationKey property.
    */
    public function setMerchantLocationKey(?string $value): void {
        $this->merchantLocationKey = $value;
    }

}
