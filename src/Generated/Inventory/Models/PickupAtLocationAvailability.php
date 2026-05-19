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
 * This type is used to specify/indicate the quantity of the inventory item that is available for an In-Store Pickup order at the merchant's physical store (specified by the <strong>merchantLocationKey</strong> field).
*/
class PickupAtLocationAvailability implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $availabilityType The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the <strong>pickupAtLocationAvailability.merchantLocationKey</strong> field. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.  <br><br>See <a href="/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum" target="_blank">AvailabilityTypeEnum</a> for more information about how/when you use each enumeration value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum'>eBay API documentation</a>
    */
    private ?string $availabilityType = null;
    
    /**
     * @var TimeDuration|null $fulfillmentTime This type is used to indicate the fulfillment time for an In-Store Pickup order, or for an order than will be shipped to the buyer.
    */
    private ?TimeDuration $fulfillmentTime = null;
    
    /**
     * @var string|null $merchantLocationKey The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the <strong>availabilityType</strong> value should be <code>SHIP_TO_STORE</code>. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.<br><br>Use the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Max length</b>: 36
    */
    private ?string $merchantLocationKey = null;
    
    /**
     * @var int|null $quantity This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the  <strong>merchantLocationKey</strong> value.  The value of <strong>quantity</strong> should be an integer value greater than <code>0</code>, unless the inventory item is out of stock. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.
    */
    private ?int $quantity = null;
    
    /**
     * Instantiates a new PickupAtLocationAvailability and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PickupAtLocationAvailability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PickupAtLocationAvailability {
        return new PickupAtLocationAvailability();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityType property value. The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the <strong>pickupAtLocationAvailability.merchantLocationKey</strong> field. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.  <br><br>See <a href="/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum" target="_blank">AvailabilityTypeEnum</a> for more information about how/when you use each enumeration value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAvailabilityType(): ?string {
        return $this->availabilityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availabilityType' => fn(ParseNode $n) => $o->setAvailabilityType($n->getStringValue()),
            'fulfillmentTime' => fn(ParseNode $n) => $o->setFulfillmentTime($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'merchantLocationKey' => fn(ParseNode $n) => $o->setMerchantLocationKey($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the fulfillmentTime property value. This type is used to indicate the fulfillment time for an In-Store Pickup order, or for an order than will be shipped to the buyer.
     * @return TimeDuration|null
    */
    public function getFulfillmentTime(): ?TimeDuration {
        return $this->fulfillmentTime;
    }

    /**
     * Gets the merchantLocationKey property value. The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the <strong>availabilityType</strong> value should be <code>SHIP_TO_STORE</code>. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.<br><br>Use the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Max length</b>: 36
     * @return string|null
    */
    public function getMerchantLocationKey(): ?string {
        return $this->merchantLocationKey;
    }

    /**
     * Gets the quantity property value. This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the  <strong>merchantLocationKey</strong> value.  The value of <strong>quantity</strong> should be an integer value greater than <code>0</code>, unless the inventory item is out of stock. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.
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
        $writer->writeStringValue('availabilityType', $this->getAvailabilityType());
        $writer->writeObjectValue('fulfillmentTime', $this->getFulfillmentTime());
        $writer->writeStringValue('merchantLocationKey', $this->getMerchantLocationKey());
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
     * Sets the availabilityType property value. The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the <strong>pickupAtLocationAvailability.merchantLocationKey</strong> field. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.  <br><br>See <a href="/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum" target="_blank">AvailabilityTypeEnum</a> for more information about how/when you use each enumeration value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the availabilityType property.
    */
    public function setAvailabilityType(?string $value): void {
        $this->availabilityType = $value;
    }

    /**
     * Sets the fulfillmentTime property value. This type is used to indicate the fulfillment time for an In-Store Pickup order, or for an order than will be shipped to the buyer.
     * @param TimeDuration|null $value Value to set for the fulfillmentTime property.
    */
    public function setFulfillmentTime(?TimeDuration $value): void {
        $this->fulfillmentTime = $value;
    }

    /**
     * Sets the merchantLocationKey property value. The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the <strong>availabilityType</strong> value should be <code>SHIP_TO_STORE</code>. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.<br><br>Use the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Max length</b>: 36
     * @param string|null $value Value to set for the merchantLocationKey property.
    */
    public function setMerchantLocationKey(?string $value): void {
        $this->merchantLocationKey = $value;
    }

    /**
     * Sets the quantity property value. This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the  <strong>merchantLocationKey</strong> value.  The value of <strong>quantity</strong> should be an integer value greater than <code>0</code>, unless the inventory item is out of stock. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

}
