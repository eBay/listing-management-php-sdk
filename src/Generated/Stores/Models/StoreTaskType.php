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
     * @var string|null $id The unique identifier of an eBay Store async task.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message The value indicates the status description of the async task, especially in case of failures (reason of failure).It follows the Asynchronous Request Pattern in eBay REST Documentation. More detail please see : https://pages.github.corp.ebay.com/vat/ebay-rest-standards/docs/UniformInterface/ResourceManipulation/AsyncRequestPattern
    */
    private ?string $message = null;
    
    /**
     * @var StoreTaskStatusEnum|null $status The enumeration value indicates the status of processing for the eBay Store Async Task.It follows the Asynchronous Request Pattern in eBay REST Documentation. More detail please see : 
    */
    private ?StoreTaskStatusEnum $status = null;
    
    /**
     * @var StoreTaskTypeEnum|null $type The enumeration value indicates the task type.
    */
    private ?StoreTaskTypeEnum $type = null;
    
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
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(StoreTaskStatusEnum::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(StoreTaskTypeEnum::class)),
        ];
    }

    /**
     * Gets the id property value. The unique identifier of an eBay Store async task.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the message property value. The value indicates the status description of the async task, especially in case of failures (reason of failure).It follows the Asynchronous Request Pattern in eBay REST Documentation. More detail please see : https://pages.github.corp.ebay.com/vat/ebay-rest-standards/docs/UniformInterface/ResourceManipulation/AsyncRequestPattern
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the status property value. The enumeration value indicates the status of processing for the eBay Store Async Task.It follows the Asynchronous Request Pattern in eBay REST Documentation. More detail please see : 
     * @return StoreTaskStatusEnum|null
    */
    public function getStatus(): ?StoreTaskStatusEnum {
        return $this->status;
    }

    /**
     * Gets the type property value. The enumeration value indicates the task type.
     * @return StoreTaskTypeEnum|null
    */
    public function getType(): ?StoreTaskTypeEnum {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the id property value. The unique identifier of an eBay Store async task.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. The value indicates the status description of the async task, especially in case of failures (reason of failure).It follows the Asynchronous Request Pattern in eBay REST Documentation. More detail please see : https://pages.github.corp.ebay.com/vat/ebay-rest-standards/docs/UniformInterface/ResourceManipulation/AsyncRequestPattern
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the status property value. The enumeration value indicates the status of processing for the eBay Store Async Task.It follows the Asynchronous Request Pattern in eBay REST Documentation. More detail please see : 
     * @param StoreTaskStatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?StoreTaskStatusEnum $value): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. The enumeration value indicates the task type.
     * @param StoreTaskTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?StoreTaskTypeEnum $value): void {
        $this->type = $value;
    }

}
