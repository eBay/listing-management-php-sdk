<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to indicate the package type, weight, and dimensions of the shipping package. Package weight and dimensions are required when calculated shipping rates are used, and weight alone is required when flat-rate shipping is used, but with a weight surcharge. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
*/
class PackageWeightAndSize implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Dimension|null $dimensions This type is used to specify the dimensions (and the unit used to measure those dimensions) of a shipping package. The <strong>dimensions</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
    */
    private ?Dimension $dimensions = null;
    
    /**
     * @var string|null $packageType This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the <a href="/api-docs/sell/inventory/types/slr:PackageTypeEnum" target="_blank">PackageTypeEnum</a> type.<br><br>This field will be returned if the package type is set for the inventory item.<br><br><span class="tablenote"> <strong>Note:</strong> You can use the <a href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails" target="_blank">GeteBayDetails</a> Trading API call to retrieve a list of supported package types for a specific marketplace.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:PackageTypeEnum'>eBay API documentation</a>
    */
    private ?string $packageType = null;
    
    /**
     * @var bool|null $shippingIrregular A value of <code>true</code> indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fragile handling.
    */
    private ?bool $shippingIrregular = null;
    
    /**
     * @var Weight|null $weight This type is used to specify the weight (and the unit used to measure that weight) of a shipping package. The <strong>weight</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost, or is using flat-rate costs, but charging a weight surcharge. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
    */
    private ?Weight $weight = null;
    
    /**
     * Instantiates a new PackageWeightAndSize and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PackageWeightAndSize
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PackageWeightAndSize {
        return new PackageWeightAndSize();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensions property value. This type is used to specify the dimensions (and the unit used to measure those dimensions) of a shipping package. The <strong>dimensions</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
     * @return Dimension|null
    */
    public function getDimensions(): ?Dimension {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getObjectValue([Dimension::class, 'createFromDiscriminatorValue'])),
            'packageType' => fn(ParseNode $n) => $o->setPackageType($n->getStringValue()),
            'shippingIrregular' => fn(ParseNode $n) => $o->setShippingIrregular($n->getBooleanValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getObjectValue([Weight::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the packageType property value. This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the <a href="/api-docs/sell/inventory/types/slr:PackageTypeEnum" target="_blank">PackageTypeEnum</a> type.<br><br>This field will be returned if the package type is set for the inventory item.<br><br><span class="tablenote"> <strong>Note:</strong> You can use the <a href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails" target="_blank">GeteBayDetails</a> Trading API call to retrieve a list of supported package types for a specific marketplace.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:PackageTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPackageType(): ?string {
        return $this->packageType;
    }

    /**
     * Gets the shippingIrregular property value. A value of <code>true</code> indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fragile handling.
     * @return bool|null
    */
    public function getShippingIrregular(): ?bool {
        return $this->shippingIrregular;
    }

    /**
     * Gets the weight property value. This type is used to specify the weight (and the unit used to measure that weight) of a shipping package. The <strong>weight</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost, or is using flat-rate costs, but charging a weight surcharge. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
     * @return Weight|null
    */
    public function getWeight(): ?Weight {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dimensions', $this->getDimensions());
        $writer->writeStringValue('packageType', $this->getPackageType());
        $writer->writeBooleanValue('shippingIrregular', $this->getShippingIrregular());
        $writer->writeObjectValue('weight', $this->getWeight());
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
     * Sets the dimensions property value. This type is used to specify the dimensions (and the unit used to measure those dimensions) of a shipping package. The <strong>dimensions</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
     * @param Dimension|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?Dimension $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the packageType property value. This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the <a href="/api-docs/sell/inventory/types/slr:PackageTypeEnum" target="_blank">PackageTypeEnum</a> type.<br><br>This field will be returned if the package type is set for the inventory item.<br><br><span class="tablenote"> <strong>Note:</strong> You can use the <a href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails" target="_blank">GeteBayDetails</a> Trading API call to retrieve a list of supported package types for a specific marketplace.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:PackageTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the packageType property.
    */
    public function setPackageType(?string $value): void {
        $this->packageType = $value;
    }

    /**
     * Sets the shippingIrregular property value. A value of <code>true</code> indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fragile handling.
     * @param bool|null $value Value to set for the shippingIrregular property.
    */
    public function setShippingIrregular(?bool $value): void {
        $this->shippingIrregular = $value;
    }

    /**
     * Sets the weight property value. This type is used to specify the weight (and the unit used to measure that weight) of a shipping package. The <strong>weight</strong> container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost, or is using flat-rate costs, but charging a weight surcharge. See the <a href="https://pages.ebay.com/help/pay/calculated-shipping.html " target="_blank">Calculated shipping</a> help page for more information on calculated shipping.
     * @param Weight|null $value Value to set for the weight property.
    */
    public function setWeight(?Weight $value): void {
        $this->weight = $value;
    }

}
