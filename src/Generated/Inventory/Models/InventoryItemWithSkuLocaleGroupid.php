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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type is used to provide details of a single inventory item.
*/
class InventoryItemWithSkuLocaleGroupid implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AvailabilityWithAll|null $availability This container is used to specify the quantity of the inventory item that are available for purchase if the item will be shipped to the buyer, and the quantity of the inventory item that are available for In-Store Pickup at one or more of the merchant's physical stores.
    */
    private ?AvailabilityWithAll $availability = null;
    
    /**
     * @var ConditionEnum|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category.<br><br>Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this field will only be returned if set for the inventory item.
    */
    private ?ConditionEnum $condition = null;
    
    /**
     * @var string|null $conditionDescription This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another.<br><br><strong>Maximum length</strong>: 1000
    */
    private ?string $conditionDescription = null;
    
    /**
     * @var array<ConditionDescriptor>|null $conditionDescriptors This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text.<br><br>For trading card coin listings in applicable categories, sellers must use either <code>LIKE_NEW</code> (2750) or <code>USED_VERY_GOOD</code> (4000) item condition to specify the item as <b>Graded</b> or <b>Ungraded</b>, respectively. Use of either of these conditions requires the seller to use this array to provide one or more applicable Condition Descriptor name-value pairs.<br><br>retrieve all condition descriptor numeric IDs for a category, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the Metadata API.
    */
    private ?array $conditionDescriptors = null;
    
    /**
     * @var array<string>|null $groupIds This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item group(s). This array is not returned if the inventory item is not associated with any inventory item groups.
    */
    private ?array $groupIds = null;
    
    /**
     * @var array<string>|null $inventoryItemGroupKeys This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups.
    */
    private ?array $inventoryItemGroupKeys = null;
    
    /**
     * @var LocaleEnum|null $locale This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE).
    */
    private ?LocaleEnum $locale = null;
    
    /**
     * @var PackageWeightAndSize|null $packageWeightAndSize This container is used to specify the dimensions and weight of a shipping package.
    */
    private ?PackageWeightAndSize $packageWeightAndSize = null;
    
    /**
     * @var Product|null $product This container is used in a <strong>createOrReplaceInventoryItem</strong> call to pass in a Global Trade Item Number (GTIN) or a Brand and Manufacturer Part Number (MPN) pair to identify a product to be matched with a product in the eBay catalog. If a match is found in the eBay product catalog, the inventory item is automatically populated with available product details such as a title, a subtitle, a product description, item specifics, and links to stock images for the product.
    */
    private ?Product $product = null;
    
    /**
     * @var string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
    */
    private ?string $sku = null;
    
    /**
     * Instantiates a new InventoryItemWithSkuLocaleGroupid and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryItemWithSkuLocaleGroupid
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryItemWithSkuLocaleGroupid {
        return new InventoryItemWithSkuLocaleGroupid();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availability property value. This container is used to specify the quantity of the inventory item that are available for purchase if the item will be shipped to the buyer, and the quantity of the inventory item that are available for In-Store Pickup at one or more of the merchant's physical stores.
     * @return AvailabilityWithAll|null
    */
    public function getAvailability(): ?AvailabilityWithAll {
        return $this->availability;
    }

    /**
     * Gets the condition property value. This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category.<br><br>Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this field will only be returned if set for the inventory item.
     * @return ConditionEnum|null
    */
    public function getCondition(): ?ConditionEnum {
        return $this->condition;
    }

    /**
     * Gets the conditionDescription property value. This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another.<br><br><strong>Maximum length</strong>: 1000
     * @return string|null
    */
    public function getConditionDescription(): ?string {
        return $this->conditionDescription;
    }

    /**
     * Gets the conditionDescriptors property value. This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text.<br><br>For trading card coin listings in applicable categories, sellers must use either <code>LIKE_NEW</code> (2750) or <code>USED_VERY_GOOD</code> (4000) item condition to specify the item as <b>Graded</b> or <b>Ungraded</b>, respectively. Use of either of these conditions requires the seller to use this array to provide one or more applicable Condition Descriptor name-value pairs.<br><br>retrieve all condition descriptor numeric IDs for a category, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the Metadata API.
     * @return array<ConditionDescriptor>|null
    */
    public function getConditionDescriptors(): ?array {
        return $this->conditionDescriptors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getObjectValue([AvailabilityWithAll::class, 'createFromDiscriminatorValue'])),
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getEnumValue(ConditionEnum::class)),
            'conditionDescription' => fn(ParseNode $n) => $o->setConditionDescription($n->getStringValue()),
            'conditionDescriptors' => fn(ParseNode $n) => $o->setConditionDescriptors($n->getCollectionOfObjectValues([ConditionDescriptor::class, 'createFromDiscriminatorValue'])),
            'groupIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupIds($val);
            },
            'inventoryItemGroupKeys' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInventoryItemGroupKeys($val);
            },
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getEnumValue(LocaleEnum::class)),
            'packageWeightAndSize' => fn(ParseNode $n) => $o->setPackageWeightAndSize($n->getObjectValue([PackageWeightAndSize::class, 'createFromDiscriminatorValue'])),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getObjectValue([Product::class, 'createFromDiscriminatorValue'])),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
        ];
    }

    /**
     * Gets the groupIds property value. This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item group(s). This array is not returned if the inventory item is not associated with any inventory item groups.
     * @return array<string>|null
    */
    public function getGroupIds(): ?array {
        return $this->groupIds;
    }

    /**
     * Gets the inventoryItemGroupKeys property value. This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups.
     * @return array<string>|null
    */
    public function getInventoryItemGroupKeys(): ?array {
        return $this->inventoryItemGroupKeys;
    }

    /**
     * Gets the locale property value. This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE).
     * @return LocaleEnum|null
    */
    public function getLocale(): ?LocaleEnum {
        return $this->locale;
    }

    /**
     * Gets the packageWeightAndSize property value. This container is used to specify the dimensions and weight of a shipping package.
     * @return PackageWeightAndSize|null
    */
    public function getPackageWeightAndSize(): ?PackageWeightAndSize {
        return $this->packageWeightAndSize;
    }

    /**
     * Gets the product property value. This container is used in a <strong>createOrReplaceInventoryItem</strong> call to pass in a Global Trade Item Number (GTIN) or a Brand and Manufacturer Part Number (MPN) pair to identify a product to be matched with a product in the eBay catalog. If a match is found in the eBay product catalog, the inventory item is automatically populated with available product details such as a title, a subtitle, a product description, item specifics, and links to stock images for the product.
     * @return Product|null
    */
    public function getProduct(): ?Product {
        return $this->product;
    }

    /**
     * Gets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
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
        $writer->writeObjectValue('availability', $this->getAvailability());
        $writer->writeEnumValue('condition', $this->getCondition());
        $writer->writeStringValue('conditionDescription', $this->getConditionDescription());
        $writer->writeCollectionOfObjectValues('conditionDescriptors', $this->getConditionDescriptors());
        $writer->writeCollectionOfPrimitiveValues('groupIds', $this->getGroupIds());
        $writer->writeCollectionOfPrimitiveValues('inventoryItemGroupKeys', $this->getInventoryItemGroupKeys());
        $writer->writeEnumValue('locale', $this->getLocale());
        $writer->writeObjectValue('packageWeightAndSize', $this->getPackageWeightAndSize());
        $writer->writeObjectValue('product', $this->getProduct());
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
     * Sets the availability property value. This container is used to specify the quantity of the inventory item that are available for purchase if the item will be shipped to the buyer, and the quantity of the inventory item that are available for In-Store Pickup at one or more of the merchant's physical stores.
     * @param AvailabilityWithAll|null $value Value to set for the availability property.
    */
    public function setAvailability(?AvailabilityWithAll $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the condition property value. This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category.<br><br>Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this field will only be returned if set for the inventory item.
     * @param ConditionEnum|null $value Value to set for the condition property.
    */
    public function setCondition(?ConditionEnum $value): void {
        $this->condition = $value;
    }

    /**
     * Sets the conditionDescription property value. This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another.<br><br><strong>Maximum length</strong>: 1000
     * @param string|null $value Value to set for the conditionDescription property.
    */
    public function setConditionDescription(?string $value): void {
        $this->conditionDescription = $value;
    }

    /**
     * Sets the conditionDescriptors property value. This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text.<br><br>For trading card coin listings in applicable categories, sellers must use either <code>LIKE_NEW</code> (2750) or <code>USED_VERY_GOOD</code> (4000) item condition to specify the item as <b>Graded</b> or <b>Ungraded</b>, respectively. Use of either of these conditions requires the seller to use this array to provide one or more applicable Condition Descriptor name-value pairs.<br><br>retrieve all condition descriptor numeric IDs for a category, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the Metadata API.
     * @param array<ConditionDescriptor>|null $value Value to set for the conditionDescriptors property.
    */
    public function setConditionDescriptors(?array $value): void {
        $this->conditionDescriptors = $value;
    }

    /**
     * Sets the groupIds property value. This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item group(s). This array is not returned if the inventory item is not associated with any inventory item groups.
     * @param array<string>|null $value Value to set for the groupIds property.
    */
    public function setGroupIds(?array $value): void {
        $this->groupIds = $value;
    }

    /**
     * Sets the inventoryItemGroupKeys property value. This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups.
     * @param array<string>|null $value Value to set for the inventoryItemGroupKeys property.
    */
    public function setInventoryItemGroupKeys(?array $value): void {
        $this->inventoryItemGroupKeys = $value;
    }

    /**
     * Sets the locale property value. This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE).
     * @param LocaleEnum|null $value Value to set for the locale property.
    */
    public function setLocale(?LocaleEnum $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the packageWeightAndSize property value. This container is used to specify the dimensions and weight of a shipping package.
     * @param PackageWeightAndSize|null $value Value to set for the packageWeightAndSize property.
    */
    public function setPackageWeightAndSize(?PackageWeightAndSize $value): void {
        $this->packageWeightAndSize = $value;
    }

    /**
     * Sets the product property value. This container is used in a <strong>createOrReplaceInventoryItem</strong> call to pass in a Global Trade Item Number (GTIN) or a Brand and Manufacturer Part Number (MPN) pair to identify a product to be matched with a product in the eBay catalog. If a match is found in the eBay product catalog, the inventory item is automatically populated with available product details such as a title, a subtitle, a product description, item specifics, and links to stock images for the product.
     * @param Product|null $value Value to set for the product property.
    */
    public function setProduct(?Product $value): void {
        $this->product = $value;
    }

    /**
     * Sets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

}
