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

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base request type of the <b>moveStoreCategory</b> method. It is used to provide the name of the category to be moved and its new location.
*/
class MoveStoreCategoryRequestType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID. This is the category that is moved.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $destinationParentCategoryId The new parent category of the category to be moved is specified in this field. If the category is being moved to level 1 category, set this value to <b>-999</b>.
    */
    private ?string $destinationParentCategoryId = null;
    
    /**
     * @var string|null $listingDestinationCategoryId This field is only needed if the category to be moved is a leaf category with listings, but a category that becomes a non-leaf category after the move. The listings of the category to be moved are moved to the category specified in this field.
    */
    private ?string $listingDestinationCategoryId = null;
    
    /**
     * Instantiates a new MoveStoreCategoryRequestType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoveStoreCategoryRequestType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoveStoreCategoryRequestType {
        return new MoveStoreCategoryRequestType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID. This is the category that is moved.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the destinationParentCategoryId property value. The new parent category of the category to be moved is specified in this field. If the category is being moved to level 1 category, set this value to <b>-999</b>.
     * @return string|null
    */
    public function getDestinationParentCategoryId(): ?string {
        return $this->destinationParentCategoryId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'destinationParentCategoryId' => fn(ParseNode $n) => $o->setDestinationParentCategoryId($n->getStringValue()),
            'listingDestinationCategoryId' => fn(ParseNode $n) => $o->setListingDestinationCategoryId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingDestinationCategoryId property value. This field is only needed if the category to be moved is a leaf category with listings, but a category that becomes a non-leaf category after the move. The listings of the category to be moved are moved to the category specified in this field.
     * @return string|null
    */
    public function getListingDestinationCategoryId(): ?string {
        return $this->listingDestinationCategoryId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('destinationParentCategoryId', $this->getDestinationParentCategoryId());
        $writer->writeStringValue('listingDestinationCategoryId', $this->getListingDestinationCategoryId());
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
     * Sets the categoryId property value. The unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID. This is the category that is moved.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the destinationParentCategoryId property value. The new parent category of the category to be moved is specified in this field. If the category is being moved to level 1 category, set this value to <b>-999</b>.
     * @param string|null $value Value to set for the destinationParentCategoryId property.
    */
    public function setDestinationParentCategoryId(?string $value): void {
        $this->destinationParentCategoryId = $value;
    }

    /**
     * Sets the listingDestinationCategoryId property value. This field is only needed if the category to be moved is a leaf category with listings, but a category that becomes a non-leaf category after the move. The listings of the category to be moved are moved to the category specified in this field.
     * @param string|null $value Value to set for the listingDestinationCategoryId property.
    */
    public function setListingDestinationCategoryId(?string $value): void {
        $this->listingDestinationCategoryId = $value;
    }

}
