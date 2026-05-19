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

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide details about the status of the Store Task.
*/
class StoreTaskType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id The unique identifier of an eBay Store task.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message This field provides a textual description on the status of the task, and could help user troubleshoot any issues if there is an issue with eBay creating the task.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $status The enumeration value here indicates the processing status of the task. See the <b>StoreTaskStatusEnum</b> type for more information on supported status values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/stores/types/api:StoreTaskStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * @var string|null $type The enumeration value indicates the task type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/stores/types/api:StoreTaskTypeEnum'>eBay API documentation</a>
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new StoreTaskType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StoreTaskType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StoreTaskType {
        return new StoreTaskType();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier of an eBay Store task.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the message property value. This field provides a textual description on the status of the task, and could help user troubleshoot any issues if there is an issue with eBay creating the task.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the status property value. The enumeration value here indicates the processing status of the task. See the <b>StoreTaskStatusEnum</b> type for more information on supported status values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/stores/types/api:StoreTaskStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the type property value. The enumeration value indicates the task type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/stores/types/api:StoreTaskTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the id property value. The unique identifier of an eBay Store task.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. This field provides a textual description on the status of the task, and could help user troubleshoot any issues if there is an issue with eBay creating the task.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the status property value. The enumeration value here indicates the processing status of the task. See the <b>StoreTaskStatusEnum</b> type for more information on supported status values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/stores/types/api:StoreTaskStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. The enumeration value indicates the task type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/stores/types/api:StoreTaskTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
