<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <strong>bulkCreateOffer</strong> response to show the status of each offer that the seller attempted to create with the <strong>bulkCreateOffer</strong> method. For each offer that is created successfully, the returned <strong>statusCode</strong> value should be <code>200</code>, and a unique <strong>offerId</strong> should be created for each offer. If any issues occur with the creation of any offers, <strong>errors</strong> and/or <strong>warnings</strong> containers will be returned.
*/
class OfferSkuResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Error>|null $errors This container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $format This enumeration value indicates the listing format of the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
    */
    private ?string $format = null;
    
    /**
     * @var string|null $marketplaceId This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $offerId The unique identifier of the newly-created offer. This identifier should be automatically created by eBay if the creation of the offer was successful. It is not returned if the creation of the offer was not successful. In which case, the user may want to scan the corresponding <strong>errors</strong> and/or <strong>warnings</strong> container to see what the issue may be.
    */
    private ?string $offerId = null;
    
    /**
     * @var string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The <strong>sku</strong> value is required for each product offer that the seller is trying to create, and it is always returned to identified the product that is associated with the offer.
    */
    private ?string $sku = null;
    
    /**
     * @var int|null $statusCode The integer value returned in this field is the http status code. If an offer is created successfully, the value returned in this field should be <code>200</code>. A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkCreateOffer</strong> method.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<Error>|null $warnings This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created successfully even if one or more warnings are triggered.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new OfferSkuResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferSkuResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferSkuResponse {
        return new OfferSkuResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. This container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer.
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
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'offerId' => fn(ParseNode $n) => $o->setOfferId($n->getStringValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the format property value. This enumeration value indicates the listing format of the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the marketplaceId property value. This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the offerId property value. The unique identifier of the newly-created offer. This identifier should be automatically created by eBay if the creation of the offer was successful. It is not returned if the creation of the offer was not successful. In which case, the user may want to scan the corresponding <strong>errors</strong> and/or <strong>warnings</strong> container to see what the issue may be.
     * @return string|null
    */
    public function getOfferId(): ?string {
        return $this->offerId;
    }

    /**
     * Gets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The <strong>sku</strong> value is required for each product offer that the seller is trying to create, and it is always returned to identified the product that is associated with the offer.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the statusCode property value. The integer value returned in this field is the http status code. If an offer is created successfully, the value returned in this field should be <code>200</code>. A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkCreateOffer</strong> method.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created successfully even if one or more warnings are triggered.
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
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('offerId', $this->getOfferId());
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
     * Sets the errors property value. This container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the format property value. This enumeration value indicates the listing format of the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->format = $value;
    }

    /**
     * Sets the marketplaceId property value. This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the offerId property value. The unique identifier of the newly-created offer. This identifier should be automatically created by eBay if the creation of the offer was successful. It is not returned if the creation of the offer was not successful. In which case, the user may want to scan the corresponding <strong>errors</strong> and/or <strong>warnings</strong> container to see what the issue may be.
     * @param string|null $value Value to set for the offerId property.
    */
    public function setOfferId(?string $value): void {
        $this->offerId = $value;
    }

    /**
     * Sets the sku property value. The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The <strong>sku</strong> value is required for each product offer that the seller is trying to create, and it is always returned to identified the product that is associated with the offer.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the statusCode property value. The integer value returned in this field is the http status code. If an offer is created successfully, the value returned in this field should be <code>200</code>. A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkCreateOffer</strong> method.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created successfully even if one or more warnings are triggered.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
