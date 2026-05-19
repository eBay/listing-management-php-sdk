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
 * The type that defines the fields for the <b> createTask</b> method.
*/
class CreateTaskRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $feedType The feed type associated with the task. Available feed types:<br><ul><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#trading-upload-feed-types" target="_blank">Inventory upload feed types</a></li><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-upload-feed-types" target="_blank">Fulfillment upload feed types</a></li><li><a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#availabl" target="_blank">Seller Hub feed types</a></li></ul>
    */
    private ?string $feedType = null;
    
    /**
     * @var string|null $schemaVersion The schemaVersion/version number of the file format:<br><ul><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Version" target="_blank">Version Details / Schema Version</a></li><li><a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#schema" target="_blank">Seller Hub feed schema version</a></li></ul>
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new CreateTaskRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateTaskRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateTaskRequest {
        return new CreateTaskRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedType property value. The feed type associated with the task. Available feed types:<br><ul><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#trading-upload-feed-types" target="_blank">Inventory upload feed types</a></li><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-upload-feed-types" target="_blank">Fulfillment upload feed types</a></li><li><a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#availabl" target="_blank">Seller Hub feed types</a></li></ul>
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
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the schemaVersion property value. The schemaVersion/version number of the file format:<br><ul><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Version" target="_blank">Version Details / Schema Version</a></li><li><a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#schema" target="_blank">Seller Hub feed schema version</a></li></ul>
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
     * Sets the feedType property value. The feed type associated with the task. Available feed types:<br><ul><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#trading-upload-feed-types" target="_blank">Inventory upload feed types</a></li><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-upload-feed-types" target="_blank">Fulfillment upload feed types</a></li><li><a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#availabl" target="_blank">Seller Hub feed types</a></li></ul>
     * @param string|null $value Value to set for the feedType property.
    */
    public function setFeedType(?string $value): void {
        $this->feedType = $value;
    }

    /**
     * Sets the schemaVersion property value. The schemaVersion/version number of the file format:<br><ul><li><a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Version" target="_blank">Version Details / Schema Version</a></li><li><a href="/api-docs/sell/static/feed/fx-feeds-quick-reference.html#schema" target="_blank">Seller Hub feed schema version</a></li></ul>
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
