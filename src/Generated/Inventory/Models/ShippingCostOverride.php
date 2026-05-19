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
 * This type is used if the seller wants to override the shipping costs or surcharge associated with a specific domestic or international shipping service option defined in the fulfillment listing policy that is being applied toward the offer. The shipping-related costs that can be overridden include the shipping cost to ship one item, the shipping cost to ship each additional item (if multiple quantity are purchased), and the shipping surcharge applied to the shipping service option.
*/
class ShippingCostOverride implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $additionalShippingCost This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $additionalShippingCost = null;
    
    /**
     * @var int|null $priority The integer value input into this field, along with the <strong>shippingServiceType</strong> value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Specifically, the <strong>shippingCostOverrides.shippingServiceType</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.optionType</strong> value in a fulfillment listing policy, and the <strong>shippingCostOverrides.priority</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.shippingServices.sortOrderId</strong> value in a fulfillment listing policy.<br><br>This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden.
    */
    private ?int $priority = null;
    
    /**
     * @var Amount|null $shippingCost This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var string|null $shippingServiceType This enumerated value indicates whether the shipping service specified in the <strong>priority</strong> field is a domestic or an international shipping service option. To override the shipping costs for a specific domestic shipping service in the fulfillment listing policy, this field should be set to <code>DOMESTIC</code>, and to override the shipping costs for each international shipping service, this field should be set to <code>INTERNATIONAL</code>. This value, along with <strong>priority</strong> value, sets which domestic or international shipping service option in the fulfillment policy that will be modified with updated shipping costs. Specifically, the <strong>shippingCostOverrides.shippingServiceType</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.optionType</strong> value in a fulfillment listing policy, and the <strong>shippingCostOverrides.priority</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.shippingServices.sortOrderId</strong> value in a fulfillment listing policy.<br><br>This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ShippingServiceTypeEnum'>eBay API documentation</a>
    */
    private ?string $shippingServiceType = null;
    
    /**
     * @var Amount|null $surcharge This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $surcharge = null;
    
    /**
     * Instantiates a new ShippingCostOverride and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingCostOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingCostOverride {
        return new ShippingCostOverride();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalShippingCost property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getAdditionalShippingCost(): ?Amount {
        return $this->additionalShippingCost;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalShippingCost' => fn(ParseNode $n) => $o->setAdditionalShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingServiceType' => fn(ParseNode $n) => $o->setShippingServiceType($n->getStringValue()),
            'surcharge' => fn(ParseNode $n) => $o->setSurcharge($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the priority property value. The integer value input into this field, along with the <strong>shippingServiceType</strong> value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Specifically, the <strong>shippingCostOverrides.shippingServiceType</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.optionType</strong> value in a fulfillment listing policy, and the <strong>shippingCostOverrides.priority</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.shippingServices.sortOrderId</strong> value in a fulfillment listing policy.<br><br>This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the shippingCost property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Gets the shippingServiceType property value. This enumerated value indicates whether the shipping service specified in the <strong>priority</strong> field is a domestic or an international shipping service option. To override the shipping costs for a specific domestic shipping service in the fulfillment listing policy, this field should be set to <code>DOMESTIC</code>, and to override the shipping costs for each international shipping service, this field should be set to <code>INTERNATIONAL</code>. This value, along with <strong>priority</strong> value, sets which domestic or international shipping service option in the fulfillment policy that will be modified with updated shipping costs. Specifically, the <strong>shippingCostOverrides.shippingServiceType</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.optionType</strong> value in a fulfillment listing policy, and the <strong>shippingCostOverrides.priority</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.shippingServices.sortOrderId</strong> value in a fulfillment listing policy.<br><br>This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ShippingServiceTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getShippingServiceType(): ?string {
        return $this->shippingServiceType;
    }

    /**
     * Gets the surcharge property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getSurcharge(): ?Amount {
        return $this->surcharge;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('additionalShippingCost', $this->getAdditionalShippingCost());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeStringValue('shippingServiceType', $this->getShippingServiceType());
        $writer->writeObjectValue('surcharge', $this->getSurcharge());
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
     * Sets the additionalShippingCost property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the additionalShippingCost property.
    */
    public function setAdditionalShippingCost(?Amount $value): void {
        $this->additionalShippingCost = $value;
    }

    /**
     * Sets the priority property value. The integer value input into this field, along with the <strong>shippingServiceType</strong> value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Specifically, the <strong>shippingCostOverrides.shippingServiceType</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.optionType</strong> value in a fulfillment listing policy, and the <strong>shippingCostOverrides.priority</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.shippingServices.sortOrderId</strong> value in a fulfillment listing policy.<br><br>This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->priority = $value;
    }

    /**
     * Sets the shippingCost property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

    /**
     * Sets the shippingServiceType property value. This enumerated value indicates whether the shipping service specified in the <strong>priority</strong> field is a domestic or an international shipping service option. To override the shipping costs for a specific domestic shipping service in the fulfillment listing policy, this field should be set to <code>DOMESTIC</code>, and to override the shipping costs for each international shipping service, this field should be set to <code>INTERNATIONAL</code>. This value, along with <strong>priority</strong> value, sets which domestic or international shipping service option in the fulfillment policy that will be modified with updated shipping costs. Specifically, the <strong>shippingCostOverrides.shippingServiceType</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.optionType</strong> value in a fulfillment listing policy, and the <strong>shippingCostOverrides.priority</strong> value in a <strong>createOffer</strong> or <strong>updateOffer</strong> call must match the <strong>shippingOptions.shippingServices.sortOrderId</strong> value in a fulfillment listing policy.<br><br>This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ShippingServiceTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the shippingServiceType property.
    */
    public function setShippingServiceType(?string $value): void {
        $this->shippingServiceType = $value;
    }

    /**
     * Sets the surcharge property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the surcharge property.
    */
    public function setSurcharge(?Amount $value): void {
        $this->surcharge = $value;
    }

}
