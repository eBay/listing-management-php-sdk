<?php

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base response type of the <b>getStoreTasks</b> method.
*/
class GetStoreTasksResponseType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<StoreTaskType>|null $task This array provides detailed information about the status of one or more store tasks.
    */
    private ?array $task = null;
    
    /**
     * Instantiates a new GetStoreTasksResponseType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetStoreTasksResponseType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetStoreTasksResponseType {
        return new GetStoreTasksResponseType();
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
            'task' => fn(ParseNode $n) => $o->setTask($n->getCollectionOfObjectValues([StoreTaskType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the task property value. This array provides detailed information about the status of one or more store tasks.
     * @return array<StoreTaskType>|null
    */
    public function getTask(): ?array {
        return $this->task;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('task', $this->getTask());
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
     * Sets the task property value. This array provides detailed information about the status of one or more store tasks.
     * @param array<StoreTaskType>|null $value Value to set for the task property.
    */
    public function setTask(?array $value): void {
        $this->task = $value;
    }

}
