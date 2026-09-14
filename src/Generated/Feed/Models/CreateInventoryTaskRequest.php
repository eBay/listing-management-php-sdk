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
 * This type defines inventory-related download task request fields.
*/
class CreateInventoryTaskRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $feedType The feed type associated with the inventory task you are about to create. Presently, only one feed type is available:<br><ul><li><code>LMS_ACTIVE_INVENTORY_REPORT</code></li></ul>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report download feed types</a> for more information.
    */
    private ?string $feedType = null;
    
    /**
     * @var InventoryFilterCriteria|null $filterCriteria This container allows a seller to create an ActiveInventoryReport for a single listing format.
    */
    private ?InventoryFilterCriteria $filterCriteria = null;
    
    /**
     * @var string|null $schemaVersion The version number of the inventory task to use for the <strong>feedType</strong>.<br><br><span class="tablenote"><strong>Note:</strong> This field <strong>must</strong> have a value of <code>1.0</code>.</span>
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new CreateInventoryTaskRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateInventoryTaskRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateInventoryTaskRequest {
        return new CreateInventoryTaskRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedType property value. The feed type associated with the inventory task you are about to create. Presently, only one feed type is available:<br><ul><li><code>LMS_ACTIVE_INVENTORY_REPORT</code></li></ul>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report download feed types</a> for more information.
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
            'filterCriteria' => fn(ParseNode $n) => $o->setFilterCriteria($n->getObjectValue([InventoryFilterCriteria::class, 'createFromDiscriminatorValue'])),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterCriteria property value. This container allows a seller to create an ActiveInventoryReport for a single listing format.
     * @return InventoryFilterCriteria|null
    */
    public function getFilterCriteria(): ?InventoryFilterCriteria {
        return $this->filterCriteria;
    }

    /**
     * Gets the schemaVersion property value. The version number of the inventory task to use for the <strong>feedType</strong>.<br><br><span class="tablenote"><strong>Note:</strong> This field <strong>must</strong> have a value of <code>1.0</code>.</span>
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
     * Sets the feedType property value. The feed type associated with the inventory task you are about to create. Presently, only one feed type is available:<br><ul><li><code>LMS_ACTIVE_INVENTORY_REPORT</code></li></ul>See <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types" target="_blank">Report download feed types</a> for more information.
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the filterCriteria property value. This container allows a seller to create an ActiveInventoryReport for a single listing format.
     * @param InventoryFilterCriteria|null $value Value to set for the filterCriteria property.
    */
    public function setFilterCriteria(?InventoryFilterCriteria $value): void {
        $this->filterCriteria = $value;
    }

    /**
     * Sets the schemaVersion property value. The version number of the inventory task to use for the <strong>feedType</strong>.<br><br><span class="tablenote"><strong>Note:</strong> This field <strong>must</strong> have a value of <code>1.0</code>.</span>
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
