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
 * This type is used by the <strong>offers</strong> container in a <strong>Bulk Update Price and Quantity</strong> call to update the current price and/or quantity of one or more offers associated with a specific inventory item.
*/
class OfferPriceQuantity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $availableQuantity This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding <strong>offerId</strong> value).<br><br>This value represents the quantity of the item that is available in the marketplace specified within the offer, not the total quantity available. Because of this, this value should not exceed the value specified in the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#request.requests.shipToLocationAvailability.quantity"><b>quantity</b></a> field of the <b>shipToLocationAvailability</b> container (the total available quantity of the item across all marketplaces).<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that the available quantity allocated to a specific marketplace doesn't exceed the total available stock, the quantity specified on a listing will be the minimum value between this field and the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#request.requests.shipToLocationAvailability.quantity"><b>quantity</b></a> field.</span><br>Either the <strong>availableQuantity</strong> field or the <strong>price</strong> container is required, but not necessarily both.
    */
    private ?int $availableQuantity = null;
    
    /**
     * @var string|null $offerId This field is the unique identifier of the offer. If an <strong>offers</strong> container is used to update one or more offers associated to a specific inventory item, the <strong>offerId</strong> value is required in order to identify the offer to update with a modified price and/or quantity.<br><br>The seller can use the <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers" target="_blank ">getOffers</a> method (passing in the correct SKU value as a query parameter) to retrieve <strong>offerId</strong> values for offers associated with the SKU.
    */
    private ?string $offerId = null;
    
    /**
     * @var Amount|null $price This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $price = null;
    
    /**
     * Instantiates a new OfferPriceQuantity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferPriceQuantity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferPriceQuantity {
        return new OfferPriceQuantity();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableQuantity property value. This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding <strong>offerId</strong> value).<br><br>This value represents the quantity of the item that is available in the marketplace specified within the offer, not the total quantity available. Because of this, this value should not exceed the value specified in the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#request.requests.shipToLocationAvailability.quantity"><b>quantity</b></a> field of the <b>shipToLocationAvailability</b> container (the total available quantity of the item across all marketplaces).<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that the available quantity allocated to a specific marketplace doesn't exceed the total available stock, the quantity specified on a listing will be the minimum value between this field and the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#request.requests.shipToLocationAvailability.quantity"><b>quantity</b></a> field.</span><br>Either the <strong>availableQuantity</strong> field or the <strong>price</strong> container is required, but not necessarily both.
     * @return int|null
    */
    public function getAvailableQuantity(): ?int {
        return $this->availableQuantity;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableQuantity' => fn(ParseNode $n) => $o->setAvailableQuantity($n->getIntegerValue()),
            'offerId' => fn(ParseNode $n) => $o->setOfferId($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the offerId property value. This field is the unique identifier of the offer. If an <strong>offers</strong> container is used to update one or more offers associated to a specific inventory item, the <strong>offerId</strong> value is required in order to identify the offer to update with a modified price and/or quantity.<br><br>The seller can use the <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers" target="_blank ">getOffers</a> method (passing in the correct SKU value as a query parameter) to retrieve <strong>offerId</strong> values for offers associated with the SKU.
     * @return string|null
    */
    public function getOfferId(): ?string {
        return $this->offerId;
    }

    /**
     * Gets the price property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getPrice(): ?Amount {
        return $this->price;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('availableQuantity', $this->getAvailableQuantity());
        $writer->writeStringValue('offerId', $this->getOfferId());
        $writer->writeObjectValue('price', $this->getPrice());
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
     * Sets the availableQuantity property value. This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding <strong>offerId</strong> value).<br><br>This value represents the quantity of the item that is available in the marketplace specified within the offer, not the total quantity available. Because of this, this value should not exceed the value specified in the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#request.requests.shipToLocationAvailability.quantity"><b>quantity</b></a> field of the <b>shipToLocationAvailability</b> container (the total available quantity of the item across all marketplaces).<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that the available quantity allocated to a specific marketplace doesn't exceed the total available stock, the quantity specified on a listing will be the minimum value between this field and the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/bulkUpdatePriceQuantity#request.requests.shipToLocationAvailability.quantity"><b>quantity</b></a> field.</span><br>Either the <strong>availableQuantity</strong> field or the <strong>price</strong> container is required, but not necessarily both.
     * @param int|null $value Value to set for the availableQuantity property.
    */
    public function setAvailableQuantity(?int $value): void {
        $this->availableQuantity = $value;
    }

    /**
     * Sets the offerId property value. This field is the unique identifier of the offer. If an <strong>offers</strong> container is used to update one or more offers associated to a specific inventory item, the <strong>offerId</strong> value is required in order to identify the offer to update with a modified price and/or quantity.<br><br>The seller can use the <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers" target="_blank ">getOffers</a> method (passing in the correct SKU value as a query parameter) to retrieve <strong>offerId</strong> values for offers associated with the SKU.
     * @param string|null $value Value to set for the offerId property.
    */
    public function setOfferId(?string $value): void {
        $this->offerId = $value;
    }

    /**
     * Sets the price property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the price property.
    */
    public function setPrice(?Amount $value): void {
        $this->price = $value;
    }

}
