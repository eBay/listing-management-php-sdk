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
 * This type provides an array of locations that are associated with a SKU within a listing.
*/
class LocationMapping implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<LocationAvailabilityDetails>|null $locations This array represents a collection of fulfillment center locations mapped to a SKU.<br><br><span class="tablenote"><b>Note:</b> Only the first 50 locations mapped to a SKU will be considered when calculating estimated delivery dates. Sellers can set up more than 50 locations using this method, but only the first 50 locations will be considered for calculating the estimates.</span>
    */
    private ?array $locations = null;
    
    /**
     * Instantiates a new LocationMapping and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocationMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocationMapping {
        return new LocationMapping();
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
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([LocationAvailabilityDetails::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the locations property value. This array represents a collection of fulfillment center locations mapped to a SKU.<br><br><span class="tablenote"><b>Note:</b> Only the first 50 locations mapped to a SKU will be considered when calculating estimated delivery dates. Sellers can set up more than 50 locations using this method, but only the first 50 locations will be considered for calculating the estimates.</span>
     * @return array<LocationAvailabilityDetails>|null
    */
    public function getLocations(): ?array {
        return $this->locations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
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
     * Sets the locations property value. This array represents a collection of fulfillment center locations mapped to a SKU.<br><br><span class="tablenote"><b>Note:</b> Only the first 50 locations mapped to a SKU will be considered when calculating estimated delivery dates. Sellers can set up more than 50 locations using this method, but only the first 50 locations will be considered for calculating the estimates.</span>
     * @param array<LocationAvailabilityDetails>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value): void {
        $this->locations = $value;
    }

}
