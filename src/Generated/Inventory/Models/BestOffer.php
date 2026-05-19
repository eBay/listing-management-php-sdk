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
 * This type is used by the <strong>bestOfferTerms</strong> container, which is used if the seller would like to support the Best Offer feature on their listing.
*/
class BestOffer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $autoAcceptPrice This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $autoAcceptPrice = null;
    
    /**
     * @var Amount|null $autoDeclinePrice This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $autoDeclinePrice = null;
    
    /**
     * @var bool|null $bestOfferEnabled This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature.<br><br>The seller includes this field and sets its value to <code>true</code> to enable Best Offer feature.<br><br><span class="tablenote"><b>Note:</b> Best Offer is not available for multi-variation listings.</span>
    */
    private ?bool $bestOfferEnabled = null;
    
    /**
     * Instantiates a new BestOffer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BestOffer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BestOffer {
        return new BestOffer();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the autoAcceptPrice property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getAutoAcceptPrice(): ?Amount {
        return $this->autoAcceptPrice;
    }

    /**
     * Gets the autoDeclinePrice property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getAutoDeclinePrice(): ?Amount {
        return $this->autoDeclinePrice;
    }

    /**
     * Gets the bestOfferEnabled property value. This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature.<br><br>The seller includes this field and sets its value to <code>true</code> to enable Best Offer feature.<br><br><span class="tablenote"><b>Note:</b> Best Offer is not available for multi-variation listings.</span>
     * @return bool|null
    */
    public function getBestOfferEnabled(): ?bool {
        return $this->bestOfferEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autoAcceptPrice' => fn(ParseNode $n) => $o->setAutoAcceptPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'autoDeclinePrice' => fn(ParseNode $n) => $o->setAutoDeclinePrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'bestOfferEnabled' => fn(ParseNode $n) => $o->setBestOfferEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('autoAcceptPrice', $this->getAutoAcceptPrice());
        $writer->writeObjectValue('autoDeclinePrice', $this->getAutoDeclinePrice());
        $writer->writeBooleanValue('bestOfferEnabled', $this->getBestOfferEnabled());
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
     * Sets the autoAcceptPrice property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the autoAcceptPrice property.
    */
    public function setAutoAcceptPrice(?Amount $value): void {
        $this->autoAcceptPrice = $value;
    }

    /**
     * Sets the autoDeclinePrice property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the autoDeclinePrice property.
    */
    public function setAutoDeclinePrice(?Amount $value): void {
        $this->autoDeclinePrice = $value;
    }

    /**
     * Sets the bestOfferEnabled property value. This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature.<br><br>The seller includes this field and sets its value to <code>true</code> to enable Best Offer feature.<br><br><span class="tablenote"><b>Note:</b> Best Offer is not available for multi-variation listings.</span>
     * @param bool|null $value Value to set for the bestOfferEnabled property.
    */
    public function setBestOfferEnabled(?bool $value): void {
        $this->bestOfferEnabled = $value;
    }

}
