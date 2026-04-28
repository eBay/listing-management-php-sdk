<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The seller-defined Stock-Keeping Unit (SKU) of each inventory item that the user wants to retrieve is passed in the request of the <strong>bulkGetInventoryItem</strong> method.
*/
class GetInventoryItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $sku An array of SKU values are passed in under the <strong>sku</strong> container to retrieve up to 25 inventory item records.<br><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems" target="_blank ">getInventoryItems</a> method to retrieve SKU values.
    */
    private ?string $sku = null;
    
    /**
     * Instantiates a new GetInventoryItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetInventoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetInventoryItem {
        return new GetInventoryItem();
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
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
        ];
    }

    /**
     * Gets the sku property value. An array of SKU values are passed in under the <strong>sku</strong> container to retrieve up to 25 inventory item records.<br><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems" target="_blank ">getInventoryItems</a> method to retrieve SKU values.
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
     * Sets the sku property value. An array of SKU values are passed in under the <strong>sku</strong> container to retrieve up to 25 inventory item records.<br><br>Use the <a href="/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems" target="_blank ">getInventoryItems</a> method to retrieve SKU values.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

}
