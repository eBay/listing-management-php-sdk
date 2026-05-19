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
 * The type that defines the fields for a date range.
*/
class DateRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $from The beginning date in the range. If the parent type is included, both the <strong>from</strong> and/or the <strong>to</strong> fields become conditionally required.<br /><br /><b>Format: </b>UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> <b> For example: </b> Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on March 31, 2021  <br /><code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>    
    */
    private ?string $from = null;
    
    /**
     * @var string|null $to The end date for the date range, which is inclusive. If the parent type is included, both the <strong>from</strong> and/or the <strong>to</strong> fields become conditionally required.  <br /><br /> <b> For example: </b> <br /><br />Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on March 31, 2021 <br /> <code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>  
    */
    private ?string $to = null;
    
    /**
     * Instantiates a new DateRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateRange {
        return new DateRange();
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
            'from' => fn(ParseNode $n) => $o->setFrom($n->getStringValue()),
            'to' => fn(ParseNode $n) => $o->setTo($n->getStringValue()),
        ];
    }

    /**
     * Gets the from property value. The beginning date in the range. If the parent type is included, both the <strong>from</strong> and/or the <strong>to</strong> fields become conditionally required.<br /><br /><b>Format: </b>UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> <b> For example: </b> Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on March 31, 2021  <br /><code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>    
     * @return string|null
    */
    public function getFrom(): ?string {
        return $this->from;
    }

    /**
     * Gets the to property value. The end date for the date range, which is inclusive. If the parent type is included, both the <strong>from</strong> and/or the <strong>to</strong> fields become conditionally required.  <br /><br /> <b> For example: </b> <br /><br />Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on March 31, 2021 <br /> <code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>  
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('from', $this->getFrom());
        $writer->writeStringValue('to', $this->getTo());
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
     * Sets the from property value. The beginning date in the range. If the parent type is included, both the <strong>from</strong> and/or the <strong>to</strong> fields become conditionally required.<br /><br /><b>Format: </b>UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> <b> For example: </b> Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on March 31, 2021  <br /><code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>    
     * @param string|null $value Value to set for the from property.
    */
    public function setFrom(?string $value): void {
        $this->from = $value;
    }

    /**
     * Sets the to property value. The end date for the date range, which is inclusive. If the parent type is included, both the <strong>from</strong> and/or the <strong>to</strong> fields become conditionally required.  <br /><br /> <b> For example: </b> <br /><br />Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on March 31, 2021 <br /> <code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>  
     * @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value): void {
        $this->to = $value;
    }

}
