<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type is used to define the <b>pictograms</b> and <b>statement</b> containers, and the optional <b>component</b> field, that provide product safety and compliance related information.
*/
class ProductSafety implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $component This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. <br><br><span class="tablenote"><b>Note:</b> Component information can only be specified if used with the <b>pictograms</b> and/or <b>statements</b> field; if the component is provided without one or both of these fields, an error will occur.</span><br><b>Max length:</b> 120 characters
    */
    private ?string $component = null;
    
    /**
     * @var array<string>|null $pictograms An array of comma-separated string values used to provide product safety pictogram(s) for the listing.<br><br>If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field.<br><br><span class="tablenote"><b>Note:</b> For product safety pictograms, use the <a href= "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method of the <b>Metadata API</b> to find supported values for a specific marketplace/site.</span><br>A maximum of 2 pictograms are allowed for product safety.
    */
    private ?array $pictograms = null;
    
    /**
     * @var array<string>|null $statements An array of comma-separated string values used to provide product safety statement(s) for the listing.<br><br>If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. The seller specifies the identifier of each statement in this field.<br><br><span class="tablenote"><b>Note:</b> For product safety statements, use the <a href= "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method of the <b>Metadata API</b> to find supported values for a specific marketplace/site.</span><br>A maximum of 8 statements are allowed for product safety.
    */
    private ?array $statements = null;
    
    /**
     * Instantiates a new ProductSafety and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductSafety
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductSafety {
        return new ProductSafety();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the component property value. This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. <br><br><span class="tablenote"><b>Note:</b> Component information can only be specified if used with the <b>pictograms</b> and/or <b>statements</b> field; if the component is provided without one or both of these fields, an error will occur.</span><br><b>Max length:</b> 120 characters
     * @return string|null
    */
    public function getComponent(): ?string {
        return $this->component;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'component' => fn(ParseNode $n) => $o->setComponent($n->getStringValue()),
            'pictograms' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPictograms($val);
            },
            'statements' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStatements($val);
            },
        ];
    }

    /**
     * Gets the pictograms property value. An array of comma-separated string values used to provide product safety pictogram(s) for the listing.<br><br>If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field.<br><br><span class="tablenote"><b>Note:</b> For product safety pictograms, use the <a href= "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method of the <b>Metadata API</b> to find supported values for a specific marketplace/site.</span><br>A maximum of 2 pictograms are allowed for product safety.
     * @return array<string>|null
    */
    public function getPictograms(): ?array {
        return $this->pictograms;
    }

    /**
     * Gets the statements property value. An array of comma-separated string values used to provide product safety statement(s) for the listing.<br><br>If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. The seller specifies the identifier of each statement in this field.<br><br><span class="tablenote"><b>Note:</b> For product safety statements, use the <a href= "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method of the <b>Metadata API</b> to find supported values for a specific marketplace/site.</span><br>A maximum of 8 statements are allowed for product safety.
     * @return array<string>|null
    */
    public function getStatements(): ?array {
        return $this->statements;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('component', $this->getComponent());
        $writer->writeCollectionOfPrimitiveValues('pictograms', $this->getPictograms());
        $writer->writeCollectionOfPrimitiveValues('statements', $this->getStatements());
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
     * Sets the component property value. This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. <br><br><span class="tablenote"><b>Note:</b> Component information can only be specified if used with the <b>pictograms</b> and/or <b>statements</b> field; if the component is provided without one or both of these fields, an error will occur.</span><br><b>Max length:</b> 120 characters
     * @param string|null $value Value to set for the component property.
    */
    public function setComponent(?string $value): void {
        $this->component = $value;
    }

    /**
     * Sets the pictograms property value. An array of comma-separated string values used to provide product safety pictogram(s) for the listing.<br><br>If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field.<br><br><span class="tablenote"><b>Note:</b> For product safety pictograms, use the <a href= "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method of the <b>Metadata API</b> to find supported values for a specific marketplace/site.</span><br>A maximum of 2 pictograms are allowed for product safety.
     * @param array<string>|null $value Value to set for the pictograms property.
    */
    public function setPictograms(?array $value): void {
        $this->pictograms = $value;
    }

    /**
     * Sets the statements property value. An array of comma-separated string values used to provide product safety statement(s) for the listing.<br><br>If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. The seller specifies the identifier of each statement in this field.<br><br><span class="tablenote"><b>Note:</b> For product safety statements, use the <a href= "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method of the <b>Metadata API</b> to find supported values for a specific marketplace/site.</span><br>A maximum of 8 statements are allowed for product safety.
     * @param array<string>|null $value Value to set for the statements property.
    */
    public function setStatements(?array $value): void {
        $this->statements = $value;
    }

}
