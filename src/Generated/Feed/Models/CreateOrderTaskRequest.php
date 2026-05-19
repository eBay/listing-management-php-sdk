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
 * The type that defines the fields for the <b> createOrderTask</b> request.
*/
class CreateOrderTaskRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $feedType The feed type associated with the task. The only presently supported value is <code>LMS_ORDER_REPORT</code>.<br><br>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report download feed types</a> for more information.
    */
    private ?string $feedType = null;
    
    /**
     * @var OrderFilterCriteria|null $filterCriteria The type that defines the fields for the order filters.
    */
    private ?OrderFilterCriteria $filterCriteria = null;
    
    /**
     * @var string|null $schemaVersion The schema version of the LMS OrderReport. For the <code>LMS_ORDER_REPORT</code> feed type, see the <a href="/devzone/merchant-data/CallRef/OrderReport.html#OrderReport">OrderReport</a> reference page to see the present schema version. The <b> schemaVersion</b> value is the version number shown at the top of the <b> OrderReport</b> page. <br /><br /><b>Restriction: </b> This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after '1113' is '1115'.
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new CreateOrderTaskRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateOrderTaskRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateOrderTaskRequest {
        return new CreateOrderTaskRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedType property value. The feed type associated with the task. The only presently supported value is <code>LMS_ORDER_REPORT</code>.<br><br>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report download feed types</a> for more information.
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
            'filterCriteria' => fn(ParseNode $n) => $o->setFilterCriteria($n->getObjectValue([OrderFilterCriteria::class, 'createFromDiscriminatorValue'])),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterCriteria property value. The type that defines the fields for the order filters.
     * @return OrderFilterCriteria|null
    */
    public function getFilterCriteria(): ?OrderFilterCriteria {
        return $this->filterCriteria;
    }

    /**
     * Gets the schemaVersion property value. The schema version of the LMS OrderReport. For the <code>LMS_ORDER_REPORT</code> feed type, see the <a href="/devzone/merchant-data/CallRef/OrderReport.html#OrderReport">OrderReport</a> reference page to see the present schema version. The <b> schemaVersion</b> value is the version number shown at the top of the <b> OrderReport</b> page. <br /><br /><b>Restriction: </b> This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after '1113' is '1115'.
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
     * Sets the feedType property value. The feed type associated with the task. The only presently supported value is <code>LMS_ORDER_REPORT</code>.<br><br>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report download feed types</a> for more information.
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the filterCriteria property value. The type that defines the fields for the order filters.
     * @param OrderFilterCriteria|null $value Value to set for the filterCriteria property.
    */
    public function setFilterCriteria(?OrderFilterCriteria $value): void {
        $this->filterCriteria = $value;
    }

    /**
     * Sets the schemaVersion property value. The schema version of the LMS OrderReport. For the <code>LMS_ORDER_REPORT</code> feed type, see the <a href="/devzone/merchant-data/CallRef/OrderReport.html#OrderReport">OrderReport</a> reference page to see the present schema version. The <b> schemaVersion</b> value is the version number shown at the top of the <b> OrderReport</b> page. <br /><br /><b>Restriction: </b> This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after '1113' is '1115'.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
