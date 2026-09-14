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
 * This type provides information about the energy efficiency for certain durable goods.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When providing energy efficiency information on an appliance or smartphones and tablets listing, the energy efficiency <b>rating</b> and <b>range</b> of the item must be specified through the the <a href= "/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-bulkcreateorreplaceinventoryitem.product.aspects" target="_blank">aspects</a> field when creating the inventory item record. Use the <a href= "/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve applicable rating and range values for a specified category.</p></div>
*/
class EnergyEfficiencyLabel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $imageDescription A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br><br>For example, <i>On a scale of A to G the rating is E.</i>
    */
    private ?string $imageDescription = null;
    
    /**
     * @var string|null $imageURL The URL to the Energy Efficiency Label image that is applicable to an item.
    */
    private ?string $imageURL = null;
    
    /**
     * @var string|null $productInformationSheet The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item.
    */
    private ?string $productInformationSheet = null;
    
    /**
     * Instantiates a new EnergyEfficiencyLabel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnergyEfficiencyLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnergyEfficiencyLabel {
        return new EnergyEfficiencyLabel();
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
            'imageDescription' => fn(ParseNode $n) => $o->setImageDescription($n->getStringValue()),
            'imageURL' => fn(ParseNode $n) => $o->setImageURL($n->getStringValue()),
            'productInformationSheet' => fn(ParseNode $n) => $o->setProductInformationSheet($n->getStringValue()),
        ];
    }

    /**
     * Gets the imageDescription property value. A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br><br>For example, <i>On a scale of A to G the rating is E.</i>
     * @return string|null
    */
    public function getImageDescription(): ?string {
        return $this->imageDescription;
    }

    /**
     * Gets the imageURL property value. The URL to the Energy Efficiency Label image that is applicable to an item.
     * @return string|null
    */
    public function getImageURL(): ?string {
        return $this->imageURL;
    }

    /**
     * Gets the productInformationSheet property value. The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item.
     * @return string|null
    */
    public function getProductInformationSheet(): ?string {
        return $this->productInformationSheet;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('imageDescription', $this->getImageDescription());
        $writer->writeStringValue('imageURL', $this->getImageURL());
        $writer->writeStringValue('productInformationSheet', $this->getProductInformationSheet());
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
     * Sets the imageDescription property value. A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br><br>For example, <i>On a scale of A to G the rating is E.</i>
     * @param string|null $value Value to set for the imageDescription property.
    */
    public function setImageDescription(?string $value): void {
        $this->imageDescription = $value;
    }

    /**
     * Sets the imageURL property value. The URL to the Energy Efficiency Label image that is applicable to an item.
     * @param string|null $value Value to set for the imageURL property.
    */
    public function setImageURL(?string $value): void {
        $this->imageURL = $value;
    }

    /**
     * Sets the productInformationSheet property value. The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item.
     * @param string|null $value Value to set for the productInformationSheet property.
    */
    public function setProductInformationSheet(?string $value): void {
        $this->productInformationSheet = $value;
    }

}
