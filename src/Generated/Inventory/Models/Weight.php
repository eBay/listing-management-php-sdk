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
 * This type is used to specify the weight (and the unit used to measure that weight) of a shipping package. The <strong>weight</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost, or is using flat-rate costs, but charging a weight surcharge. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
*/
class Weight implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $unit The unit of measurement used to specify the weight of a shipping package. Both the <strong>unit</strong> and <strong>value</strong> fields are required if the <strong>weight</strong> container is used. If the English system of measurement is being used, the applicable values for weight units are <code>POUND</code> and <code>OUNCE</CODE>. If the metric system of measurement is being used, the applicable values for weight units are <code>KILOGRAM</code> and <code>GRAM</code>. The metric system is used by most countries outside of the US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:WeightUnitOfMeasureEnum'>eBay API documentation</a>
    */
    private ?string $unit = null;
    
    /**
     * @var float|null $value The actual weight (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. Both the <strong>unit</strong> and <strong>value</strong> fields are required if the <strong>weight</strong> container is used. If a shipping package weighed 20.5 ounces, the container would look as follows: <br><pre>"weight": {<br> "value": 20.5,<br> "unit": "OUNCE"<br> }</pre>
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new Weight and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Weight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Weight {
        return new Weight();
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
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ];
    }

    /**
     * Gets the unit property value. The unit of measurement used to specify the weight of a shipping package. Both the <strong>unit</strong> and <strong>value</strong> fields are required if the <strong>weight</strong> container is used. If the English system of measurement is being used, the applicable values for weight units are <code>POUND</code> and <code>OUNCE</CODE>. If the metric system of measurement is being used, the applicable values for weight units are <code>KILOGRAM</code> and <code>GRAM</code>. The metric system is used by most countries outside of the US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:WeightUnitOfMeasureEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. The actual weight (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. Both the <strong>unit</strong> and <strong>value</strong> fields are required if the <strong>weight</strong> container is used. If a shipping package weighed 20.5 ounces, the container would look as follows: <br><pre>"weight": {<br> "value": 20.5,<br> "unit": "OUNCE"<br> }</pre>
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeFloatValue('value', $this->getValue());
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
     * Sets the unit property value. The unit of measurement used to specify the weight of a shipping package. Both the <strong>unit</strong> and <strong>value</strong> fields are required if the <strong>weight</strong> container is used. If the English system of measurement is being used, the applicable values for weight units are <code>POUND</code> and <code>OUNCE</CODE>. If the metric system of measurement is being used, the applicable values for weight units are <code>KILOGRAM</code> and <code>GRAM</code>. The metric system is used by most countries outside of the US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:WeightUnitOfMeasureEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. The actual weight (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. Both the <strong>unit</strong> and <strong>value</strong> fields are required if the <strong>weight</strong> container is used. If a shipping package weighed 20.5 ounces, the container would look as follows: <br><pre>"weight": {<br> "value": 20.5,<br> "unit": "OUNCE"<br> }</pre>
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->value = $value;
    }

}
