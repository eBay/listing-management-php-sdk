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

/**
 * A type that provides the location of the image.
*/
class CreateImageFromUrlRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $imageUrl The image URL of the self-hosted picture to upload to eBay Picture Services (EPS). In addition to the picture requirements in <a href="https://www.ebay.com/help/policies/listing-policies/picture-policy?id=4370" target="_blank">Picture policy</a>, the provided URL must be secured using HTTPS (HTTP is not permitted). For more information, see <a href="/api-docs/sell/static/inventory/managing-image-media.html#image-requirements" target="_blank">Image requirements</a>.
    */
    private ?string $imageUrl = null;
    
    /**
     * Instantiates a new CreateImageFromUrlRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateImageFromUrlRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateImageFromUrlRequest {
        return new CreateImageFromUrlRequest();
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
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the imageUrl property value. The image URL of the self-hosted picture to upload to eBay Picture Services (EPS). In addition to the picture requirements in <a href="https://www.ebay.com/help/policies/listing-policies/picture-policy?id=4370" target="_blank">Picture policy</a>, the provided URL must be secured using HTTPS (HTTP is not permitted). For more information, see <a href="/api-docs/sell/static/inventory/managing-image-media.html#image-requirements" target="_blank">Image requirements</a>.
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
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
     * Sets the imageUrl property value. The image URL of the self-hosted picture to upload to eBay Picture Services (EPS). In addition to the picture requirements in <a href="https://www.ebay.com/help/policies/listing-policies/picture-policy?id=4370" target="_blank">Picture policy</a>, the provided URL must be secured using HTTPS (HTTP is not permitted). For more information, see <a href="/api-docs/sell/static/inventory/managing-image-media.html#image-requirements" target="_blank">Image requirements</a>.
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->imageUrl = $value;
    }

}
