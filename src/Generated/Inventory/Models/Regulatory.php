<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Type defining regulatory information that the seller is required to disclose.
*/
class Regulatory implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Document>|null $documents This container provides a collection of regulatory documents associated with the listing.<br><br>For information on removing one or more files from a listing using the <a href= "/api-docs/sell/inventory/resources/offer/methods/updateOffer" target="_blank">updateOffer</a>  method, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a> .<br><br><span class="tablenote"><b>Note:</b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland  are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation " target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
    */
    private ?array $documents = null;
    
    /**
     * @var EnergyEfficiencyLabel|null $energyEfficiencyLabel This type provides information about the energy efficiency for certain durable goods.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When providing energy efficiency information on an appliance or smartphones and tablets listing, the energy efficiency <b>rating</b> and <b>range</b> of the item must be specified through the the <a href= "/api-docs/sell/inventory/resources/inventory_item/methods/bulkCreateOrReplaceInventoryItem#request.requests.product.aspects" target="_blank">aspects</a> field when creating the inventory item record. Use the <a href= "/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve applicable rating and range values for a specified category.</p></div>
    */
    private ?EnergyEfficiencyLabel $energyEfficiencyLabel = null;
    
    /**
     * @var Hazmat|null $hazmat This container is used by the seller to provide hazardous material information for the listing.<br><br>The <b>statements</b> element is required to complete the hazmat section of a listing.<br><br>The following elements are optional:<ul><li><b>pictograms</b></li><li><b>signalWord</b></li><li><b>component</b></li></ul>
    */
    private ?Hazmat $hazmat = null;
    
    /**
     * @var Manufacturer|null $manufacturer This type provides name and contact information about the manufacturer of the item.
    */
    private ?Manufacturer $manufacturer = null;
    
    /**
     * @var ProductSafety|null $productSafety This type is used to define the <b>pictograms</b> and <b>statement</b> containers, and the optional <b>component</b> field, that provide product safety and compliance related information.
    */
    private ?ProductSafety $productSafety = null;
    
    /**
     * @var float|null $repairScore This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (i.e., how easy is it to repair the product.) This field is a floating point value between 0.0 (i.e., difficult to repair,) and 10.0 (i.e., easily repaired.)<br><br><span class="tablenote"><b>Note:</b> <code>0</code> should not be used as a default value, as it implies the product is not repairable.</span><br>The format for <b>repairScore</b> is limited to one decimal place. For example:<ul><li><code>7.9</code> and <code>0.0</code> are both valid scores</li><li><code>5.645</code> and <code>2.10</code> are both invalid scores</li></ul><br><span class="tablenote"><b>Note:</b> Repair score is not applicable to all categories. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies" target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the <b>Metadata API</b> to see where repair score is applicable.</span>
    */
    private ?float $repairScore = null;
    
    /**
     * @var array<ResponsiblePerson>|null $responsiblePersons This container provides information about the EU-based Responsible Persons or entities associated with the listing.<br><br>A maximum of 5 EU Responsible Persons are supported.<br><br><span class="tablenote"><b>Note:</b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland  are conditionally required to provide regulatory Responsible Persons information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation " target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
    */
    private ?array $responsiblePersons = null;
    
    /**
     * Instantiates a new Regulatory and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Regulatory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Regulatory {
        return new Regulatory();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the documents property value. This container provides a collection of regulatory documents associated with the listing.<br><br>For information on removing one or more files from a listing using the <a href= "/api-docs/sell/inventory/resources/offer/methods/updateOffer" target="_blank">updateOffer</a>  method, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a> .<br><br><span class="tablenote"><b>Note:</b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland  are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation " target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     * @return array<Document>|null
    */
    public function getDocuments(): ?array {
        return $this->documents;
    }

    /**
     * Gets the energyEfficiencyLabel property value. This type provides information about the energy efficiency for certain durable goods.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When providing energy efficiency information on an appliance or smartphones and tablets listing, the energy efficiency <b>rating</b> and <b>range</b> of the item must be specified through the the <a href= "/api-docs/sell/inventory/resources/inventory_item/methods/bulkCreateOrReplaceInventoryItem#request.requests.product.aspects" target="_blank">aspects</a> field when creating the inventory item record. Use the <a href= "/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve applicable rating and range values for a specified category.</p></div>
     * @return EnergyEfficiencyLabel|null
    */
    public function getEnergyEfficiencyLabel(): ?EnergyEfficiencyLabel {
        return $this->energyEfficiencyLabel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documents' => fn(ParseNode $n) => $o->setDocuments($n->getCollectionOfObjectValues([Document::class, 'createFromDiscriminatorValue'])),
            'energyEfficiencyLabel' => fn(ParseNode $n) => $o->setEnergyEfficiencyLabel($n->getObjectValue([EnergyEfficiencyLabel::class, 'createFromDiscriminatorValue'])),
            'hazmat' => fn(ParseNode $n) => $o->setHazmat($n->getObjectValue([Hazmat::class, 'createFromDiscriminatorValue'])),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getObjectValue([Manufacturer::class, 'createFromDiscriminatorValue'])),
            'productSafety' => fn(ParseNode $n) => $o->setProductSafety($n->getObjectValue([ProductSafety::class, 'createFromDiscriminatorValue'])),
            'repairScore' => fn(ParseNode $n) => $o->setRepairScore($n->getFloatValue()),
            'responsiblePersons' => fn(ParseNode $n) => $o->setResponsiblePersons($n->getCollectionOfObjectValues([ResponsiblePerson::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the hazmat property value. This container is used by the seller to provide hazardous material information for the listing.<br><br>The <b>statements</b> element is required to complete the hazmat section of a listing.<br><br>The following elements are optional:<ul><li><b>pictograms</b></li><li><b>signalWord</b></li><li><b>component</b></li></ul>
     * @return Hazmat|null
    */
    public function getHazmat(): ?Hazmat {
        return $this->hazmat;
    }

    /**
     * Gets the manufacturer property value. This type provides name and contact information about the manufacturer of the item.
     * @return Manufacturer|null
    */
    public function getManufacturer(): ?Manufacturer {
        return $this->manufacturer;
    }

    /**
     * Gets the productSafety property value. This type is used to define the <b>pictograms</b> and <b>statement</b> containers, and the optional <b>component</b> field, that provide product safety and compliance related information.
     * @return ProductSafety|null
    */
    public function getProductSafety(): ?ProductSafety {
        return $this->productSafety;
    }

    /**
     * Gets the repairScore property value. This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (i.e., how easy is it to repair the product.) This field is a floating point value between 0.0 (i.e., difficult to repair,) and 10.0 (i.e., easily repaired.)<br><br><span class="tablenote"><b>Note:</b> <code>0</code> should not be used as a default value, as it implies the product is not repairable.</span><br>The format for <b>repairScore</b> is limited to one decimal place. For example:<ul><li><code>7.9</code> and <code>0.0</code> are both valid scores</li><li><code>5.645</code> and <code>2.10</code> are both invalid scores</li></ul><br><span class="tablenote"><b>Note:</b> Repair score is not applicable to all categories. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies" target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the <b>Metadata API</b> to see where repair score is applicable.</span>
     * @return float|null
    */
    public function getRepairScore(): ?float {
        return $this->repairScore;
    }

    /**
     * Gets the responsiblePersons property value. This container provides information about the EU-based Responsible Persons or entities associated with the listing.<br><br>A maximum of 5 EU Responsible Persons are supported.<br><br><span class="tablenote"><b>Note:</b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland  are conditionally required to provide regulatory Responsible Persons information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation " target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     * @return array<ResponsiblePerson>|null
    */
    public function getResponsiblePersons(): ?array {
        return $this->responsiblePersons;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('documents', $this->getDocuments());
        $writer->writeObjectValue('energyEfficiencyLabel', $this->getEnergyEfficiencyLabel());
        $writer->writeObjectValue('hazmat', $this->getHazmat());
        $writer->writeObjectValue('manufacturer', $this->getManufacturer());
        $writer->writeObjectValue('productSafety', $this->getProductSafety());
        $writer->writeFloatValue('repairScore', $this->getRepairScore());
        $writer->writeCollectionOfObjectValues('responsiblePersons', $this->getResponsiblePersons());
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
     * Sets the documents property value. This container provides a collection of regulatory documents associated with the listing.<br><br>For information on removing one or more files from a listing using the <a href= "/api-docs/sell/inventory/resources/offer/methods/updateOffer" target="_blank">updateOffer</a>  method, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a> .<br><br><span class="tablenote"><b>Note:</b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland  are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation " target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     * @param array<Document>|null $value Value to set for the documents property.
    */
    public function setDocuments(?array $value): void {
        $this->documents = $value;
    }

    /**
     * Sets the energyEfficiencyLabel property value. This type provides information about the energy efficiency for certain durable goods.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When providing energy efficiency information on an appliance or smartphones and tablets listing, the energy efficiency <b>rating</b> and <b>range</b> of the item must be specified through the the <a href= "/api-docs/sell/inventory/resources/inventory_item/methods/bulkCreateOrReplaceInventoryItem#request.requests.product.aspects" target="_blank">aspects</a> field when creating the inventory item record. Use the <a href= "/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve applicable rating and range values for a specified category.</p></div>
     * @param EnergyEfficiencyLabel|null $value Value to set for the energyEfficiencyLabel property.
    */
    public function setEnergyEfficiencyLabel(?EnergyEfficiencyLabel $value): void {
        $this->energyEfficiencyLabel = $value;
    }

    /**
     * Sets the hazmat property value. This container is used by the seller to provide hazardous material information for the listing.<br><br>The <b>statements</b> element is required to complete the hazmat section of a listing.<br><br>The following elements are optional:<ul><li><b>pictograms</b></li><li><b>signalWord</b></li><li><b>component</b></li></ul>
     * @param Hazmat|null $value Value to set for the hazmat property.
    */
    public function setHazmat(?Hazmat $value): void {
        $this->hazmat = $value;
    }

    /**
     * Sets the manufacturer property value. This type provides name and contact information about the manufacturer of the item.
     * @param Manufacturer|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?Manufacturer $value): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the productSafety property value. This type is used to define the <b>pictograms</b> and <b>statement</b> containers, and the optional <b>component</b> field, that provide product safety and compliance related information.
     * @param ProductSafety|null $value Value to set for the productSafety property.
    */
    public function setProductSafety(?ProductSafety $value): void {
        $this->productSafety = $value;
    }

    /**
     * Sets the repairScore property value. This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (i.e., how easy is it to repair the product.) This field is a floating point value between 0.0 (i.e., difficult to repair,) and 10.0 (i.e., easily repaired.)<br><br><span class="tablenote"><b>Note:</b> <code>0</code> should not be used as a default value, as it implies the product is not repairable.</span><br>The format for <b>repairScore</b> is limited to one decimal place. For example:<ul><li><code>7.9</code> and <code>0.0</code> are both valid scores</li><li><code>5.645</code> and <code>2.10</code> are both invalid scores</li></ul><br><span class="tablenote"><b>Note:</b> Repair score is not applicable to all categories. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies" target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the <b>Metadata API</b> to see where repair score is applicable.</span>
     * @param float|null $value Value to set for the repairScore property.
    */
    public function setRepairScore(?float $value): void {
        $this->repairScore = $value;
    }

    /**
     * Sets the responsiblePersons property value. This container provides information about the EU-based Responsible Persons or entities associated with the listing.<br><br>A maximum of 5 EU Responsible Persons are supported.<br><br><span class="tablenote"><b>Note:</b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland  are conditionally required to provide regulatory Responsible Persons information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation " target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     * @param array<ResponsiblePerson>|null $value Value to set for the responsiblePersons property.
    */
    public function setResponsiblePersons(?array $value): void {
        $this->responsiblePersons = $value;
    }

}
