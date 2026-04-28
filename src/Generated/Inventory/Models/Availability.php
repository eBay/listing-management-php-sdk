<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to specify the quantity of the inventory item that is available for purchase if the item will be shipped to the buyer, and the quantity of the inventory item that is available for In-Store Pickup at one or more of the merchant's physical stores. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
*/
class Availability implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PickupAtLocationAvailability>|null $pickupAtLocationAvailability This container consists of an array of one or more of the merchant's physical store locations where the inventory item is available for In-Store Pickup orders. The merchant's location, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order takes place) are all in this container. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
    */
    private ?array $pickupAtLocationAvailability = null;
    
    /**
     * @var ShipToLocationAvailability|null $shipToLocationAvailability This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
    */
    private ?ShipToLocationAvailability $shipToLocationAvailability = null;
    
    /**
     * Instantiates a new Availability and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Availability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Availability {
        return new Availability();
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
            'shipToLocationAvailability' => fn(ParseNode $n) => $o->setShipToLocationAvailability($n->getObjectValue([ShipToLocationAvailability::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pickupAtLocationAvailability property value. This container consists of an array of one or more of the merchant's physical store locations where the inventory item is available for In-Store Pickup orders. The merchant's location, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order takes place) are all in this container. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
     * @return array<PickupAtLocationAvailability>|null
    */
    public function getPickupAtLocationAvailability(): ?array {
        return $this->pickupAtLocationAvailability;
    }

    /**
     * Gets the shipToLocationAvailability property value. This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
     * @return ShipToLocationAvailability|null
    */
    public function getShipToLocationAvailability(): ?ShipToLocationAvailability {
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
     * Sets the pickupAtLocationAvailability property value. This container consists of an array of one or more of the merchant's physical store locations where the inventory item is available for In-Store Pickup orders. The merchant's location, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order takes place) are all in this container. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
     * @param array<PickupAtLocationAvailability>|null $value Value to set for the pickupAtLocationAvailability property.
    */
    public function setPickupAtLocationAvailability(?array $value): void {
        $this->pickupAtLocationAvailability = $value;
    }

    /**
     * Sets the shipToLocationAvailability property value. This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
     * @param ShipToLocationAvailability|null $value Value to set for the shipToLocationAvailability property.
    */
    public function setShipToLocationAvailability(?ShipToLocationAvailability $value): void {
        $this->shipToLocationAvailability = $value;
    }

}
