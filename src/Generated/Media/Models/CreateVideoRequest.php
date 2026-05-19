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

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The request to create a video, which must contain the video's <b>title</b>, <b>size</b>, and <b>classification</b>. <b>Description</b> is an optional field when creating videos.
*/
class CreateVideoRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $classification The intended use for this video content. Currently, videos can only be added and associated with eBay listings, so the only supported value is <code>ITEM</code>.
    */
    private ?array $classification = null;
    
    /**
     * @var string|null $description The description of the video.
    */
    private ?string $description = null;
    
    /**
     * @var int|null $size The size, in bytes, of the video content. <br><br><b>Max:</b> 157,286,400 bytes
    */
    private ?int $size = null;
    
    /**
     * @var string|null $title The title of the video.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new CreateVideoRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateVideoRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateVideoRequest {
        return new CreateVideoRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the classification property value. The intended use for this video content. Currently, videos can only be added and associated with eBay listings, so the only supported value is <code>ITEM</code>.
     * @return array<string>|null
    */
    public function getClassification(): ?array {
        return $this->classification;
    }

    /**
     * Gets the description property value. The description of the video.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classification' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setClassification($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the size property value. The size, in bytes, of the video content. <br><br><b>Max:</b> 157,286,400 bytes
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the title property value. The title of the video.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('classification', $this->getClassification());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the classification property value. The intended use for this video content. Currently, videos can only be added and associated with eBay listings, so the only supported value is <code>ITEM</code>.
     * @param array<string>|null $value Value to set for the classification property.
    */
    public function setClassification(?array $value): void {
        $this->classification = $value;
    }

    /**
     * Sets the description property value. The description of the video.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the size property value. The size, in bytes, of the video content. <br><br><b>Max:</b> 157,286,400 bytes
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->size = $value;
    }

    /**
     * Sets the title property value. The title of the video.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
