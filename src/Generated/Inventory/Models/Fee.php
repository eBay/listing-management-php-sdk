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
 * This type is used to express expected listing fees that the seller may incur for one or more unpublished offers, as well as any eBay-related promotional discounts being applied toward a specific fee. These fees are the expected cumulative fees per eBay marketplace (which is indicated in the <strong>marketplaceId</strong> field).
*/
class Fee implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This dollar value in this container is the actual dollar value of the listing fee type specified in the <strong>feeType</strong> field.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $feeType The value returned in this field indicates the type of listing fee that the seller may incur if one or more unpublished offers (offers are specified in the call request) are published on the marketplace specified in the <strong>marketplaceId</strong> field. Applicable listing fees will often include things such as <code>InsertionFee</code> or <code>SubtitleFee</code>, but many fee types will get returned even when they are <code>0.0</code>.<br><br>See the <a href="https://pages.ebay.com/help/sell/fees.html " target="_blank">Standard selling fees</a> help page for more information on listing fees.
    */
    private ?string $feeType = null;
    
    /**
     * @var Amount|null $promotionalDiscount The dollar value in this container indicates any eBay promotional discount applied toward the listing fee type specified in the <strong>feeType</strong> field. If there was no discount applied toward the fee, this container is still returned but its value is <code>0.0</code>.
    */
    private ?Amount $promotionalDiscount = null;
    
    /**
     * Instantiates a new Fee and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fee
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fee {
        return new Fee();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This dollar value in this container is the actual dollar value of the listing fee type specified in the <strong>feeType</strong> field.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the feeType property value. The value returned in this field indicates the type of listing fee that the seller may incur if one or more unpublished offers (offers are specified in the call request) are published on the marketplace specified in the <strong>marketplaceId</strong> field. Applicable listing fees will often include things such as <code>InsertionFee</code> or <code>SubtitleFee</code>, but many fee types will get returned even when they are <code>0.0</code>.<br><br>See the <a href="https://pages.ebay.com/help/sell/fees.html " target="_blank">Standard selling fees</a> help page for more information on listing fees.
     * @return string|null
    */
    public function getFeeType(): ?string {
        return $this->feeType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'feeType' => fn(ParseNode $n) => $o->setFeeType($n->getStringValue()),
            'promotionalDiscount' => fn(ParseNode $n) => $o->setPromotionalDiscount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the promotionalDiscount property value. The dollar value in this container indicates any eBay promotional discount applied toward the listing fee type specified in the <strong>feeType</strong> field. If there was no discount applied toward the fee, this container is still returned but its value is <code>0.0</code>.
     * @return Amount|null
    */
    public function getPromotionalDiscount(): ?Amount {
        return $this->promotionalDiscount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('feeType', $this->getFeeType());
        $writer->writeObjectValue('promotionalDiscount', $this->getPromotionalDiscount());
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
     * Sets the amount property value. This dollar value in this container is the actual dollar value of the listing fee type specified in the <strong>feeType</strong> field.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the feeType property value. The value returned in this field indicates the type of listing fee that the seller may incur if one or more unpublished offers (offers are specified in the call request) are published on the marketplace specified in the <strong>marketplaceId</strong> field. Applicable listing fees will often include things such as <code>InsertionFee</code> or <code>SubtitleFee</code>, but many fee types will get returned even when they are <code>0.0</code>.<br><br>See the <a href="https://pages.ebay.com/help/sell/fees.html " target="_blank">Standard selling fees</a> help page for more information on listing fees.
     * @param string|null $value Value to set for the feeType property.
    */
    public function setFeeType(?string $value): void {
        $this->feeType = $value;
    }

    /**
     * Sets the promotionalDiscount property value. The dollar value in this container indicates any eBay promotional discount applied toward the listing fee type specified in the <strong>feeType</strong> field. If there was no discount applied toward the fee, this container is still returned but its value is <code>0.0</code>.
     * @param Amount|null $value Value to set for the promotionalDiscount property.
    */
    public function setPromotionalDiscount(?Amount $value): void {
        $this->promotionalDiscount = $value;
    }

}
