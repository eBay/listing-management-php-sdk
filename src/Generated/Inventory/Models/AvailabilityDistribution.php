<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to set the available quantity of the inventory item at one or more warehouse locations.
*/
class AvailabilityDistribution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var TimeDuration|null $fulfillmentTime This type is used to indicate the fulfillment time for an In-Store Pickup order, or for an order than will be shipped to the buyer.
    */
    private ?TimeDuration $fulfillmentTime = null;
    
    /**
     * @var string|null $merchantLocationKey The unique identifier of an inventory location where quantity is available for the inventory item. This field is conditionally required to identify the inventory location that has quantity of the inventory item.<br><br>Use the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to retrieve merchant location keys.
    */
    private ?string $merchantLocationKey = null;
    
    /**
     * @var int|null $quantity The integer value passed into this field indicates the quantity of the inventory item that is available at this inventory location. This field is conditionally required.
    */
    private ?int $quantity = null;
    
    /**
     * Instantiates a new AvailabilityDistribution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AvailabilityDistribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AvailabilityDistribution {
        return new AvailabilityDistribution();
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
     * Gets the merchantLocationKey property value. The unique identifier of an inventory location where quantity is available for the inventory item. This field is conditionally required to identify the inventory location that has quantity of the inventory item.<br><br>Use the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to retrieve merchant location keys.
     * @return string|null
    */
    public function getMerchantLocationKey(): ?string {
        return $this->merchantLocationKey;
    }

    /**
     * Gets the quantity property value. The integer value passed into this field indicates the quantity of the inventory item that is available at this inventory location. This field is conditionally required.
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
     * Sets the fulfillmentTime property value. This type is used to indicate the fulfillment time for an In-Store Pickup order, or for an order than will be shipped to the buyer.
     * @param TimeDuration|null $value Value to set for the fulfillmentTime property.
    */
    public function setFulfillmentTime(?TimeDuration $value): void {
        $this->fulfillmentTime = $value;
    }

    /**
     * Sets the merchantLocationKey property value. The unique identifier of an inventory location where quantity is available for the inventory item. This field is conditionally required to identify the inventory location that has quantity of the inventory item.<br><br>Use the <a href="/api-docs/sell/inventory/resources/location/methods/getInventoryLocations" target="_blank">getInventoryLocations</a> method to retrieve merchant location keys.
     * @param string|null $value Value to set for the merchantLocationKey property.
    */
    public function setMerchantLocationKey(?string $value): void {
        $this->merchantLocationKey = $value;
    }

    /**
     * Sets the quantity property value. The integer value passed into this field indicates the quantity of the inventory item that is available at this inventory location. This field is conditionally required.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

}
