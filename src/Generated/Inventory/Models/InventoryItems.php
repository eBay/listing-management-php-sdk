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
 * This type is used by the base response payload of <strong>getInventoryItems</strong> call. 
*/
class InventoryItems implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href This is the URL to the current page of inventory items.
    */
    private ?string $href = null;
    
    /**
     * @var array<InventoryItemWithSkuLocaleGroupid>|null $inventoryItems This container is an array of one or more inventory items, with detailed information on each inventory item.
    */
    private ?array $inventoryItems = null;
    
    /**
     * @var int|null $limit This integer value is the number of inventory items that will be displayed on each results page.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next This is the URL to the next page of inventory items. This field will only be returned if there are additional inventory items to view.
    */
    private ?string $next = null;
    
    /**
     * @var string|null $prev This is the URL to the previous page of inventory items. This field will only be returned if there are previous inventory items to view.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $size This integer value indicates the total number of pages of results that are available. This number will depend on the total number of inventory items available for viewing, and on the <strong>limit</strong> value.
    */
    private ?int $size = null;
    
    /**
     * @var int|null $total This integer value is the total number of inventory items that exist for the seller's account. Based on this number and on the <strong>limit</strong> value, the seller may have to toggle through multiple pages to view all inventory items.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new InventoryItems and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryItems
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryItems {
        return new InventoryItems();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'inventoryItems' => fn(ParseNode $n) => $o->setInventoryItems($n->getCollectionOfObjectValues([InventoryItemWithSkuLocaleGroupid::class, 'createFromDiscriminatorValue'])),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. This is the URL to the current page of inventory items.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the inventoryItems property value. This container is an array of one or more inventory items, with detailed information on each inventory item.
     * @return array<InventoryItemWithSkuLocaleGroupid>|null
    */
    public function getInventoryItems(): ?array {
        return $this->inventoryItems;
    }

    /**
     * Gets the limit property value. This integer value is the number of inventory items that will be displayed on each results page.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. This is the URL to the next page of inventory items. This field will only be returned if there are additional inventory items to view.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the prev property value. This is the URL to the previous page of inventory items. This field will only be returned if there are previous inventory items to view.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the size property value. This integer value indicates the total number of pages of results that are available. This number will depend on the total number of inventory items available for viewing, and on the <strong>limit</strong> value.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the total property value. This integer value is the total number of inventory items that exist for the seller's account. Based on this number and on the <strong>limit</strong> value, the seller may have to toggle through multiple pages to view all inventory items.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeCollectionOfObjectValues('inventoryItems', $this->getInventoryItems());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. This is the URL to the current page of inventory items.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the inventoryItems property value. This container is an array of one or more inventory items, with detailed information on each inventory item.
     * @param array<InventoryItemWithSkuLocaleGroupid>|null $value Value to set for the inventoryItems property.
    */
    public function setInventoryItems(?array $value): void {
        $this->inventoryItems = $value;
    }

    /**
     * Sets the limit property value. This integer value is the number of inventory items that will be displayed on each results page.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. This is the URL to the next page of inventory items. This field will only be returned if there are additional inventory items to view.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the prev property value. This is the URL to the previous page of inventory items. This field will only be returned if there are previous inventory items to view.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the size property value. This integer value indicates the total number of pages of results that are available. This number will depend on the total number of inventory items available for viewing, and on the <strong>limit</strong> value.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->size = $value;
    }

    /**
     * Sets the total property value. This integer value is the total number of inventory items that exist for the seller's account. Based on this number and on the <strong>limit</strong> value, the seller may have to toggle through multiple pages to view all inventory items.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
