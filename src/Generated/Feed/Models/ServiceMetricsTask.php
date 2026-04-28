<?php

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines customer service metric task response fields.
*/
class ServiceMetricsTask implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $completionDate The timestamp when the customer service metrics task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
    */
    private ?string $completionDate = null;
    
    /**
     * @var string|null $creationDate The date the customer service metrics task was created.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $detailHref The relative <strong>getCustomerServiceMetricTask</strong> call URI path to retrieve the corresponding task.
    */
    private ?string $detailHref = null;
    
    /**
     * @var string|null $feedType The feed type associated with the task.
    */
    private ?string $feedType = null;
    
    /**
     * @var CustomerServiceMetricsFilterCriteria|null $filterCriteria A complex data type that filters data for report creation. See <strong>CustomerServiceMetricsFilterCriteria</strong> for fields and descriptions.
    */
    private ?CustomerServiceMetricsFilterCriteria $filterCriteria = null;
    
    /**
     * @var string|null $schemaVersion The schema version number of the file format. If omitted, the default value is used. <p><b>Default value: </b><code>1.0</code><p>
    */
    private ?string $schemaVersion = null;
    
    /**
     * @var string|null $status An enumeration value that indicates the state of the task. See <strong>FeedStatusEnum</strong> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * @var string|null $taskId The unique eBay-assigned ID of the task.
    */
    private ?string $taskId = null;
    
    /**
     * Instantiates a new ServiceMetricsTask and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceMetricsTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceMetricsTask {
        return new ServiceMetricsTask();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completionDate property value. The timestamp when the customer service metrics task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
     * @return string|null
    */
    public function getCompletionDate(): ?string {
        return $this->completionDate;
    }

    /**
     * Gets the creationDate property value. The date the customer service metrics task was created.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the detailHref property value. The relative <strong>getCustomerServiceMetricTask</strong> call URI path to retrieve the corresponding task.
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
            'filterCriteria' => fn(ParseNode $n) => $o->setFilterCriteria($n->getObjectValue([CustomerServiceMetricsFilterCriteria::class, 'createFromDiscriminatorValue'])),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'taskId' => fn(ParseNode $n) => $o->setTaskId($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterCriteria property value. A complex data type that filters data for report creation. See <strong>CustomerServiceMetricsFilterCriteria</strong> for fields and descriptions.
     * @return CustomerServiceMetricsFilterCriteria|null
    */
    public function getFilterCriteria(): ?CustomerServiceMetricsFilterCriteria {
        return $this->filterCriteria;
    }

    /**
     * Gets the schemaVersion property value. The schema version number of the file format. If omitted, the default value is used. <p><b>Default value: </b><code>1.0</code><p>
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Gets the status property value. An enumeration value that indicates the state of the task. See <strong>FeedStatusEnum</strong> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the taskId property value. The unique eBay-assigned ID of the task.
     * @return string|null
    */
    public function getTaskId(): ?string {
        return $this->taskId;
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
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('taskId', $this->getTaskId());
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
     * Sets the completionDate property value. The timestamp when the customer service metrics task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
     * @param string|null $value Value to set for the completionDate property.
    */
    public function setCompletionDate(?string $value): void {
        $this->completionDate = $value;
    }

    /**
     * Sets the creationDate property value. The date the customer service metrics task was created.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the detailHref property value. The relative <strong>getCustomerServiceMetricTask</strong> call URI path to retrieve the corresponding task.
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
     * Sets the filterCriteria property value. A complex data type that filters data for report creation. See <strong>CustomerServiceMetricsFilterCriteria</strong> for fields and descriptions.
     * @param CustomerServiceMetricsFilterCriteria|null $value Value to set for the filterCriteria property.
    */
    public function setFilterCriteria(?CustomerServiceMetricsFilterCriteria $value): void {
        $this->filterCriteria = $value;
    }

    /**
     * Sets the schemaVersion property value. The schema version number of the file format. If omitted, the default value is used. <p><b>Default value: </b><code>1.0</code><p>
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

    /**
     * Sets the status property value. An enumeration value that indicates the state of the task. See <strong>FeedStatusEnum</strong> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the taskId property value. The unique eBay-assigned ID of the task.
     * @param string|null $value Value to set for the taskId property.
    */
    public function setTaskId(?string $value): void {
        $this->taskId = $value;
    }

}
