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
 * This type is used to specify/indicate the motor vehicles that are compatible with the corresponding inventory item. 
*/
class CompatibleProduct implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<NameValueList>|null $compatibilityProperties This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/value pairs. In the <strong>name</strong> field, the vehicle aspect (such as 'make', 'model', 'year', 'trim', or 'engine') will be identified, and the <strong>value</strong> field will be used to identify the value of each aspect.<br><br>The <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilityproperties" target="_blank">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category, and the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilitypropertyvalues" target="_blank">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for these same vehicle aspect names.<br><br>Below is an example of identifying one motor vehicle using the <strong>compatibilityProperties</strong> container:<br><br><pre>&quot;compatibilityProperties&quot; : &#91;<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;make&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Subaru&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;model&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;GL&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;year&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1983&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;trim&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Base Wagon 4-Door&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;engine&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1.8L Turbocharged&quot;<br>&nbsp;&nbsp;&#125;<br>&#93;</pre><br><br>Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br><span class="tablenote"> <strong>Note:</strong> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</span>
    */
    private ?array $compatibilityProperties = null;
    
    /**
     * @var string|null $notes This field is used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable information.<br><br>This field will only be returned if specified by the seller.<br><br><strong>Maximum length</strong>: 500<br>
    */
    private ?string $notes = null;
    
    /**
     * @var ProductFamilyProperties|null $productFamilyProperties <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</p></div>
    */
    private ?ProductFamilyProperties $productFamilyProperties = null;
    
    /**
     * @var ProductIdentifier|null $productIdentifier This container is used in a <strong>createOrReplaceProductCompatibility</strong> call to identify a motor vehicle that is compatible with the inventory item. The user specifies either an eBay Product ID (ePID) or K-Type value to identify a vehicle, and if the motor vehicle is found in the eBay product catalog, the motor vehicle properties (make, model, year, trim, engine) will automatically be populated for the vehicle. If the vehicle cannot be found using these identifiers, the vehicle will not be added to the compatible vehicle list. <br><br>Note that this container will not be returned in the <strong>getProductCompatibility</strong> call.
    */
    private ?ProductIdentifier $productIdentifier = null;
    
    /**
     * Instantiates a new CompatibleProduct and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompatibleProduct
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompatibleProduct {
        return new CompatibleProduct();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the compatibilityProperties property value. This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/value pairs. In the <strong>name</strong> field, the vehicle aspect (such as 'make', 'model', 'year', 'trim', or 'engine') will be identified, and the <strong>value</strong> field will be used to identify the value of each aspect.<br><br>The <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilityproperties" target="_blank">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category, and the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilitypropertyvalues" target="_blank">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for these same vehicle aspect names.<br><br>Below is an example of identifying one motor vehicle using the <strong>compatibilityProperties</strong> container:<br><br><pre>&quot;compatibilityProperties&quot; : &#91;<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;make&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Subaru&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;model&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;GL&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;year&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1983&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;trim&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Base Wagon 4-Door&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;engine&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1.8L Turbocharged&quot;<br>&nbsp;&nbsp;&#125;<br>&#93;</pre><br><br>Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br><span class="tablenote"> <strong>Note:</strong> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</span>
     * @return array<NameValueList>|null
    */
    public function getCompatibilityProperties(): ?array {
        return $this->compatibilityProperties;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compatibilityProperties' => fn(ParseNode $n) => $o->setCompatibilityProperties($n->getCollectionOfObjectValues([NameValueList::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'productFamilyProperties' => fn(ParseNode $n) => $o->setProductFamilyProperties($n->getObjectValue([ProductFamilyProperties::class, 'createFromDiscriminatorValue'])),
            'productIdentifier' => fn(ParseNode $n) => $o->setProductIdentifier($n->getObjectValue([ProductIdentifier::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the notes property value. This field is used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable information.<br><br>This field will only be returned if specified by the seller.<br><br><strong>Maximum length</strong>: 500<br>
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the productFamilyProperties property value. <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</p></div>
     * @return ProductFamilyProperties|null
    */
    public function getProductFamilyProperties(): ?ProductFamilyProperties {
        return $this->productFamilyProperties;
    }

    /**
     * Gets the productIdentifier property value. This container is used in a <strong>createOrReplaceProductCompatibility</strong> call to identify a motor vehicle that is compatible with the inventory item. The user specifies either an eBay Product ID (ePID) or K-Type value to identify a vehicle, and if the motor vehicle is found in the eBay product catalog, the motor vehicle properties (make, model, year, trim, engine) will automatically be populated for the vehicle. If the vehicle cannot be found using these identifiers, the vehicle will not be added to the compatible vehicle list. <br><br>Note that this container will not be returned in the <strong>getProductCompatibility</strong> call.
     * @return ProductIdentifier|null
    */
    public function getProductIdentifier(): ?ProductIdentifier {
        return $this->productIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('compatibilityProperties', $this->getCompatibilityProperties());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeObjectValue('productFamilyProperties', $this->getProductFamilyProperties());
        $writer->writeObjectValue('productIdentifier', $this->getProductIdentifier());
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
     * Sets the compatibilityProperties property value. This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/value pairs. In the <strong>name</strong> field, the vehicle aspect (such as 'make', 'model', 'year', 'trim', or 'engine') will be identified, and the <strong>value</strong> field will be used to identify the value of each aspect.<br><br>The <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilityproperties" target="_blank">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category, and the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilitypropertyvalues" target="_blank">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for these same vehicle aspect names.<br><br>Below is an example of identifying one motor vehicle using the <strong>compatibilityProperties</strong> container:<br><br><pre>&quot;compatibilityProperties&quot; : &#91;<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;make&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Subaru&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;model&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;GL&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;year&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1983&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;trim&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Base Wagon 4-Door&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;engine&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1.8L Turbocharged&quot;<br>&nbsp;&nbsp;&#125;<br>&#93;</pre><br><br>Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br><span class="tablenote"> <strong>Note:</strong> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</span>
     * @param array<NameValueList>|null $value Value to set for the compatibilityProperties property.
    */
    public function setCompatibilityProperties(?array $value): void {
        $this->compatibilityProperties = $value;
    }

    /**
     * Sets the notes property value. This field is used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable information.<br><br>This field will only be returned if specified by the seller.<br><br><strong>Maximum length</strong>: 500<br>
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the productFamilyProperties property value. <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</p></div>
     * @param ProductFamilyProperties|null $value Value to set for the productFamilyProperties property.
    */
    public function setProductFamilyProperties(?ProductFamilyProperties $value): void {
        $this->productFamilyProperties = $value;
    }

    /**
     * Sets the productIdentifier property value. This container is used in a <strong>createOrReplaceProductCompatibility</strong> call to identify a motor vehicle that is compatible with the inventory item. The user specifies either an eBay Product ID (ePID) or K-Type value to identify a vehicle, and if the motor vehicle is found in the eBay product catalog, the motor vehicle properties (make, model, year, trim, engine) will automatically be populated for the vehicle. If the vehicle cannot be found using these identifiers, the vehicle will not be added to the compatible vehicle list. <br><br>Note that this container will not be returned in the <strong>getProductCompatibility</strong> call.
     * @param ProductIdentifier|null $value Value to set for the productIdentifier property.
    */
    public function setProductIdentifier(?ProductIdentifier $value): void {
        $this->productIdentifier = $value;
    }

}
