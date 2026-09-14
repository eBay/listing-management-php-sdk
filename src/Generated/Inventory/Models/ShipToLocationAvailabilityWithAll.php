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
 * This type is used to specify the total 'ship-to-home' quantity of the inventory items that will be available for purchase through one or more published offers.
*/
class ShipToLocationAvailabilityWithAll implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FormatAllocation|null $allocationByFormat This container is used to specify the quantity of the inventory item that is available for purchase, allocated by the offer types.
    */
    private ?FormatAllocation $allocationByFormat = null;
    
    /**
     * @var array<AvailabilityDistribution>|null $availabilityDistributions This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br><br>This container will be returned if the available quantity is set for one or more inventory locations.
    */
    private ?array $availabilityDistributions = null;
    
    /**
     * @var int|null $quantity <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Publish offer note: Although this field is not required before an offer can be published to create an active listing, out of stock listings will result if this field is omitted or set to <code>0</code>.</p></div><br>This field is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers. This field is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.<br><br>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.
    */
    private ?int $quantity = null;
    
    /**
     * Instantiates a new ShipToLocationAvailabilityWithAll and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShipToLocationAvailabilityWithAll
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShipToLocationAvailabilityWithAll {
        return new ShipToLocationAvailabilityWithAll();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allocationByFormat property value. This container is used to specify the quantity of the inventory item that is available for purchase, allocated by the offer types.
     * @return FormatAllocation|null
    */
    public function getAllocationByFormat(): ?FormatAllocation {
        return $this->allocationByFormat;
    }

    /**
     * Gets the availabilityDistributions property value. This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br><br>This container will be returned if the available quantity is set for one or more inventory locations.
     * @return array<AvailabilityDistribution>|null
    */
    public function getAvailabilityDistributions(): ?array {
        return $this->availabilityDistributions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allocationByFormat' => fn(ParseNode $n) => $o->setAllocationByFormat($n->getObjectValue([FormatAllocation::class, 'createFromDiscriminatorValue'])),
            'availabilityDistributions' => fn(ParseNode $n) => $o->setAvailabilityDistributions($n->getCollectionOfObjectValues([AvailabilityDistribution::class, 'createFromDiscriminatorValue'])),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the quantity property value. <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Publish offer note: Although this field is not required before an offer can be published to create an active listing, out of stock listings will result if this field is omitted or set to <code>0</code>.</p></div><br>This field is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers. This field is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.<br><br>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('allocationByFormat', $this->getAllocationByFormat());
        $writer->writeCollectionOfObjectValues('availabilityDistributions', $this->getAvailabilityDistributions());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
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
     * Sets the allocationByFormat property value. This container is used to specify the quantity of the inventory item that is available for purchase, allocated by the offer types.
     * @param FormatAllocation|null $value Value to set for the allocationByFormat property.
    */
    public function setAllocationByFormat(?FormatAllocation $value): void {
        $this->allocationByFormat = $value;
    }

    /**
     * Sets the availabilityDistributions property value. This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br><br>This container will be returned if the available quantity is set for one or more inventory locations.
     * @param array<AvailabilityDistribution>|null $value Value to set for the availabilityDistributions property.
    */
    public function setAvailabilityDistributions(?array $value): void {
        $this->availabilityDistributions = $value;
    }

    /**
     * Sets the quantity property value. <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Publish offer note: Although this field is not required before an offer can be published to create an active listing, out of stock listings will result if this field is omitted or set to <code>0</code>.</p></div><br>This field is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers. This field is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.<br><br>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

}
