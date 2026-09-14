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
 * This type is used to provide detailed information about an inventory item.
*/
class InventoryItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Availability|null $availability This container is used to specify the quantity of the inventory item that are available for purchase. <br><br> This container is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required. Availability data must also be passed if an inventory item is being updated and availability data already exists for that inventory item.<br><br> Since an inventory item must have specified quantity before being published in an offer, this container is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this container will only be returned if set for the inventory item.
    */
    private ?Availability $availability = null;
    
    /**
     * @var ConditionEnum|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the <strong>Metadata API</strong>. This method returns condition ID values that map to the enumeration values defined in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems.conditionenum" target="_blank">ConditionEnum</a> type. The <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a> topic in the <strong>Selling Integration Guide</strong> has a table that maps condition ID values to <strong>ConditionEnum</strong> values. The <strong>getItemConditionPolicies</strong> call reference page has more information.<br><br>A <strong>condition</strong> value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required for most eBay categories.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
    */
    private ?ConditionEnum $condition = null;
    
    /**
     * @var string|null $conditionDescription This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose <strong>condition</strong> value is not <code>NEW</code>, <code>LIKE_NEW</code>, <code>NEW_OTHER</code>, or <code>NEW_WITH_DEFECTS</code>.<br><br>The <strong>conditionDescription</strong> field is available for all eBay categories. If the <strong>conditionDescription</strong> field is used with an item in one of the new conditions (mentioned in previous paragraph), eBay will simply ignore this field if included, and eBay will return a warning message to the user. <br><br>This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the used item. Make sure that the <strong>condition</strong> value, condition description, listing description, and the item's pictures do not contradict one another. <br><br>This field is not always required, but is required if an inventory item is being updated and a condition description already exists for that inventory item. <br><br>This field is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if a condition description was provided for a used inventory item.<br><br><strong>Maximum length</strong>: 1000.
    */
    private ?string $conditionDescription = null;
    
    /**
     * @var array<ConditionDescriptor>|null $conditionDescriptors This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br><br>For trading card and coin listings in applicable categories, categories, sellers must use either <code>LIKE_NEW</code> (2750) or <code>USED_VERY_GOOD</code> (4000) item condition to specify the item as <b>Graded</b> or <b>Ungraded</b>, respectively. Use of either of these conditions requires the seller to use this array to provide one or more applicable Condition Descriptor name-value pairs.<br><br>To retrieve all condition descriptor numeric IDs for a category, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the Metadata API.
    */
    private ?array $conditionDescriptors = null;
    
    /**
     * @var PackageWeightAndSize|null $packageWeightAndSize This container is used if the seller is offering one or more calculated shipping options for the inventory item, or if the seller is offering flat-rate shipping but is including a shipping surcharge based on the item's weight. This container is used to specify the dimensions and weight of a shipping package.<br><br><span class="tablenote"><b>Note:</b> Package weight and dimensions are only supported for the following marketplaces: AU, CA, DE, IT, UK, US, and Motors. If this information is provided on other marketplaces, it will be ignored.</span><br>This container is not always required, but is required if an inventory item is being updated and shipping package data already exists for that inventory item.<br><br>This container is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if package type, package weight, and/or package dimensions are specified for an inventory item.<br><br>See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
    */
    private ?PackageWeightAndSize $packageWeightAndSize = null;
    
    /**
     * @var Product|null $product This container is used to define the product details, such as product title, product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN pair), product aspects/item specifics, and product images. Note that an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) value can be used in an attempt to find a matching product in the eBay Catalog. If a product match is found, the inventory item record will automatically pick up all product details associated with the eBay Catalog product.<br><br>Many eBay categories will require at least one product identifier (a GTIN or a Brand/MPN pair). To discover which product identifier(s) that an eBay category might require or support, use the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method in the Taxonomy API. In the <strong>getItemAspectsForCategory</strong> response, look for product identifier names (<code>brand</code>, <code>mpn</code>, <code>upc</code>, <code>ean</code>, <code>isbn</code>) in the <strong>localizedAspectName</strong> fields, and then look for the corresponding <strong>aspectRequired</strong> boolean fields as well as the corresponding <strong>aspectUsage</strong> field, which will indicate if the aspect is required, recommended, or optional. In some cases, a product identifier type may be required, but not known/applicable for a product. If this is the case, the seller must still include the corresponding field in the inventory item record, but pass in a default text string. This text string can vary by site, so the seller should use the <strong>GeteBayDetails</strong> call of the Trading API to get this string value. In the <strong>GeteBayDetails</strong> call, the seller should include a <strong>DetailName</strong> field with its value set to <code>ProductDetails</code>. In the response of the call, the seller can see the default string value in the <strong>ProductDetails.ProductIdentifierUnavailableText</strong> field. The seller will use this value in one or more of the product identifier fields (<strong>ean</strong>, <strong>isbn</strong>, <strong>upc</strong>, or <strong>mpn</strong>) if a product ID isn't known or applicable. <br><br>This container is not initially required, but it is required before an inventory item can be published as an offer, and/or if an inventory item is being updated and product data already exists for that inventory item. <br><br>This container is always returned for published offers in the <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and <strong>getInventoryItems</strong> calls since product data must be defined for published offers, but for unpublished inventory items, this container will only be returned if product details have been defined for the inventory item. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This container and a few of its child fields (as noted below) are required before an offer can be published to create an active listing. </p></span></div>
    */
    private ?Product $product = null;
    
    /**
     * Instantiates a new InventoryItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryItem {
        return new InventoryItem();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availability property value. This container is used to specify the quantity of the inventory item that are available for purchase. <br><br> This container is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required. Availability data must also be passed if an inventory item is being updated and availability data already exists for that inventory item.<br><br> Since an inventory item must have specified quantity before being published in an offer, this container is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this container will only be returned if set for the inventory item.
     * @return Availability|null
    */
    public function getAvailability(): ?Availability {
        return $this->availability;
    }

    /**
     * Gets the condition property value. This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the <strong>Metadata API</strong>. This method returns condition ID values that map to the enumeration values defined in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems.conditionenum" target="_blank">ConditionEnum</a> type. The <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a> topic in the <strong>Selling Integration Guide</strong> has a table that maps condition ID values to <strong>ConditionEnum</strong> values. The <strong>getItemConditionPolicies</strong> call reference page has more information.<br><br>A <strong>condition</strong> value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required for most eBay categories.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @return ConditionEnum|null
    */
    public function getCondition(): ?ConditionEnum {
        return $this->condition;
    }

    /**
     * Gets the conditionDescription property value. This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose <strong>condition</strong> value is not <code>NEW</code>, <code>LIKE_NEW</code>, <code>NEW_OTHER</code>, or <code>NEW_WITH_DEFECTS</code>.<br><br>The <strong>conditionDescription</strong> field is available for all eBay categories. If the <strong>conditionDescription</strong> field is used with an item in one of the new conditions (mentioned in previous paragraph), eBay will simply ignore this field if included, and eBay will return a warning message to the user. <br><br>This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the used item. Make sure that the <strong>condition</strong> value, condition description, listing description, and the item's pictures do not contradict one another. <br><br>This field is not always required, but is required if an inventory item is being updated and a condition description already exists for that inventory item. <br><br>This field is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if a condition description was provided for a used inventory item.<br><br><strong>Maximum length</strong>: 1000.
     * @return string|null
    */
    public function getConditionDescription(): ?string {
        return $this->conditionDescription;
    }

    /**
     * Gets the conditionDescriptors property value. This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br><br>For trading card and coin listings in applicable categories, categories, sellers must use either <code>LIKE_NEW</code> (2750) or <code>USED_VERY_GOOD</code> (4000) item condition to specify the item as <b>Graded</b> or <b>Ungraded</b>, respectively. Use of either of these conditions requires the seller to use this array to provide one or more applicable Condition Descriptor name-value pairs.<br><br>To retrieve all condition descriptor numeric IDs for a category, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the Metadata API.
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
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getObjectValue([Availability::class, 'createFromDiscriminatorValue'])),
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getEnumValue(ConditionEnum::class)),
            'conditionDescription' => fn(ParseNode $n) => $o->setConditionDescription($n->getStringValue()),
            'conditionDescriptors' => fn(ParseNode $n) => $o->setConditionDescriptors($n->getCollectionOfObjectValues([ConditionDescriptor::class, 'createFromDiscriminatorValue'])),
            'packageWeightAndSize' => fn(ParseNode $n) => $o->setPackageWeightAndSize($n->getObjectValue([PackageWeightAndSize::class, 'createFromDiscriminatorValue'])),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getObjectValue([Product::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the packageWeightAndSize property value. This container is used if the seller is offering one or more calculated shipping options for the inventory item, or if the seller is offering flat-rate shipping but is including a shipping surcharge based on the item's weight. This container is used to specify the dimensions and weight of a shipping package.<br><br><span class="tablenote"><b>Note:</b> Package weight and dimensions are only supported for the following marketplaces: AU, CA, DE, IT, UK, US, and Motors. If this information is provided on other marketplaces, it will be ignored.</span><br>This container is not always required, but is required if an inventory item is being updated and shipping package data already exists for that inventory item.<br><br>This container is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if package type, package weight, and/or package dimensions are specified for an inventory item.<br><br>See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
     * @return PackageWeightAndSize|null
    */
    public function getPackageWeightAndSize(): ?PackageWeightAndSize {
        return $this->packageWeightAndSize;
    }

    /**
     * Gets the product property value. This container is used to define the product details, such as product title, product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN pair), product aspects/item specifics, and product images. Note that an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) value can be used in an attempt to find a matching product in the eBay Catalog. If a product match is found, the inventory item record will automatically pick up all product details associated with the eBay Catalog product.<br><br>Many eBay categories will require at least one product identifier (a GTIN or a Brand/MPN pair). To discover which product identifier(s) that an eBay category might require or support, use the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method in the Taxonomy API. In the <strong>getItemAspectsForCategory</strong> response, look for product identifier names (<code>brand</code>, <code>mpn</code>, <code>upc</code>, <code>ean</code>, <code>isbn</code>) in the <strong>localizedAspectName</strong> fields, and then look for the corresponding <strong>aspectRequired</strong> boolean fields as well as the corresponding <strong>aspectUsage</strong> field, which will indicate if the aspect is required, recommended, or optional. In some cases, a product identifier type may be required, but not known/applicable for a product. If this is the case, the seller must still include the corresponding field in the inventory item record, but pass in a default text string. This text string can vary by site, so the seller should use the <strong>GeteBayDetails</strong> call of the Trading API to get this string value. In the <strong>GeteBayDetails</strong> call, the seller should include a <strong>DetailName</strong> field with its value set to <code>ProductDetails</code>. In the response of the call, the seller can see the default string value in the <strong>ProductDetails.ProductIdentifierUnavailableText</strong> field. The seller will use this value in one or more of the product identifier fields (<strong>ean</strong>, <strong>isbn</strong>, <strong>upc</strong>, or <strong>mpn</strong>) if a product ID isn't known or applicable. <br><br>This container is not initially required, but it is required before an inventory item can be published as an offer, and/or if an inventory item is being updated and product data already exists for that inventory item. <br><br>This container is always returned for published offers in the <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and <strong>getInventoryItems</strong> calls since product data must be defined for published offers, but for unpublished inventory items, this container will only be returned if product details have been defined for the inventory item. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This container and a few of its child fields (as noted below) are required before an offer can be published to create an active listing. </p></span></div>
     * @return Product|null
    */
    public function getProduct(): ?Product {
        return $this->product;
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
        $writer->writeObjectValue('packageWeightAndSize', $this->getPackageWeightAndSize());
        $writer->writeObjectValue('product', $this->getProduct());
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
     * Sets the availability property value. This container is used to specify the quantity of the inventory item that are available for purchase. <br><br> This container is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required. Availability data must also be passed if an inventory item is being updated and availability data already exists for that inventory item.<br><br> Since an inventory item must have specified quantity before being published in an offer, this container is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this container will only be returned if set for the inventory item.
     * @param Availability|null $value Value to set for the availability property.
    */
    public function setAvailability(?Availability $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the condition property value. This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the <strong>Metadata API</strong>. This method returns condition ID values that map to the enumeration values defined in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems.conditionenum" target="_blank">ConditionEnum</a> type. The <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a> topic in the <strong>Selling Integration Guide</strong> has a table that maps condition ID values to <strong>ConditionEnum</strong> values. The <strong>getItemConditionPolicies</strong> call reference page has more information.<br><br>A <strong>condition</strong> value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required for most eBay categories.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @param ConditionEnum|null $value Value to set for the condition property.
    */
    public function setCondition(?ConditionEnum $value): void {
        $this->condition = $value;
    }

    /**
     * Sets the conditionDescription property value. This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose <strong>condition</strong> value is not <code>NEW</code>, <code>LIKE_NEW</code>, <code>NEW_OTHER</code>, or <code>NEW_WITH_DEFECTS</code>.<br><br>The <strong>conditionDescription</strong> field is available for all eBay categories. If the <strong>conditionDescription</strong> field is used with an item in one of the new conditions (mentioned in previous paragraph), eBay will simply ignore this field if included, and eBay will return a warning message to the user. <br><br>This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the used item. Make sure that the <strong>condition</strong> value, condition description, listing description, and the item's pictures do not contradict one another. <br><br>This field is not always required, but is required if an inventory item is being updated and a condition description already exists for that inventory item. <br><br>This field is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if a condition description was provided for a used inventory item.<br><br><strong>Maximum length</strong>: 1000.
     * @param string|null $value Value to set for the conditionDescription property.
    */
    public function setConditionDescription(?string $value): void {
        $this->conditionDescription = $value;
    }

    /**
     * Sets the conditionDescriptors property value. This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br><br>For trading card and coin listings in applicable categories, categories, sellers must use either <code>LIKE_NEW</code> (2750) or <code>USED_VERY_GOOD</code> (4000) item condition to specify the item as <b>Graded</b> or <b>Ungraded</b>, respectively. Use of either of these conditions requires the seller to use this array to provide one or more applicable Condition Descriptor name-value pairs.<br><br>To retrieve all condition descriptor numeric IDs for a category, use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getitemconditionpolicies" target="_blank">getItemConditionPolicies</a> method of the Metadata API.
     * @param array<ConditionDescriptor>|null $value Value to set for the conditionDescriptors property.
    */
    public function setConditionDescriptors(?array $value): void {
        $this->conditionDescriptors = $value;
    }

    /**
     * Sets the packageWeightAndSize property value. This container is used if the seller is offering one or more calculated shipping options for the inventory item, or if the seller is offering flat-rate shipping but is including a shipping surcharge based on the item's weight. This container is used to specify the dimensions and weight of a shipping package.<br><br><span class="tablenote"><b>Note:</b> Package weight and dimensions are only supported for the following marketplaces: AU, CA, DE, IT, UK, US, and Motors. If this information is provided on other marketplaces, it will be ignored.</span><br>This container is not always required, but is required if an inventory item is being updated and shipping package data already exists for that inventory item.<br><br>This container is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if package type, package weight, and/or package dimensions are specified for an inventory item.<br><br>See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
     * @param PackageWeightAndSize|null $value Value to set for the packageWeightAndSize property.
    */
    public function setPackageWeightAndSize(?PackageWeightAndSize $value): void {
        $this->packageWeightAndSize = $value;
    }

    /**
     * Sets the product property value. This container is used to define the product details, such as product title, product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN pair), product aspects/item specifics, and product images. Note that an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) value can be used in an attempt to find a matching product in the eBay Catalog. If a product match is found, the inventory item record will automatically pick up all product details associated with the eBay Catalog product.<br><br>Many eBay categories will require at least one product identifier (a GTIN or a Brand/MPN pair). To discover which product identifier(s) that an eBay category might require or support, use the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method in the Taxonomy API. In the <strong>getItemAspectsForCategory</strong> response, look for product identifier names (<code>brand</code>, <code>mpn</code>, <code>upc</code>, <code>ean</code>, <code>isbn</code>) in the <strong>localizedAspectName</strong> fields, and then look for the corresponding <strong>aspectRequired</strong> boolean fields as well as the corresponding <strong>aspectUsage</strong> field, which will indicate if the aspect is required, recommended, or optional. In some cases, a product identifier type may be required, but not known/applicable for a product. If this is the case, the seller must still include the corresponding field in the inventory item record, but pass in a default text string. This text string can vary by site, so the seller should use the <strong>GeteBayDetails</strong> call of the Trading API to get this string value. In the <strong>GeteBayDetails</strong> call, the seller should include a <strong>DetailName</strong> field with its value set to <code>ProductDetails</code>. In the response of the call, the seller can see the default string value in the <strong>ProductDetails.ProductIdentifierUnavailableText</strong> field. The seller will use this value in one or more of the product identifier fields (<strong>ean</strong>, <strong>isbn</strong>, <strong>upc</strong>, or <strong>mpn</strong>) if a product ID isn't known or applicable. <br><br>This container is not initially required, but it is required before an inventory item can be published as an offer, and/or if an inventory item is being updated and product data already exists for that inventory item. <br><br>This container is always returned for published offers in the <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and <strong>getInventoryItems</strong> calls since product data must be defined for published offers, but for unpublished inventory items, this container will only be returned if product details have been defined for the inventory item. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This container and a few of its child fields (as noted below) are required before an offer can be published to create an active listing. </p></span></div>
     * @param Product|null $value Value to set for the product property.
    */
    public function setProduct(?Product $value): void {
        $this->product = $value;
    }

}
