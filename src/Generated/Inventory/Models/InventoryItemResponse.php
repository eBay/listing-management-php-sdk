<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the response of the <strong>bulkCreateOrReplaceInventoryItem</strong> method to indicate the success or failure of creating and/or updating each inventory item record. The <strong>sku</strong> value in this type identifies each inventory item record.
*/
class InventoryItemResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Error>|null $errors This container will be returned if there were one or more errors associated with the creation or update to the inventory item record.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $locale This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
    */
    private ?string $sku = null;
    
    /**
     * @var int|null $statusCode The HTTP status code returned in this field indicates the success or failure of creating or updating the inventory item record for the inventory item indicated in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<Error>|null $warnings This container will be returned if there were one or more warnings associated with the creation or update to the inventory item record.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new InventoryItemResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryItemResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryItemResponse {
        return new InventoryItemResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. This container will be returned if there were one or more errors associated with the creation or update to the inventory item record.
     * @return array<Error>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the locale property value. This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the statusCode property value. The HTTP status code returned in this field indicates the success or failure of creating or updating the inventory item record for the inventory item indicated in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. This container will be returned if there were one or more warnings associated with the creation or update to the inventory item record.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('sku', $this->getSku());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the errors property value. This container will be returned if there were one or more errors associated with the creation or update to the inventory item record.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the locale property value. This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the statusCode property value. The HTTP status code returned in this field indicates the success or failure of creating or updating the inventory item record for the inventory item indicated in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. This container will be returned if there were one or more warnings associated with the creation or update to the inventory item record.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
