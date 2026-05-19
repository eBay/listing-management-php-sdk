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
 * This type is used by the <strong>intervals</strong> container to define the opening and closing times of a store location's working day. Local time (in Military format) is used, with the following format: <code>hh:mm:ss</code>.
*/
class Interval implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $close The <strong>close</strong> value is actually the time that the store location closes. Local time (in Military format) is used. So, if a store closed at 8 PM local time, the <strong>close</strong> time would look like the following: <code>20:00:00</code>. This field is conditionally required if the <strong>intervals</strong> container is used to specify working hours or special hours for a store. <br><br>This field is returned if set for the store location.
    */
    private ?string $close = null;
    
    /**
     * @var string|null $open The <strong>open</strong> value is actually the time that the store opens. Local time (in Military format) is used. So, if a store opens at 9 AM local time, the <strong>open</strong> time would look like the following: <code>09:00:00</code>. This field is conditionally required if the <strong>intervals</strong> container is used to specify working hours or special hours for a store. <br><br>This field is returned if set for the store location.
    */
    private ?string $open = null;
    
    /**
     * Instantiates a new Interval and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Interval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Interval {
        return new Interval();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the close property value. The <strong>close</strong> value is actually the time that the store location closes. Local time (in Military format) is used. So, if a store closed at 8 PM local time, the <strong>close</strong> time would look like the following: <code>20:00:00</code>. This field is conditionally required if the <strong>intervals</strong> container is used to specify working hours or special hours for a store. <br><br>This field is returned if set for the store location.
     * @return string|null
    */
    public function getClose(): ?string {
        return $this->close;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'close' => fn(ParseNode $n) => $o->setClose($n->getStringValue()),
            'open' => fn(ParseNode $n) => $o->setOpen($n->getStringValue()),
        ];
    }

    /**
     * Gets the open property value. The <strong>open</strong> value is actually the time that the store opens. Local time (in Military format) is used. So, if a store opens at 9 AM local time, the <strong>open</strong> time would look like the following: <code>09:00:00</code>. This field is conditionally required if the <strong>intervals</strong> container is used to specify working hours or special hours for a store. <br><br>This field is returned if set for the store location.
     * @return string|null
    */
    public function getOpen(): ?string {
        return $this->open;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('close', $this->getClose());
        $writer->writeStringValue('open', $this->getOpen());
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
     * Sets the close property value. The <strong>close</strong> value is actually the time that the store location closes. Local time (in Military format) is used. So, if a store closed at 8 PM local time, the <strong>close</strong> time would look like the following: <code>20:00:00</code>. This field is conditionally required if the <strong>intervals</strong> container is used to specify working hours or special hours for a store. <br><br>This field is returned if set for the store location.
     * @param string|null $value Value to set for the close property.
    */
    public function setClose(?string $value): void {
        $this->close = $value;
    }

    /**
     * Sets the open property value. The <strong>open</strong> value is actually the time that the store opens. Local time (in Military format) is used. So, if a store opens at 9 AM local time, the <strong>open</strong> time would look like the following: <code>09:00:00</code>. This field is conditionally required if the <strong>intervals</strong> container is used to specify working hours or special hours for a store. <br><br>This field is returned if set for the store location.
     * @param string|null $value Value to set for the open property.
    */
    public function setOpen(?string $value): void {
        $this->open = $value;
    }

}
