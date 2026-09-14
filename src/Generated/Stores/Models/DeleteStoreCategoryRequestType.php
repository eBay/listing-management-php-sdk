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
 * The base request type of the <b>deleteStoreCategory</b> method. It is used to provide a new category home for the listings that are currently in the store category to be deleted.
*/
class DeleteStoreCategoryRequestType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingDestinationCategoryId When deleting store category, if the deleted category category_id is a leaf category and it has active items, you must specify listingDestinationCategoryId. The system will move the items from category_id to listingDestinationCategoryId. The listingDestinationCategoryId should be a leaf category which has no child categories. Default value: OTHER category ID (1) if it's null.
    */
    private ?string $listingDestinationCategoryId = null;
    
    /**
     * Instantiates a new DeleteStoreCategoryRequestType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeleteStoreCategoryRequestType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeleteStoreCategoryRequestType {
        return new DeleteStoreCategoryRequestType();
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
            'listingDestinationCategoryId' => fn(ParseNode $n) => $o->setListingDestinationCategoryId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingDestinationCategoryId property value. When deleting store category, if the deleted category category_id is a leaf category and it has active items, you must specify listingDestinationCategoryId. The system will move the items from category_id to listingDestinationCategoryId. The listingDestinationCategoryId should be a leaf category which has no child categories. Default value: OTHER category ID (1) if it's null.
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
     * Sets the listingDestinationCategoryId property value. When deleting store category, if the deleted category category_id is a leaf category and it has active items, you must specify listingDestinationCategoryId. The system will move the items from category_id to listingDestinationCategoryId. The listingDestinationCategoryId should be a leaf category which has no child categories. Default value: OTHER category ID (1) if it's null.
     * @param string|null $value Value to set for the listingDestinationCategoryId property.
    */
    public function setListingDestinationCategoryId(?string $value): void {
        $this->listingDestinationCategoryId = $value;
    }

}
