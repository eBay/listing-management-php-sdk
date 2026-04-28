<?php

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base response type of the <b>getStoreTask</b> method.
*/
class GetStoreTaskResponseType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var StoreTaskType|null $task This type is used to provide details about the status of the Store Task.
    */
    private ?StoreTaskType $task = null;
    
    /**
     * Instantiates a new GetStoreTaskResponseType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetStoreTaskResponseType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetStoreTaskResponseType {
        return new GetStoreTaskResponseType();
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
            'task' => fn(ParseNode $n) => $o->setTask($n->getObjectValue([StoreTaskType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the task property value. This type is used to provide details about the status of the Store Task.
     * @return StoreTaskType|null
    */
    public function getTask(): ?StoreTaskType {
        return $this->task;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('task', $this->getTask());
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
     * Sets the task property value. This type is used to provide details about the status of the Store Task.
     * @param StoreTaskType|null $value Value to set for the task property.
    */
    public function setTask(?StoreTaskType $value): void {
        $this->task = $value;
    }

}
