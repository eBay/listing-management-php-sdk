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
 * This container is used to return information about a specific inventory task.
*/
class InventoryTask implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $completionDate The timestamp when the task <strong>status</strong> went into the <code>COMPLETED</code>, <code>COMPLETED_WITH_ERROR</code>, or <code>PARTIALLY_PROCESSED</code> state. This field is only returned if the status is one of the three completed values.
    */
    private ?string $completionDate = null;
    
    /**
     * @var string|null $creationDate The date the task was created.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $detailHref The path to the call URI used to retrieve the task. This field points to the <strong>getInventoryTask</strong> URI.
    */
    private ?string $detailHref = null;
    
    /**
     * @var string|null $feedType The feed type associated with the inventory task.
    */
    private ?string $feedType = null;
    
    /**
     * @var InventoryFilterCriteria|null $filterCriteria This container is used to set the filter criteria for the ActiveInventoryReport. A seller can retrieve listings for a specified format.
    */
    private ?InventoryFilterCriteria $filterCriteria = null;
    
    /**
     * @var string|null $schemaVersion The schema version number associated with the task.
    */
    private ?string $schemaVersion = null;
    
    /**
     * @var FeedStatusEnum|null $status The status of the task. Users must wait until status is complete before moving on to the next step (such as uploading/downloading a file).
    */
    private ?FeedStatusEnum $status = null;
    
    /**
     * @var string|null $taskId The ID of the task. This ID is generated when the task was created by the <strong>createInventoryTask</strong> method.
    */
    private ?string $taskId = null;
    
    /**
     * @var UploadSummary|null $uploadSummary This container provides summary information on an upload feed (not applicable for download feed types).
    */
    private ?UploadSummary $uploadSummary = null;
    
    /**
     * Instantiates a new InventoryTask and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryTask {
        return new InventoryTask();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completionDate property value. The timestamp when the task <strong>status</strong> went into the <code>COMPLETED</code>, <code>COMPLETED_WITH_ERROR</code>, or <code>PARTIALLY_PROCESSED</code> state. This field is only returned if the status is one of the three completed values.
     * @return string|null
    */
    public function getCompletionDate(): ?string {
        return $this->completionDate;
    }

    /**
     * Gets the creationDate property value. The date the task was created.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the detailHref property value. The path to the call URI used to retrieve the task. This field points to the <strong>getInventoryTask</strong> URI.
     * @return string|null
    */
    public function getDetailHref(): ?string {
        return $this->detailHref;
    }

    /**
     * Gets the feedType property value. The feed type associated with the inventory task.
     * @return string|null
    */
    public function getFeedType(): ?string {
        return $this->feedType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completionDate' => fn(ParseNode $n) => $o->setCompletionDate($n->getStringValue()),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'detailHref' => fn(ParseNode $n) => $o->setDetailHref($n->getStringValue()),
            'feedType' => fn(ParseNode $n) => $o->setFeedType($n->getStringValue()),
            'filterCriteria' => fn(ParseNode $n) => $o->setFilterCriteria($n->getObjectValue([InventoryFilterCriteria::class, 'createFromDiscriminatorValue'])),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FeedStatusEnum::class)),
            'taskId' => fn(ParseNode $n) => $o->setTaskId($n->getStringValue()),
            'uploadSummary' => fn(ParseNode $n) => $o->setUploadSummary($n->getObjectValue([UploadSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the filterCriteria property value. This container is used to set the filter criteria for the ActiveInventoryReport. A seller can retrieve listings for a specified format.
     * @return InventoryFilterCriteria|null
    */
    public function getFilterCriteria(): ?InventoryFilterCriteria {
        return $this->filterCriteria;
    }

    /**
     * Gets the schemaVersion property value. The schema version number associated with the task.
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Gets the status property value. The status of the task. Users must wait until status is complete before moving on to the next step (such as uploading/downloading a file).
     * @return FeedStatusEnum|null
    */
    public function getStatus(): ?FeedStatusEnum {
        return $this->status;
    }

    /**
     * Gets the taskId property value. The ID of the task. This ID is generated when the task was created by the <strong>createInventoryTask</strong> method.
     * @return string|null
    */
    public function getTaskId(): ?string {
        return $this->taskId;
    }

    /**
     * Gets the uploadSummary property value. This container provides summary information on an upload feed (not applicable for download feed types).
     * @return UploadSummary|null
    */
    public function getUploadSummary(): ?UploadSummary {
        return $this->uploadSummary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('completionDate', $this->getCompletionDate());
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('detailHref', $this->getDetailHref());
        $writer->writeStringValue('feedType', $this->getFeedType());
        $writer->writeObjectValue('filterCriteria', $this->getFilterCriteria());
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('taskId', $this->getTaskId());
        $writer->writeObjectValue('uploadSummary', $this->getUploadSummary());
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
     * Sets the completionDate property value. The timestamp when the task <strong>status</strong> went into the <code>COMPLETED</code>, <code>COMPLETED_WITH_ERROR</code>, or <code>PARTIALLY_PROCESSED</code> state. This field is only returned if the status is one of the three completed values.
     * @param string|null $value Value to set for the completionDate property.
    */
    public function setCompletionDate(?string $value): void {
        $this->completionDate = $value;
    }

    /**
     * Sets the creationDate property value. The date the task was created.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the detailHref property value. The path to the call URI used to retrieve the task. This field points to the <strong>getInventoryTask</strong> URI.
     * @param string|null $value Value to set for the detailHref property.
    */
    public function setDetailHref(?string $value): void {
        $this->detailHref = $value;
    }

    /**
     * Sets the feedType property value. The feed type associated with the inventory task.
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the filterCriteria property value. This container is used to set the filter criteria for the ActiveInventoryReport. A seller can retrieve listings for a specified format.
     * @param InventoryFilterCriteria|null $value Value to set for the filterCriteria property.
    */
    public function setFilterCriteria(?InventoryFilterCriteria $value): void {
        $this->filterCriteria = $value;
    }

    /**
     * Sets the schemaVersion property value. The schema version number associated with the task.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

    /**
     * Sets the status property value. The status of the task. Users must wait until status is complete before moving on to the next step (such as uploading/downloading a file).
     * @param FeedStatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?FeedStatusEnum $value): void {
        $this->status = $value;
    }

    /**
     * Sets the taskId property value. The ID of the task. This ID is generated when the task was created by the <strong>createInventoryTask</strong> method.
     * @param string|null $value Value to set for the taskId property.
    */
    public function setTaskId(?string $value): void {
        $this->taskId = $value;
    }

    /**
     * Sets the uploadSummary property value. This container provides summary information on an upload feed (not applicable for download feed types).
     * @param UploadSummary|null $value Value to set for the uploadSummary property.
    */
    public function setUploadSummary(?UploadSummary $value): void {
        $this->uploadSummary = $value;
    }

}
