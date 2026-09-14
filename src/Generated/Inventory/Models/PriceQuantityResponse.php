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
 * This type is used to display the result for each offer and/or inventory item that the seller attempted to update with a <strong>bulkUpdatePriceQuantity</strong> call. If any errors or warnings occur, the error/warning data is returned at the offer/inventory item level.
*/
class PriceQuantityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors This array will be returned if there were one or more errors associated with the update to the offer or inventory item record.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $offerId The unique identifier of the offer that was updated. This field will not be returned in situations where the seller is only updating the total 'ship-to-home' quantity of an inventory item record.
    */
    private ?string $offerId = null;
    
    /**
     * @var string|null $sku This is the seller-defined SKU value of the product. This field is returned whether the seller attempted to update an offer with the SKU value or just attempted to update the total 'ship-to-home' quantity of an inventory item record.<br><br><strong>Maximum length</strong>: 50<br>
    */
    private ?string $sku = null;
    
    /**
     * @var int|null $statusCode The value returned in this container will indicate the status of the attempt to update the price and/or quantity of the offer (specified in the corresponding <strong>offerId</strong> field) or the attempt to update the total 'ship-to-home' quantity of an inventory item (specified in the corresponding <strong>sku</strong> field). For a completely successful update of an offer or inventory item record, a value of <code>200</code> will appear in this field.  A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkUpdatePriceQuantity</strong> method.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<ErrorDetailV3>|null $warnings This array will be returned if there were one or more warnings associated with the update to the offer or inventory item record.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new PriceQuantityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PriceQuantityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PriceQuantityResponse {
        return new PriceQuantityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. This array will be returned if there were one or more errors associated with the update to the offer or inventory item record.
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
            'offerId' => fn(ParseNode $n) => $o->setOfferId($n->getStringValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the offerId property value. The unique identifier of the offer that was updated. This field will not be returned in situations where the seller is only updating the total 'ship-to-home' quantity of an inventory item record.
     * @return string|null
    */
    public function getOfferId(): ?string {
        return $this->offerId;
    }

    /**
     * Gets the sku property value. This is the seller-defined SKU value of the product. This field is returned whether the seller attempted to update an offer with the SKU value or just attempted to update the total 'ship-to-home' quantity of an inventory item record.<br><br><strong>Maximum length</strong>: 50<br>
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the statusCode property value. The value returned in this container will indicate the status of the attempt to update the price and/or quantity of the offer (specified in the corresponding <strong>offerId</strong> field) or the attempt to update the total 'ship-to-home' quantity of an inventory item (specified in the corresponding <strong>sku</strong> field). For a completely successful update of an offer or inventory item record, a value of <code>200</code> will appear in this field.  A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkUpdatePriceQuantity</strong> method.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. This array will be returned if there were one or more warnings associated with the update to the offer or inventory item record.
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
     * Sets the errors property value. This array will be returned if there were one or more errors associated with the update to the offer or inventory item record.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the offerId property value. The unique identifier of the offer that was updated. This field will not be returned in situations where the seller is only updating the total 'ship-to-home' quantity of an inventory item record.
     * @param string|null $value Value to set for the offerId property.
    */
    public function setOfferId(?string $value): void {
        $this->offerId = $value;
    }

    /**
     * Sets the sku property value. This is the seller-defined SKU value of the product. This field is returned whether the seller attempted to update an offer with the SKU value or just attempted to update the total 'ship-to-home' quantity of an inventory item record.<br><br><strong>Maximum length</strong>: 50<br>
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the statusCode property value. The value returned in this container will indicate the status of the attempt to update the price and/or quantity of the offer (specified in the corresponding <strong>offerId</strong> field) or the attempt to update the total 'ship-to-home' quantity of an inventory item (specified in the corresponding <strong>sku</strong> field). For a completely successful update of an offer or inventory item record, a value of <code>200</code> will appear in this field.  A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkUpdatePriceQuantity</strong> method.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. This array will be returned if there were one or more warnings associated with the update to the offer or inventory item record.
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
