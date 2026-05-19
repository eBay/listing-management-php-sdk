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
 * The base request type of the <b>addStoreCategory</b> method. It is used to provide the name and location for the new category.
*/
class AddStoreCategoryRequestType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryName The seller-specified name of the custom category.<br><br> <b>Max Length: </b>35
    */
    private ?string $categoryName = null;
    
    /**
     * @var string|null $destinationParentCategoryId This field is used to specify the parent category to which the new category belongs. To specify the new category as a top-level category, set the value of this field to -999, or just omit this field, as the default value is -999.<br>The <a href="/api-docs/sell/stores/resources/store/methods/getStoreCategories"><b>getStoreCategories</b></a> method can be used to retrieve store category IDs.<br><br><b>Default: ROOT</b> category ID<b>(-999)</b> if it's null.
    */
    private ?string $destinationParentCategoryId = null;
    
    /**
     * @var string|null $listingDestinationCategoryId If the store category specified as the <b>destinationParentCategoryId</b> is a leaf category with active listings, those listings are moved to the store category identified through this <b>listingDestinationCategoryId</b>. If this field is omitted, the new store category being added under the parent category inherits those listings.<br>The <a href="/api-docs/sell/stores/resources/store/methods/getStoreCategories"><b>getStoreCategories</b></a> method can be used to retrieve store category IDs.<br><br><b>Default:</b> Newly added category ID if it's null.
    */
    private ?string $listingDestinationCategoryId = null;
    
    /**
     * Instantiates a new AddStoreCategoryRequestType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddStoreCategoryRequestType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddStoreCategoryRequestType {
        return new AddStoreCategoryRequestType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryName property value. The seller-specified name of the custom category.<br><br> <b>Max Length: </b>35
     * @return string|null
    */
    public function getCategoryName(): ?string {
        return $this->categoryName;
    }

    /**
     * Gets the destinationParentCategoryId property value. This field is used to specify the parent category to which the new category belongs. To specify the new category as a top-level category, set the value of this field to -999, or just omit this field, as the default value is -999.<br>The <a href="/api-docs/sell/stores/resources/store/methods/getStoreCategories"><b>getStoreCategories</b></a> method can be used to retrieve store category IDs.<br><br><b>Default: ROOT</b> category ID<b>(-999)</b> if it's null.
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
            'categoryName' => fn(ParseNode $n) => $o->setCategoryName($n->getStringValue()),
            'destinationParentCategoryId' => fn(ParseNode $n) => $o->setDestinationParentCategoryId($n->getStringValue()),
            'listingDestinationCategoryId' => fn(ParseNode $n) => $o->setListingDestinationCategoryId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingDestinationCategoryId property value. If the store category specified as the <b>destinationParentCategoryId</b> is a leaf category with active listings, those listings are moved to the store category identified through this <b>listingDestinationCategoryId</b>. If this field is omitted, the new store category being added under the parent category inherits those listings.<br>The <a href="/api-docs/sell/stores/resources/store/methods/getStoreCategories"><b>getStoreCategories</b></a> method can be used to retrieve store category IDs.<br><br><b>Default:</b> Newly added category ID if it's null.
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
        $writer->writeStringValue('categoryName', $this->getCategoryName());
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
     * Sets the categoryName property value. The seller-specified name of the custom category.<br><br> <b>Max Length: </b>35
     * @param string|null $value Value to set for the categoryName property.
    */
    public function setCategoryName(?string $value): void {
        $this->categoryName = $value;
    }

    /**
     * Sets the destinationParentCategoryId property value. This field is used to specify the parent category to which the new category belongs. To specify the new category as a top-level category, set the value of this field to -999, or just omit this field, as the default value is -999.<br>The <a href="/api-docs/sell/stores/resources/store/methods/getStoreCategories"><b>getStoreCategories</b></a> method can be used to retrieve store category IDs.<br><br><b>Default: ROOT</b> category ID<b>(-999)</b> if it's null.
     * @param string|null $value Value to set for the destinationParentCategoryId property.
    */
    public function setDestinationParentCategoryId(?string $value): void {
        $this->destinationParentCategoryId = $value;
    }

    /**
     * Sets the listingDestinationCategoryId property value. If the store category specified as the <b>destinationParentCategoryId</b> is a leaf category with active listings, those listings are moved to the store category identified through this <b>listingDestinationCategoryId</b>. If this field is omitted, the new store category being added under the parent category inherits those listings.<br>The <a href="/api-docs/sell/stores/resources/store/methods/getStoreCategories"><b>getStoreCategories</b></a> method can be used to retrieve store category IDs.<br><br><b>Default:</b> Newly added category ID if it's null.
     * @param string|null $value Value to set for the listingDestinationCategoryId property.
    */
    public function setListingDestinationCategoryId(?string $value): void {
        $this->listingDestinationCategoryId = $value;
    }

}
