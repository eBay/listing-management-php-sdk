<?php

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the Customer Service Metric reports generated with the Feed API.
*/
class CreateServiceMetricsTaskRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $feedType The <strong>feedType</strong> specified for the customer service metric task being created. The report lists the transaction details that contribute to the service metrics evaluation. Supported types include:<p><code>CUSTOMER_SERVICE_METRICS_REPORT</code></p>
    */
    private ?string $feedType = null;
    
    /**
     * @var CustomerServiceMetricsFilterCriteria|null $filterCriteria A complex data type that filters data for report creation. See <strong>CustomerServiceMetricsFilterCriteria</strong> for fields and descriptions.
    */
    private ?CustomerServiceMetricsFilterCriteria $filterCriteria = null;
    
    /**
     * @var string|null $schemaVersion The version number of the customer service metric.<br><br><span class="tablenote"><b>Note:</b> This field <b>must</b> have a value of <code>1.0</code>.</span>
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new CreateServiceMetricsTaskRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateServiceMetricsTaskRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateServiceMetricsTaskRequest {
        return new CreateServiceMetricsTaskRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedType property value. The <strong>feedType</strong> specified for the customer service metric task being created. The report lists the transaction details that contribute to the service metrics evaluation. Supported types include:<p><code>CUSTOMER_SERVICE_METRICS_REPORT</code></p>
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
            'feedType' => fn(ParseNode $n) => $o->setFeedType($n->getStringValue()),
            'filterCriteria' => fn(ParseNode $n) => $o->setFilterCriteria($n->getObjectValue([CustomerServiceMetricsFilterCriteria::class, 'createFromDiscriminatorValue'])),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
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
     * Gets the schemaVersion property value. The version number of the customer service metric.<br><br><span class="tablenote"><b>Note:</b> This field <b>must</b> have a value of <code>1.0</code>.</span>
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('feedType', $this->getFeedType());
        $writer->writeObjectValue('filterCriteria', $this->getFilterCriteria());
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
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
     * Sets the feedType property value. The <strong>feedType</strong> specified for the customer service metric task being created. The report lists the transaction details that contribute to the service metrics evaluation. Supported types include:<p><code>CUSTOMER_SERVICE_METRICS_REPORT</code></p>
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
     * Sets the schemaVersion property value. The version number of the customer service metric.<br><br><span class="tablenote"><b>Note:</b> This field <b>must</b> have a value of <code>1.0</code>.</span>
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
