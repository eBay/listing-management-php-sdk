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
 * This type contains the metadata used to create the document ID.
*/
class CreateDocumentRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $documentType The type of the document being uploaded. For example, a <code>USER_GUIDE_OR_MANUAL</code> or a <code>SAFETY_DATA_SHEET</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentTypeEnum'>eBay API documentation</a>
    */
    private ?string $documentType = null;
    
    /**
     * @var array<string>|null $languages This array shows the language(s) used in the document.
    */
    private ?array $languages = null;
    
    /**
     * Instantiates a new CreateDocumentRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDocumentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDocumentRequest {
        return new CreateDocumentRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the documentType property value. The type of the document being uploaded. For example, a <code>USER_GUIDE_OR_MANUAL</code> or a <code>SAFETY_DATA_SHEET</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDocumentType(): ?string {
        return $this->documentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documentType' => fn(ParseNode $n) => $o->setDocumentType($n->getStringValue()),
            'languages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLanguages($val);
            },
        ];
    }

    /**
     * Gets the languages property value. This array shows the language(s) used in the document.
     * @return array<string>|null
    */
    public function getLanguages(): ?array {
        return $this->languages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('documentType', $this->getDocumentType());
        $writer->writeCollectionOfPrimitiveValues('languages', $this->getLanguages());
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
     * Sets the documentType property value. The type of the document being uploaded. For example, a <code>USER_GUIDE_OR_MANUAL</code> or a <code>SAFETY_DATA_SHEET</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?string $value): void {
        $this->documentType = $value;
    }

    /**
     * Sets the languages property value. This array shows the language(s) used in the document.
     * @param array<string>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->languages = $value;
    }

}
