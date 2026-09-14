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
 * This type contains the metadata used to create the document ID when creating a document using a URL.
*/
class CreateDocumentFromUrlRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DocumentTypeEnum|null $documentType The type of the document being created. For example, a <code>USER_GUIDE_OR_MANUAL</code> or a <code>SAFETY_DATA_SHEET</code>.
    */
    private ?DocumentTypeEnum $documentType = null;
    
    /**
     * @var string|null $documentUrl The URL of the document being created.<br><br>The document referenced by the URL must be a .pdf, .png, .jpg, or .jpeg file, and must be no larger than 10 MB.
    */
    private ?string $documentUrl = null;
    
    /**
     * @var array<LanguageEnum>|null $languages This array shows the language(s) used in the document.
    */
    private ?array $languages = null;
    
    /**
     * Instantiates a new CreateDocumentFromUrlRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDocumentFromUrlRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDocumentFromUrlRequest {
        return new CreateDocumentFromUrlRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the documentType property value. The type of the document being created. For example, a <code>USER_GUIDE_OR_MANUAL</code> or a <code>SAFETY_DATA_SHEET</code>.
     * @return DocumentTypeEnum|null
    */
    public function getDocumentType(): ?DocumentTypeEnum {
        return $this->documentType;
    }

    /**
     * Gets the documentUrl property value. The URL of the document being created.<br><br>The document referenced by the URL must be a .pdf, .png, .jpg, or .jpeg file, and must be no larger than 10 MB.
     * @return string|null
    */
    public function getDocumentUrl(): ?string {
        return $this->documentUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documentType' => fn(ParseNode $n) => $o->setDocumentType($n->getEnumValue(DocumentTypeEnum::class)),
            'documentUrl' => fn(ParseNode $n) => $o->setDocumentUrl($n->getStringValue()),
            'languages' => fn(ParseNode $n) => $o->setLanguages($n->getCollectionOfEnumValues(LanguageEnum::class)),
        ];
    }

    /**
     * Gets the languages property value. This array shows the language(s) used in the document.
     * @return array<LanguageEnum>|null
    */
    public function getLanguages(): ?array {
        return $this->languages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('documentType', $this->getDocumentType());
        $writer->writeStringValue('documentUrl', $this->getDocumentUrl());
        $writer->writeCollectionOfEnumValues('languages', $this->getLanguages());
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
     * Sets the documentType property value. The type of the document being created. For example, a <code>USER_GUIDE_OR_MANUAL</code> or a <code>SAFETY_DATA_SHEET</code>.
     * @param DocumentTypeEnum|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?DocumentTypeEnum $value): void {
        $this->documentType = $value;
    }

    /**
     * Sets the documentUrl property value. The URL of the document being created.<br><br>The document referenced by the URL must be a .pdf, .png, .jpg, or .jpeg file, and must be no larger than 10 MB.
     * @param string|null $value Value to set for the documentUrl property.
    */
    public function setDocumentUrl(?string $value): void {
        $this->documentUrl = $value;
    }

    /**
     * Sets the languages property value. This array shows the language(s) used in the document.
     * @param array<LanguageEnum>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->languages = $value;
    }

}
