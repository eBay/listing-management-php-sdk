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
 * This type is used by the <strong>bulkCreateOffer</strong> response to show the status of each offer that the seller attempted to create with the <strong>bulkCreateOffer</strong> method. For each offer that is created successfully, the returned <strong>statusCode</strong> value should be <code>200</code>, and a unique <strong>offerId</strong> should be created for each offer. If any issues occur with the creation of any offers, <strong>errors</strong> and/or <strong>warnings</strong> containers will be returned.
*/
class OfferSkuResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors This container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer.
    */
    private ?array $errors = null;
    
    /**
     * @var FormatTypeEnum|null $format This enumeration value indicates the listing format of the offer.
    */
    private ?FormatTypeEnum $format = null;
    
    /**
     * @var MarketplaceEnum|null $marketplaceId This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time.
    */
    private ?MarketplaceEnum $marketplaceId = null;
    
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
     * @var array<ErrorDetailV3>|null $warnings This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created successfully even if one or more warnings are triggered.
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
     * @return array<ErrorDetailV3>|null
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
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(FormatTypeEnum::class)),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceEnum::class)),
            'offerId' => fn(ParseNode $n) => $o->setOfferId($n->getStringValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the format property value. This enumeration value indicates the listing format of the offer.
     * @return FormatTypeEnum|null
    */
    public function getFormat(): ?FormatTypeEnum {
        return $this->format;
    }

    /**
     * Gets the marketplaceId property value. This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time.
     * @return MarketplaceEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceEnum {
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
     * @return array<ErrorDetailV3>|null
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
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
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
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the format property value. This enumeration value indicates the listing format of the offer.
     * @param FormatTypeEnum|null $value Value to set for the format property.
    */
    public function setFormat(?FormatTypeEnum $value): void {
        $this->format = $value;
    }

    /**
     * Sets the marketplaceId property value. This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time.
     * @param MarketplaceEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceEnum $value): void {
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
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
