<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This container is used by the seller to provide hazardous material information for the listing.<br><br>The <b>statements</b> element is required to complete the hazmat section of a listing.<br><br>The following elements are optional:<ul><li><b>pictograms</b></li><li><b>signalWord</b></li><li><b>component</b></li></ul>
*/
class Hazmat implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $component This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.<br><br><b>Max length:</b> 120
    */
    private ?string $component = null;
    
    /**
     * @var array<string>|null $pictograms An array of comma-separated string values listing applicable pictogram code(s) for Hazard Pictogram(s).<br><br>If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the Metadata API to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a> for additional information.</span>
    */
    private ?array $pictograms = null;
    
    /**
     * @var string|null $signalWord This field sets the signal word for hazardous materials in the listing.<br><br>If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the <a href="/api-docs/sell/metadata/resources/methods " target="_blank">Metadata API</a> to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a> for additional information.</span>
    */
    private ?string $signalWord = null;
    
    /**
     * @var array<string>|null $statements An array of comma-separated string values specifying applicable statement code(s) for hazard statement(s) for the listing.<br><br>If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the Metadata API to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a> for additional information.</span><br>This field is required if hazardous material information is provided for the listing.
    */
    private ?array $statements = null;
    
    /**
     * Instantiates a new Hazmat and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Hazmat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Hazmat {
        return new Hazmat();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the component property value. This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.<br><br><b>Max length:</b> 120
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
            'signalWord' => fn(ParseNode $n) => $o->setSignalWord($n->getStringValue()),
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
     * Gets the pictograms property value. An array of comma-separated string values listing applicable pictogram code(s) for Hazard Pictogram(s).<br><br>If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the Metadata API to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a> for additional information.</span>
     * @return array<string>|null
    */
    public function getPictograms(): ?array {
        return $this->pictograms;
    }

    /**
     * Gets the signalWord property value. This field sets the signal word for hazardous materials in the listing.<br><br>If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the <a href="/api-docs/sell/metadata/resources/methods " target="_blank">Metadata API</a> to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a> for additional information.</span>
     * @return string|null
    */
    public function getSignalWord(): ?string {
        return $this->signalWord;
    }

    /**
     * Gets the statements property value. An array of comma-separated string values specifying applicable statement code(s) for hazard statement(s) for the listing.<br><br>If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the Metadata API to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a> for additional information.</span><br>This field is required if hazardous material information is provided for the listing.
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
        $writer->writeStringValue('signalWord', $this->getSignalWord());
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
     * Sets the component property value. This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.<br><br><b>Max length:</b> 120
     * @param string|null $value Value to set for the component property.
    */
    public function setComponent(?string $value): void {
        $this->component = $value;
    }

    /**
     * Sets the pictograms property value. An array of comma-separated string values listing applicable pictogram code(s) for Hazard Pictogram(s).<br><br>If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the Metadata API to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a> for additional information.</span>
     * @param array<string>|null $value Value to set for the pictograms property.
    */
    public function setPictograms(?array $value): void {
        $this->pictograms = $value;
    }

    /**
     * Sets the signalWord property value. This field sets the signal word for hazardous materials in the listing.<br><br>If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the <a href="/api-docs/sell/metadata/resources/methods " target="_blank">Metadata API</a> to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a> for additional information.</span>
     * @param string|null $value Value to set for the signalWord property.
    */
    public function setSignalWord(?string $value): void {
        $this->signalWord = $value;
    }

    /**
     * Sets the statements property value. An array of comma-separated string values specifying applicable statement code(s) for hazard statement(s) for the listing.<br><br>If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing.<br><br><span class="tablenote"><b>Note:</b> Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels " target="_blank">getHazardousMaterialsLabels</a> method in the Metadata API to find supported values for a specific marketplace/site. Refer to <a href="/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a> for additional information.</span><br>This field is required if hazardous material information is provided for the listing.
     * @param array<string>|null $value Value to set for the statements property.
    */
    public function setStatements(?array $value): void {
        $this->statements = $value;
    }

}
