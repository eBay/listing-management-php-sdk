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
 * This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
*/
class ShipToLocationAvailability implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AvailabilityDistribution>|null $availabilityDistributions This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br><br>This container will be returned if available quantity is set for one or more inventory locations.
    */
    private ?array $availabilityDistributions = null;
    
    /**
     * @var int|null $quantity This container is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.<br><br>This field represents the total quantity of the item that is available for sale across all marketplaces. To update the available quantity allocated to a specific marketplace, use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkupdatepricequantity.offerpricequantity.availablequantity"><b>availableQuantity</b></a> field in the <b>offer</b> container associated with that marketplace.<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that the available quantity allocated to a specific marketplace doesn't exceed the total available stock, the quantity specified on a listing will be the minimum value between this field and the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkupdatepricequantity.offerpricequantity.availablequantity"><b>availableQuantity</b></a> field.</span><br>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This field is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.</p></div>
    */
    private ?int $quantity = null;
    
    /**
     * Instantiates a new ShipToLocationAvailability and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShipToLocationAvailability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShipToLocationAvailability {
        return new ShipToLocationAvailability();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityDistributions property value. This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br><br>This container will be returned if available quantity is set for one or more inventory locations.
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
            'availabilityDistributions' => fn(ParseNode $n) => $o->setAvailabilityDistributions($n->getCollectionOfObjectValues([AvailabilityDistribution::class, 'createFromDiscriminatorValue'])),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the quantity property value. This container is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.<br><br>This field represents the total quantity of the item that is available for sale across all marketplaces. To update the available quantity allocated to a specific marketplace, use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkupdatepricequantity.offerpricequantity.availablequantity"><b>availableQuantity</b></a> field in the <b>offer</b> container associated with that marketplace.<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that the available quantity allocated to a specific marketplace doesn't exceed the total available stock, the quantity specified on a listing will be the minimum value between this field and the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkupdatepricequantity.offerpricequantity.availablequantity"><b>availableQuantity</b></a> field.</span><br>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This field is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.</p></div>
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
     * Sets the availabilityDistributions property value. This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br><br>This container will be returned if available quantity is set for one or more inventory locations.
     * @param array<AvailabilityDistribution>|null $value Value to set for the availabilityDistributions property.
    */
    public function setAvailabilityDistributions(?array $value): void {
        $this->availabilityDistributions = $value;
    }

    /**
     * Sets the quantity property value. This container is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.<br><br>This field represents the total quantity of the item that is available for sale across all marketplaces. To update the available quantity allocated to a specific marketplace, use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkupdatepricequantity.offerpricequantity.availablequantity"><b>availableQuantity</b></a> field in the <b>offer</b> container associated with that marketplace.<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that the available quantity allocated to a specific marketplace doesn't exceed the total available stock, the quantity specified on a listing will be the minimum value between this field and the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkupdatepricequantity.offerpricequantity.availablequantity"><b>availableQuantity</b></a> field.</span><br>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This field is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.</p></div>
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

}
