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
 * This type is used to specify the dimensions (and the unit used to measure those dimensions) of a shipping package. The <strong>dimensions</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
*/
class Dimension implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $height The actual height (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. <br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height, the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
    */
    private ?float $height = null;
    
    /**
     * @var float|null $length The actual length (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. <br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height,  the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
    */
    private ?float $length = null;
    
    /**
     * @var string|null $unit The unit of measurement used to specify the dimensions of a shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. If the English system of measurement is being used, the applicable values for dimension units are <code>FEET</code> and <code>INCH</code>. If the metric system of measurement is being used, the applicable values for weight units are <code>METER</code> and <code>CENTIMETER</code>. The metric system is used by most countries outside of the US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LengthUnitOfMeasureEnum'>eBay API documentation</a>
    */
    private ?string $unit = null;
    
    /**
     * @var float|null $width The actual width (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified.<br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height,  the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
    */
    private ?float $width = null;
    
    /**
     * Instantiates a new Dimension and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dimension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dimension {
        return new Dimension();
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
            'height' => fn(ParseNode $n) => $o->setHeight($n->getFloatValue()),
            'length' => fn(ParseNode $n) => $o->setLength($n->getFloatValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getFloatValue()),
        ];
    }

    /**
     * Gets the height property value. The actual height (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. <br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height, the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
     * @return float|null
    */
    public function getHeight(): ?float {
        return $this->height;
    }

    /**
     * Gets the length property value. The actual length (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. <br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height,  the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
     * @return float|null
    */
    public function getLength(): ?float {
        return $this->length;
    }

    /**
     * Gets the unit property value. The unit of measurement used to specify the dimensions of a shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. If the English system of measurement is being used, the applicable values for dimension units are <code>FEET</code> and <code>INCH</code>. If the metric system of measurement is being used, the applicable values for weight units are <code>METER</code> and <code>CENTIMETER</code>. The metric system is used by most countries outside of the US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LengthUnitOfMeasureEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the width property value. The actual width (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified.<br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height,  the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
     * @return float|null
    */
    public function getWidth(): ?float {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('height', $this->getHeight());
        $writer->writeFloatValue('length', $this->getLength());
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeFloatValue('width', $this->getWidth());
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
     * Sets the height property value. The actual height (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. <br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height, the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
     * @param float|null $value Value to set for the height property.
    */
    public function setHeight(?float $value): void {
        $this->height = $value;
    }

    /**
     * Sets the length property value. The actual length (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. <br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height,  the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
     * @param float|null $value Value to set for the length property.
    */
    public function setLength(?float $value): void {
        $this->length = $value;
    }

    /**
     * Sets the unit property value. The unit of measurement used to specify the dimensions of a shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified. If the English system of measurement is being used, the applicable values for dimension units are <code>FEET</code> and <code>INCH</code>. If the metric system of measurement is being used, the applicable values for weight units are <code>METER</code> and <code>CENTIMETER</code>. The metric system is used by most countries outside of the US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LengthUnitOfMeasureEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the width property value. The actual width (in the measurement unit specified in the <strong>unit</strong> field) of the shipping package. All fields of the <strong>dimensions</strong> container are required if package dimensions are specified.<br><br>If a shipping package measured 21.5 inches in length, 15.0 inches in width, and 12.0 inches in height,  the <strong>dimensions</strong> container would look as follows: <br> <pre><code>"dimensions": {<br> "length": 21.5,<br> "width": 15.0,<br> "height": 12.0,<br> "unit": "INCH"<br> } </pre></code>
     * @param float|null $value Value to set for the width property.
    */
    public function setWidth(?float $value): void {
        $this->width = $value;
    }

}
