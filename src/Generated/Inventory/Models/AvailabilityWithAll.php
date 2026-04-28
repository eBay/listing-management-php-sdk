<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to specify the quantity of the inventory items that are available for purchase if the items will be shipped to the buyer, and the quantity of the inventory items that are available for In-Store Pickup at one or more of the merchant's physical stores.<br><br>In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
*/
class AvailabilityWithAll implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PickupAtLocationAvailability>|null $pickupAtLocationAvailability This container consists of an array of one or more of the merchant's physical stores where the inventory item is available for in-store pickup.<br><br>The store ID, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order occurs) are all returned in this container.
    */
    private ?array $pickupAtLocationAvailability = null;
    
    /**
     * @var ShipToLocationAvailabilityWithAll|null $shipToLocationAvailability This type is used to specify the total 'ship-to-home' quantity of the inventory items that will be available for purchase through one or more published offers.
    */
    private ?ShipToLocationAvailabilityWithAll $shipToLocationAvailability = null;
    
    /**
     * Instantiates a new AvailabilityWithAll and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AvailabilityWithAll
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AvailabilityWithAll {
        return new AvailabilityWithAll();
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
            'pickupAtLocationAvailability' => fn(ParseNode $n) => $o->setPickupAtLocationAvailability($n->getCollectionOfObjectValues([PickupAtLocationAvailability::class, 'createFromDiscriminatorValue'])),
            'shipToLocationAvailability' => fn(ParseNode $n) => $o->setShipToLocationAvailability($n->getObjectValue([ShipToLocationAvailabilityWithAll::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pickupAtLocationAvailability property value. This container consists of an array of one or more of the merchant's physical stores where the inventory item is available for in-store pickup.<br><br>The store ID, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order occurs) are all returned in this container.
     * @return array<PickupAtLocationAvailability>|null
    */
    public function getPickupAtLocationAvailability(): ?array {
        return $this->pickupAtLocationAvailability;
    }

    /**
     * Gets the shipToLocationAvailability property value. This type is used to specify the total 'ship-to-home' quantity of the inventory items that will be available for purchase through one or more published offers.
     * @return ShipToLocationAvailabilityWithAll|null
    */
    public function getShipToLocationAvailability(): ?ShipToLocationAvailabilityWithAll {
        return $this->shipToLocationAvailability;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('pickupAtLocationAvailability', $this->getPickupAtLocationAvailability());
        $writer->writeObjectValue('shipToLocationAvailability', $this->getShipToLocationAvailability());
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
     * Sets the pickupAtLocationAvailability property value. This container consists of an array of one or more of the merchant's physical stores where the inventory item is available for in-store pickup.<br><br>The store ID, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order occurs) are all returned in this container.
     * @param array<PickupAtLocationAvailability>|null $value Value to set for the pickupAtLocationAvailability property.
    */
    public function setPickupAtLocationAvailability(?array $value): void {
        $this->pickupAtLocationAvailability = $value;
    }

    /**
     * Sets the shipToLocationAvailability property value. This type is used to specify the total 'ship-to-home' quantity of the inventory items that will be available for purchase through one or more published offers.
     * @param ShipToLocationAvailabilityWithAll|null $value Value to set for the shipToLocationAvailability property.
    */
    public function setShipToLocationAvailability(?ShipToLocationAvailabilityWithAll $value): void {
        $this->shipToLocationAvailability = $value;
    }

}
