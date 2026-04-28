<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to identify a motor vehicle that is compatible with the corresponding inventory item (the SKU that is passed in as part of the call URI). The motor vehicle can be identified through an eBay Product ID or a K-Type value. The <strong>gtin</strong> field (for inputting Global Trade Item Numbers) is for future use only. If a motor vehicle is found in the eBay product catalog, the motor vehicle properties (engine, make, model, trim, and year) will automatically get picked up for that motor vehicle.<br><br><span class="tablenote"> <strong>Note:</strong> Currently, parts compatibility is only applicable for motor vehicles, but it is possible that the Product Compatibility feature is expanded to other (non-vehicle) products in the future.</span>
*/
class ProductIdentifier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $epid This field can be used if the seller already knows the eBay catalog product ID (ePID) associated with the motor vehicle that is to be added to the compatible product list. If this eBay catalog product ID is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle.
    */
    private ?string $epid = null;
    
    /**
     * @var string|null $gtin This field can be used if the seller knows the Global Trade Item Number for the motor vehicle that is to be added to the compatible product list. If this GTIN value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim will automatically get picked up for that motor vehicle.<br><br><span class="tablenote"> <strong>Note:</strong> This field is for future use.</span>
    */
    private ?string $gtin = null;
    
    /**
     * @var string|null $ktype This field can be used if the seller knows the K Type Number for the motor vehicle that is to be added to the compatible product list. If this K Type value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle. <br><br>Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K Type Numbers.
    */
    private ?string $ktype = null;
    
    /**
     * Instantiates a new ProductIdentifier and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductIdentifier {
        return new ProductIdentifier();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the epid property value. This field can be used if the seller already knows the eBay catalog product ID (ePID) associated with the motor vehicle that is to be added to the compatible product list. If this eBay catalog product ID is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle.
     * @return string|null
    */
    public function getEpid(): ?string {
        return $this->epid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'epid' => fn(ParseNode $n) => $o->setEpid($n->getStringValue()),
            'gtin' => fn(ParseNode $n) => $o->setGtin($n->getStringValue()),
            'ktype' => fn(ParseNode $n) => $o->setKtype($n->getStringValue()),
        ];
    }

    /**
     * Gets the gtin property value. This field can be used if the seller knows the Global Trade Item Number for the motor vehicle that is to be added to the compatible product list. If this GTIN value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim will automatically get picked up for that motor vehicle.<br><br><span class="tablenote"> <strong>Note:</strong> This field is for future use.</span>
     * @return string|null
    */
    public function getGtin(): ?string {
        return $this->gtin;
    }

    /**
     * Gets the ktype property value. This field can be used if the seller knows the K Type Number for the motor vehicle that is to be added to the compatible product list. If this K Type value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle. <br><br>Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K Type Numbers.
     * @return string|null
    */
    public function getKtype(): ?string {
        return $this->ktype;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('epid', $this->getEpid());
        $writer->writeStringValue('gtin', $this->getGtin());
        $writer->writeStringValue('ktype', $this->getKtype());
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
     * Sets the epid property value. This field can be used if the seller already knows the eBay catalog product ID (ePID) associated with the motor vehicle that is to be added to the compatible product list. If this eBay catalog product ID is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle.
     * @param string|null $value Value to set for the epid property.
    */
    public function setEpid(?string $value): void {
        $this->epid = $value;
    }

    /**
     * Sets the gtin property value. This field can be used if the seller knows the Global Trade Item Number for the motor vehicle that is to be added to the compatible product list. If this GTIN value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim will automatically get picked up for that motor vehicle.<br><br><span class="tablenote"> <strong>Note:</strong> This field is for future use.</span>
     * @param string|null $value Value to set for the gtin property.
    */
    public function setGtin(?string $value): void {
        $this->gtin = $value;
    }

    /**
     * Sets the ktype property value. This field can be used if the seller knows the K Type Number for the motor vehicle that is to be added to the compatible product list. If this K Type value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle. <br><br>Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K Type Numbers.
     * @param string|null $value Value to set for the ktype property.
    */
    public function setKtype(?string $value): void {
        $this->ktype = $value;
    }

}
