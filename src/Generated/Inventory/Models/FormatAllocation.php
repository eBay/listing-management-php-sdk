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
 * This type is used to indicate the quantities of the inventory items that are reserved for the different listing formats of the SKU offers.
*/
class FormatAllocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $auction This integer value indicates the quantity of the inventory item that is reserved for the published auction format offers of the SKU.
    */
    private ?int $auction = null;
    
    /**
     * @var int|null $fixedPrice This integer value indicates the quantity of the inventory item that is available for the fixed-price offers of the SKU.
    */
    private ?int $fixedPrice = null;
    
    /**
     * Instantiates a new FormatAllocation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FormatAllocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FormatAllocation {
        return new FormatAllocation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the auction property value. This integer value indicates the quantity of the inventory item that is reserved for the published auction format offers of the SKU.
     * @return int|null
    */
    public function getAuction(): ?int {
        return $this->auction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'auction' => fn(ParseNode $n) => $o->setAuction($n->getIntegerValue()),
            'fixedPrice' => fn(ParseNode $n) => $o->setFixedPrice($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the fixedPrice property value. This integer value indicates the quantity of the inventory item that is available for the fixed-price offers of the SKU.
     * @return int|null
    */
    public function getFixedPrice(): ?int {
        return $this->fixedPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('auction', $this->getAuction());
        $writer->writeIntegerValue('fixedPrice', $this->getFixedPrice());
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
     * Sets the auction property value. This integer value indicates the quantity of the inventory item that is reserved for the published auction format offers of the SKU.
     * @param int|null $value Value to set for the auction property.
    */
    public function setAuction(?int $value): void {
        $this->auction = $value;
    }

    /**
     * Sets the fixedPrice property value. This integer value indicates the quantity of the inventory item that is available for the fixed-price offers of the SKU.
     * @param int|null $value Value to set for the fixedPrice property.
    */
    public function setFixedPrice(?int $value): void {
        $this->fixedPrice = $value;
    }

}
