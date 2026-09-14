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
 * This type provides information about the created document ID.
*/
class CreateDocumentResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $documentId The unique identifier of the document to be uploaded.<br><br>This value is returned in the response and <strong>location</strong> header of the <strong>createDocument</strong> and <strong>createDocumentFromUrl</strong> methods. This ID can be used with the <strong>getDocument</strong> and <strong>uploadDocument</strong> methods, and to add an uploaded document to a listing. See <a href="/api-docs/sell/static/inventory/managing-document-media.html#add-documents" target="_blank">Adding documents to listings</a> for more information. 
    */
    private ?string $documentId = null;
    
    /**
     * @var DocumentStatusEnum|null $documentStatus The status of the document resource.<br><br>For example, the value <code>PENDING_UPLOAD</code> is the initial state when the reference to the document has been created using the <strong>createDocument</strong> method. When creating a document using the <strong>createDocumentFromUrl</strong> method, the initial state will be <code>SUBMITTED</code>.
    */
    private ?DocumentStatusEnum $documentStatus = null;
    
    /**
     * @var DocumentTypeEnum|null $documentType The type of the document uploaded. For example, <code>USER_GUIDE_OR_MANUAL</code>.
    */
    private ?DocumentTypeEnum $documentType = null;
    
    /**
     * @var array<LanguageEnum>|null $languages This array shows the language(s) used in the document.
    */
    private ?array $languages = null;
    
    /**
     * Instantiates a new CreateDocumentResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDocumentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDocumentResponse {
        return new CreateDocumentResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the documentId property value. The unique identifier of the document to be uploaded.<br><br>This value is returned in the response and <strong>location</strong> header of the <strong>createDocument</strong> and <strong>createDocumentFromUrl</strong> methods. This ID can be used with the <strong>getDocument</strong> and <strong>uploadDocument</strong> methods, and to add an uploaded document to a listing. See <a href="/api-docs/sell/static/inventory/managing-document-media.html#add-documents" target="_blank">Adding documents to listings</a> for more information. 
     * @return string|null
    */
    public function getDocumentId(): ?string {
        return $this->documentId;
    }

    /**
     * Gets the documentStatus property value. The status of the document resource.<br><br>For example, the value <code>PENDING_UPLOAD</code> is the initial state when the reference to the document has been created using the <strong>createDocument</strong> method. When creating a document using the <strong>createDocumentFromUrl</strong> method, the initial state will be <code>SUBMITTED</code>.
     * @return DocumentStatusEnum|null
    */
    public function getDocumentStatus(): ?DocumentStatusEnum {
        return $this->documentStatus;
    }

    /**
     * Gets the documentType property value. The type of the document uploaded. For example, <code>USER_GUIDE_OR_MANUAL</code>.
     * @return DocumentTypeEnum|null
    */
    public function getDocumentType(): ?DocumentTypeEnum {
        return $this->documentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documentId' => fn(ParseNode $n) => $o->setDocumentId($n->getStringValue()),
            'documentStatus' => fn(ParseNode $n) => $o->setDocumentStatus($n->getEnumValue(DocumentStatusEnum::class)),
            'documentType' => fn(ParseNode $n) => $o->setDocumentType($n->getEnumValue(DocumentTypeEnum::class)),
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
        $writer->writeStringValue('documentId', $this->getDocumentId());
        $writer->writeEnumValue('documentStatus', $this->getDocumentStatus());
        $writer->writeEnumValue('documentType', $this->getDocumentType());
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
     * Sets the documentId property value. The unique identifier of the document to be uploaded.<br><br>This value is returned in the response and <strong>location</strong> header of the <strong>createDocument</strong> and <strong>createDocumentFromUrl</strong> methods. This ID can be used with the <strong>getDocument</strong> and <strong>uploadDocument</strong> methods, and to add an uploaded document to a listing. See <a href="/api-docs/sell/static/inventory/managing-document-media.html#add-documents" target="_blank">Adding documents to listings</a> for more information. 
     * @param string|null $value Value to set for the documentId property.
    */
    public function setDocumentId(?string $value): void {
        $this->documentId = $value;
    }

    /**
     * Sets the documentStatus property value. The status of the document resource.<br><br>For example, the value <code>PENDING_UPLOAD</code> is the initial state when the reference to the document has been created using the <strong>createDocument</strong> method. When creating a document using the <strong>createDocumentFromUrl</strong> method, the initial state will be <code>SUBMITTED</code>.
     * @param DocumentStatusEnum|null $value Value to set for the documentStatus property.
    */
    public function setDocumentStatus(?DocumentStatusEnum $value): void {
        $this->documentStatus = $value;
    }

    /**
     * Sets the documentType property value. The type of the document uploaded. For example, <code>USER_GUIDE_OR_MANUAL</code>.
     * @param DocumentTypeEnum|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?DocumentTypeEnum $value): void {
        $this->documentType = $value;
    }

    /**
     * Sets the languages property value. This array shows the language(s) used in the document.
     * @param array<LanguageEnum>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->languages = $value;
    }

}
