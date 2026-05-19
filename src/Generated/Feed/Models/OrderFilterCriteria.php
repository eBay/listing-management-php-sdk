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

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the order filters.
*/
class OrderFilterCriteria implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateRange|null $creationDateRange The type that defines the fields for a date range.
    */
    private ?DateRange $creationDateRange = null;
    
    /**
     * @var DateRange|null $modifiedDateRange The type that defines the fields for a date range.
    */
    private ?DateRange $modifiedDateRange = null;
    
    /**
     * @var string|null $orderStatus The order status of the orders returned. If the filter is omitted from createOrderTask call, orders that are in both <code>ACTIVE </code>and<code> COMPLETED</code> states are returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum'>eBay API documentation</a>
    */
    private ?string $orderStatus = null;
    
    /**
     * Instantiates a new OrderFilterCriteria and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderFilterCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderFilterCriteria {
        return new OrderFilterCriteria();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the creationDateRange property value. The type that defines the fields for a date range.
     * @return DateRange|null
    */
    public function getCreationDateRange(): ?DateRange {
        return $this->creationDateRange;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'creationDateRange' => fn(ParseNode $n) => $o->setCreationDateRange($n->getObjectValue([DateRange::class, 'createFromDiscriminatorValue'])),
            'modifiedDateRange' => fn(ParseNode $n) => $o->setModifiedDateRange($n->getObjectValue([DateRange::class, 'createFromDiscriminatorValue'])),
            'orderStatus' => fn(ParseNode $n) => $o->setOrderStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the modifiedDateRange property value. The type that defines the fields for a date range.
     * @return DateRange|null
    */
    public function getModifiedDateRange(): ?DateRange {
        return $this->modifiedDateRange;
    }

    /**
     * Gets the orderStatus property value. The order status of the orders returned. If the filter is omitted from createOrderTask call, orders that are in both <code>ACTIVE </code>and<code> COMPLETED</code> states are returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getOrderStatus(): ?string {
        return $this->orderStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('creationDateRange', $this->getCreationDateRange());
        $writer->writeObjectValue('modifiedDateRange', $this->getModifiedDateRange());
        $writer->writeStringValue('orderStatus', $this->getOrderStatus());
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
     * Sets the creationDateRange property value. The type that defines the fields for a date range.
     * @param DateRange|null $value Value to set for the creationDateRange property.
    */
    public function setCreationDateRange(?DateRange $value): void {
        $this->creationDateRange = $value;
    }

    /**
     * Sets the modifiedDateRange property value. The type that defines the fields for a date range.
     * @param DateRange|null $value Value to set for the modifiedDateRange property.
    */
    public function setModifiedDateRange(?DateRange $value): void {
        $this->modifiedDateRange = $value;
    }

    /**
     * Sets the orderStatus property value. The order status of the orders returned. If the filter is omitted from createOrderTask call, orders that are in both <code>ACTIVE </code>and<code> COMPLETED</code> states are returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the orderStatus property.
    */
    public function setOrderStatus(?string $value): void {
        $this->orderStatus = $value;
    }

}
