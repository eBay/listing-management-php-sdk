<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to update the total "ship-to-home"  quantity for one or more inventory items and/or to update the price and/or quantity of one or more specific offers associated with one or more inventory items.
*/
class PriceQuantity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<OfferPriceQuantity>|null $offers This container is needed if the seller is updating the price and/or quantity of one or more published offers, and a successful call will actually update the active eBay listing with the revised price and/or available quantity.<br><br>This call is not designed to work with unpublished offers. For unpublished offers, the seller should use the <strong>updateOffer</strong> call to update the available quantity and/or price.<br><br>If the seller is also using the <strong>shipToLocationAvailability</strong> container and <strong>sku</strong> field to update the total 'ship-to-home' quantity of the inventory item, the SKU value associated with the corresponding <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> A separate (<strong>OfferPriceQuantity</strong>) node is required for each offer being updated.</p></div>
    */
    private ?array $offers = null;
    
    /**
     * @var ShipToLocationAvailability|null $shipToLocationAvailability This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
    */
    private ?ShipToLocationAvailability $shipToLocationAvailability = null;
    
    /**
     * @var string|null $sku This is the seller-defined SKU value of the inventory item whose total 'ship-to-home' quantity will be updated. This field is only required when the seller is updating the total quantity of an inventory item using the <strong>shipToLocationAvailability</strong> container. If the seller is updating the price and/or quantity of one or more specific offers, one or more <strong>offerId</strong> values are used instead, and the <strong>sku</strong> value is not needed.<br><br>If the seller wants to update the price and/or quantity of one or more offers, and also wants to update the total 'ship-to-home' quantity of the corresponding inventory item, the SKU value associated with the <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems" target="_blank ">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max Length</strong>: 50<br>
    */
    private ?string $sku = null;
    
    /**
     * Instantiates a new PriceQuantity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PriceQuantity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PriceQuantity {
        return new PriceQuantity();
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
            'offers' => fn(ParseNode $n) => $o->setOffers($n->getCollectionOfObjectValues([OfferPriceQuantity::class, 'createFromDiscriminatorValue'])),
            'shipToLocationAvailability' => fn(ParseNode $n) => $o->setShipToLocationAvailability($n->getObjectValue([ShipToLocationAvailability::class, 'createFromDiscriminatorValue'])),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
        ];
    }

    /**
     * Gets the offers property value. This container is needed if the seller is updating the price and/or quantity of one or more published offers, and a successful call will actually update the active eBay listing with the revised price and/or available quantity.<br><br>This call is not designed to work with unpublished offers. For unpublished offers, the seller should use the <strong>updateOffer</strong> call to update the available quantity and/or price.<br><br>If the seller is also using the <strong>shipToLocationAvailability</strong> container and <strong>sku</strong> field to update the total 'ship-to-home' quantity of the inventory item, the SKU value associated with the corresponding <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> A separate (<strong>OfferPriceQuantity</strong>) node is required for each offer being updated.</p></div>
     * @return array<OfferPriceQuantity>|null
    */
    public function getOffers(): ?array {
        return $this->offers;
    }

    /**
     * Gets the shipToLocationAvailability property value. This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
     * @return ShipToLocationAvailability|null
    */
    public function getShipToLocationAvailability(): ?ShipToLocationAvailability {
        return $this->shipToLocationAvailability;
    }

    /**
     * Gets the sku property value. This is the seller-defined SKU value of the inventory item whose total 'ship-to-home' quantity will be updated. This field is only required when the seller is updating the total quantity of an inventory item using the <strong>shipToLocationAvailability</strong> container. If the seller is updating the price and/or quantity of one or more specific offers, one or more <strong>offerId</strong> values are used instead, and the <strong>sku</strong> value is not needed.<br><br>If the seller wants to update the price and/or quantity of one or more offers, and also wants to update the total 'ship-to-home' quantity of the corresponding inventory item, the SKU value associated with the <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems" target="_blank ">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max Length</strong>: 50<br>
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('offers', $this->getOffers());
        $writer->writeObjectValue('shipToLocationAvailability', $this->getShipToLocationAvailability());
        $writer->writeStringValue('sku', $this->getSku());
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
     * Sets the offers property value. This container is needed if the seller is updating the price and/or quantity of one or more published offers, and a successful call will actually update the active eBay listing with the revised price and/or available quantity.<br><br>This call is not designed to work with unpublished offers. For unpublished offers, the seller should use the <strong>updateOffer</strong> call to update the available quantity and/or price.<br><br>If the seller is also using the <strong>shipToLocationAvailability</strong> container and <strong>sku</strong> field to update the total 'ship-to-home' quantity of the inventory item, the SKU value associated with the corresponding <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> A separate (<strong>OfferPriceQuantity</strong>) node is required for each offer being updated.</p></div>
     * @param array<OfferPriceQuantity>|null $value Value to set for the offers property.
    */
    public function setOffers(?array $value): void {
        $this->offers = $value;
    }

    /**
     * Sets the shipToLocationAvailability property value. This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
     * @param ShipToLocationAvailability|null $value Value to set for the shipToLocationAvailability property.
    */
    public function setShipToLocationAvailability(?ShipToLocationAvailability $value): void {
        $this->shipToLocationAvailability = $value;
    }

    /**
     * Sets the sku property value. This is the seller-defined SKU value of the inventory item whose total 'ship-to-home' quantity will be updated. This field is only required when the seller is updating the total quantity of an inventory item using the <strong>shipToLocationAvailability</strong> container. If the seller is updating the price and/or quantity of one or more specific offers, one or more <strong>offerId</strong> values are used instead, and the <strong>sku</strong> value is not needed.<br><br>If the seller wants to update the price and/or quantity of one or more offers, and also wants to update the total 'ship-to-home' quantity of the corresponding inventory item, the SKU value associated with the <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems" target="_blank ">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max Length</strong>: 50<br>
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

}
