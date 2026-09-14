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
 * This type is used to indicate the package type, weight, and dimensions of the shipping package. Package weight and dimensions are required when calculated shipping rates are used, and weight alone is required when flat-rate shipping is used, but with a weight surcharge. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
*/
class PackageWeightAndSize implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Dimension|null $dimensions This container is used to indicate the length, width, and height of the shipping package that will be used to ship the inventory item. The dimensions of a shipping package are needed when calculated shipping is used.<br><br>This container will be returned if package dimensions are set for the inventory item.
    */
    private ?Dimension $dimensions = null;
    
    /**
     * @var PackageTypeEnum|null $packageType This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkcreateorreplaceinventoryitem.packagetypeenum" target="_blank">PackageTypeEnum</a> type.<br><br>This field will be returned if the package type is set for the inventory item.<br><br><span class="tablenote"> <strong>Note:</strong> You can use the <a href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails" target="_blank">GeteBayDetails</a> Trading API call to retrieve a list of supported package types for a specific marketplace.</span>
    */
    private ?PackageTypeEnum $packageType = null;
    
    /**
     * @var bool|null $shippingIrregular A value of <code>true</code> indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fragile handling.
    */
    private ?bool $shippingIrregular = null;
    
    /**
     * @var Weight|null $weight This container is used to specify the weight of the shipping package that will be used to ship the inventory item. The weight of a shipping package are needed when calculated shipping is used, or if flat-rate shipping rates are used, but with a weight surcharge.<br><br>This field will be returned if package weight is set for the inventory item.
    */
    private ?Weight $weight = null;
    
    /**
     * Instantiates a new PackageWeightAndSize and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PackageWeightAndSize
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PackageWeightAndSize {
        return new PackageWeightAndSize();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensions property value. This container is used to indicate the length, width, and height of the shipping package that will be used to ship the inventory item. The dimensions of a shipping package are needed when calculated shipping is used.<br><br>This container will be returned if package dimensions are set for the inventory item.
     * @return Dimension|null
    */
    public function getDimensions(): ?Dimension {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getObjectValue([Dimension::class, 'createFromDiscriminatorValue'])),
            'packageType' => fn(ParseNode $n) => $o->setPackageType($n->getEnumValue(PackageTypeEnum::class)),
            'shippingIrregular' => fn(ParseNode $n) => $o->setShippingIrregular($n->getBooleanValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getObjectValue([Weight::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the packageType property value. This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkcreateorreplaceinventoryitem.packagetypeenum" target="_blank">PackageTypeEnum</a> type.<br><br>This field will be returned if the package type is set for the inventory item.<br><br><span class="tablenote"> <strong>Note:</strong> You can use the <a href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails" target="_blank">GeteBayDetails</a> Trading API call to retrieve a list of supported package types for a specific marketplace.</span>
     * @return PackageTypeEnum|null
    */
    public function getPackageType(): ?PackageTypeEnum {
        return $this->packageType;
    }

    /**
     * Gets the shippingIrregular property value. A value of <code>true</code> indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fragile handling.
     * @return bool|null
    */
    public function getShippingIrregular(): ?bool {
        return $this->shippingIrregular;
    }

    /**
     * Gets the weight property value. This container is used to specify the weight of the shipping package that will be used to ship the inventory item. The weight of a shipping package are needed when calculated shipping is used, or if flat-rate shipping rates are used, but with a weight surcharge.<br><br>This field will be returned if package weight is set for the inventory item.
     * @return Weight|null
    */
    public function getWeight(): ?Weight {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dimensions', $this->getDimensions());
        $writer->writeEnumValue('packageType', $this->getPackageType());
        $writer->writeBooleanValue('shippingIrregular', $this->getShippingIrregular());
        $writer->writeObjectValue('weight', $this->getWeight());
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
     * Sets the dimensions property value. This container is used to indicate the length, width, and height of the shipping package that will be used to ship the inventory item. The dimensions of a shipping package are needed when calculated shipping is used.<br><br>This container will be returned if package dimensions are set for the inventory item.
     * @param Dimension|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?Dimension $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the packageType property value. This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkcreateorreplaceinventoryitem.packagetypeenum" target="_blank">PackageTypeEnum</a> type.<br><br>This field will be returned if the package type is set for the inventory item.<br><br><span class="tablenote"> <strong>Note:</strong> You can use the <a href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails" target="_blank">GeteBayDetails</a> Trading API call to retrieve a list of supported package types for a specific marketplace.</span>
     * @param PackageTypeEnum|null $value Value to set for the packageType property.
    */
    public function setPackageType(?PackageTypeEnum $value): void {
        $this->packageType = $value;
    }

    /**
     * Sets the shippingIrregular property value. A value of <code>true</code> indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fragile handling.
     * @param bool|null $value Value to set for the shippingIrregular property.
    */
    public function setShippingIrregular(?bool $value): void {
        $this->shippingIrregular = $value;
    }

    /**
     * Sets the weight property value. This container is used to specify the weight of the shipping package that will be used to ship the inventory item. The weight of a shipping package are needed when calculated shipping is used, or if flat-rate shipping rates are used, but with a weight surcharge.<br><br>This field will be returned if package weight is set for the inventory item.
     * @param Weight|null $value Value to set for the weight property.
    */
    public function setWeight(?Weight $value): void {
        $this->weight = $value;
    }

}
