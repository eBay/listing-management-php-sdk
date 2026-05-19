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
 * This type is used by the <strong>createOrReplaceProductCompatibility</strong> call to associate compatible vehicles to an inventory item. This type is also the base response of the <strong>getProductCompatibility</strong> call.
*/
class Compatibility implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CompatibleProduct>|null $compatibleProducts This container consists of an array of motor vehicles (make, model, year, trim, engine) that are compatible with the motor vehicle part or accessory specified by the sku value.
    */
    private ?array $compatibleProducts = null;
    
    /**
     * @var string|null $sku The seller-defined SKU value of the inventory item that will be associated with the compatible vehicles.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable to the <strong>createOrReplaceProductCompatibility</strong> method, as the SKU value for the inventory item is passed in as part of the call URI and not in the request payload. It is always returned with the <a href="/api-docs/sell/inventory/resources/inventory_item/product_compatibility/methods/getProductCompatibility" target="_blank ">getProductCompatibility</a> method.</span>
    */
    private ?string $sku = null;
    
    /**
     * Instantiates a new Compatibility and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Compatibility
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Compatibility {
        return new Compatibility();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the compatibleProducts property value. This container consists of an array of motor vehicles (make, model, year, trim, engine) that are compatible with the motor vehicle part or accessory specified by the sku value.
     * @return array<CompatibleProduct>|null
    */
    public function getCompatibleProducts(): ?array {
        return $this->compatibleProducts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compatibleProducts' => fn(ParseNode $n) => $o->setCompatibleProducts($n->getCollectionOfObjectValues([CompatibleProduct::class, 'createFromDiscriminatorValue'])),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
        ];
    }

    /**
     * Gets the sku property value. The seller-defined SKU value of the inventory item that will be associated with the compatible vehicles.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable to the <strong>createOrReplaceProductCompatibility</strong> method, as the SKU value for the inventory item is passed in as part of the call URI and not in the request payload. It is always returned with the <a href="/api-docs/sell/inventory/resources/inventory_item/product_compatibility/methods/getProductCompatibility" target="_blank ">getProductCompatibility</a> method.</span>
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
        $writer->writeCollectionOfObjectValues('compatibleProducts', $this->getCompatibleProducts());
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
     * Sets the compatibleProducts property value. This container consists of an array of motor vehicles (make, model, year, trim, engine) that are compatible with the motor vehicle part or accessory specified by the sku value.
     * @param array<CompatibleProduct>|null $value Value to set for the compatibleProducts property.
    */
    public function setCompatibleProducts(?array $value): void {
        $this->compatibleProducts = $value;
    }

    /**
     * Sets the sku property value. The seller-defined SKU value of the inventory item that will be associated with the compatible vehicles.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable to the <strong>createOrReplaceProductCompatibility</strong> method, as the SKU value for the inventory item is passed in as part of the call URI and not in the request payload. It is always returned with the <a href="/api-docs/sell/inventory/resources/inventory_item/product_compatibility/methods/getProductCompatibility" target="_blank ">getProductCompatibility</a> method.</span>
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

}
