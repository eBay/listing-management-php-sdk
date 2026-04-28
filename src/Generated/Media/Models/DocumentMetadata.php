<?php

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides information about the <b>documentId</b>.
*/
class DocumentMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fileName The name of the file including its extension (for example, <code>drone_user_warranty.pdf</code>).
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $fileSize The size, in bytes, of the document content.
    */
    private ?string $fileSize = null;
    
    /**
     * @var string|null $fileType The type of the file uploaded. Supported file types include the following: <code>pdf</code>, <code>jpeg</code>, <code>jpg</code>, and <code>png</code>.
    */
    private ?string $fileType = null;
    
    /**
     * Instantiates a new DocumentMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentMetadata {
        return new DocumentMetadata();
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
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getStringValue()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. The name of the file including its extension (for example, <code>drone_user_warranty.pdf</code>).
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the fileSize property value. The size, in bytes, of the document content.
     * @return string|null
    */
    public function getFileSize(): ?string {
        return $this->fileSize;
    }

    /**
     * Gets the fileType property value. The type of the file uploaded. Supported file types include the following: <code>pdf</code>, <code>jpeg</code>, <code>jpg</code>, and <code>png</code>.
     * @return string|null
    */
    public function getFileType(): ?string {
        return $this->fileType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('fileType', $this->getFileType());
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
     * Sets the fileName property value. The name of the file including its extension (for example, <code>drone_user_warranty.pdf</code>).
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the fileSize property value. The size, in bytes, of the document content.
     * @param string|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?string $value): void {
        $this->fileSize = $value;
    }

    /**
     * Sets the fileType property value. The type of the file uploaded. Supported file types include the following: <code>pdf</code>, <code>jpeg</code>, <code>jpg</code>, and <code>png</code>.
     * @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value): void {
        $this->fileType = $value;
    }

}
