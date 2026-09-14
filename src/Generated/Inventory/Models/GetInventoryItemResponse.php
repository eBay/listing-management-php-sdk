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
 * This type is used by the response of the <strong>bulkGetInventoryItem</strong> method to give the status of each inventory item record that the user tried to retrieve.
*/
class GetInventoryItemResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors This container will be returned if there were one or more errors associated with retrieving the inventory item record.
    */
    private ?array $errors = null;
    
    /**
     * @var InventoryItemWithSkuLocaleGroupKeys|null $inventoryItem This container consists of detailed information on the inventory item specified in the <strong>sku</strong> field.
    */
    private ?InventoryItemWithSkuLocaleGroupKeys $inventoryItem = null;
    
    /**
     * @var string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
    */
    private ?string $sku = null;
    
    /**
     * @var int|null $statusCode The HTTP status code returned in this field indicates the success or failure of retrieving the inventory item record for the inventory item specified in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<ErrorDetailV3>|null $warnings This container will be returned if there were one or more warnings associated with retrieving the inventory item record.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new GetInventoryItemResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetInventoryItemResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetInventoryItemResponse {
        return new GetInventoryItemResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. This container will be returned if there were one or more errors associated with retrieving the inventory item record.
     * @return array<ErrorDetailV3>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'inventoryItem' => fn(ParseNode $n) => $o->setInventoryItem($n->getObjectValue([InventoryItemWithSkuLocaleGroupKeys::class, 'createFromDiscriminatorValue'])),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the inventoryItem property value. This container consists of detailed information on the inventory item specified in the <strong>sku</strong> field.
     * @return InventoryItemWithSkuLocaleGroupKeys|null
    */
    public function getInventoryItem(): ?InventoryItemWithSkuLocaleGroupKeys {
        return $this->inventoryItem;
    }

    /**
     * Gets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the statusCode property value. The HTTP status code returned in this field indicates the success or failure of retrieving the inventory item record for the inventory item specified in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. This container will be returned if there were one or more warnings associated with retrieving the inventory item record.
     * @return array<ErrorDetailV3>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeObjectValue('inventoryItem', $this->getInventoryItem());
        $writer->writeStringValue('sku', $this->getSku());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the errors property value. This container will be returned if there were one or more errors associated with retrieving the inventory item record.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the inventoryItem property value. This container consists of detailed information on the inventory item specified in the <strong>sku</strong> field.
     * @param InventoryItemWithSkuLocaleGroupKeys|null $value Value to set for the inventoryItem property.
    */
    public function setInventoryItem(?InventoryItemWithSkuLocaleGroupKeys $value): void {
        $this->inventoryItem = $value;
    }

    /**
     * Sets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the statusCode property value. The HTTP status code returned in this field indicates the success or failure of retrieving the inventory item record for the inventory item specified in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. This container will be returned if there were one or more warnings associated with retrieving the inventory item record.
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
