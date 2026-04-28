<?php

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the task details.
*/
class Task implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $completionDate The timestamp when the task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
    */
    private ?string $completionDate = null;
    
    /**
     * @var string|null $creationDate The date the task was created.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $detailHref The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for <code>LMS_ORDER_REPORT</code> or will be null if this task is for <code>LMS_ORDER_ACK</code>.
    */
    private ?string $detailHref = null;
    
    /**
     * @var string|null $feedType The feed type associated with the task.
    */
    private ?string $feedType = null;
    
    /**
     * @var string|null $schemaVersion The schema version number associated with the task.
    */
    private ?string $schemaVersion = null;
    
    /**
     * @var string|null $status The enumeration value that indicates the state of the task that was submitted in the request. See <strong>FeedStatusEnum</strong> for information. <p>The values <code>COMPLETED </code>and<code> COMPLETED_WITH_ERROR</code> indicate the Order Report file is ready to download.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * @var string|null $taskId The ID of the task that was submitted in the request.
    */
    private ?string $taskId = null;
    
    /**
     * @var UploadSummary|null $uploadSummary This container provides summary information on an upload feed (not applicable for download feed types).
    */
    private ?UploadSummary $uploadSummary = null;
    
    /**
     * Instantiates a new Task and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Task
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Task {
        return new Task();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completionDate property value. The timestamp when the task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
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
     * Gets the detailHref property value. The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for <code>LMS_ORDER_REPORT</code> or will be null if this task is for <code>LMS_ORDER_ACK</code>.
     * @return string|null
    */
    public function getDetailHref(): ?string {
        return $this->detailHref;
    }

    /**
     * Gets the feedType property value. The feed type associated with the task.
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
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'taskId' => fn(ParseNode $n) => $o->setTaskId($n->getStringValue()),
            'uploadSummary' => fn(ParseNode $n) => $o->setUploadSummary($n->getObjectValue([UploadSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the schemaVersion property value. The schema version number associated with the task.
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Gets the status property value. The enumeration value that indicates the state of the task that was submitted in the request. See <strong>FeedStatusEnum</strong> for information. <p>The values <code>COMPLETED </code>and<code> COMPLETED_WITH_ERROR</code> indicate the Order Report file is ready to download.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the taskId property value. The ID of the task that was submitted in the request.
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
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the completionDate property value. The timestamp when the task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
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
     * Sets the detailHref property value. The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for <code>LMS_ORDER_REPORT</code> or will be null if this task is for <code>LMS_ORDER_ACK</code>.
     * @param string|null $value Value to set for the detailHref property.
    */
    public function setDetailHref(?string $value): void {
        $this->detailHref = $value;
    }

    /**
     * Sets the feedType property value. The feed type associated with the task.
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the schemaVersion property value. The schema version number associated with the task.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

    /**
     * Sets the status property value. The enumeration value that indicates the state of the task that was submitted in the request. See <strong>FeedStatusEnum</strong> for information. <p>The values <code>COMPLETED </code>and<code> COMPLETED_WITH_ERROR</code> indicate the Order Report file is ready to download.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the taskId property value. The ID of the task that was submitted in the request.
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
