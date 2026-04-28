<?php

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that provides an image's details including its URL and expiration.
*/
class ImageResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $expirationDate The date and time when an unused EPS image will expire and be removed from the EPS server, in Coordinated Universal Time (UTC). As long as an EPS image is being used in an active listing, that image will remain on the EPS server and be accessible.
    */
    private ?string $expirationDate = null;
    
    /**
     * @var string|null $imageUrl The EPS URL to access the uploaded image. This URL will be used in listing calls to add the image to a listing.
    */
    private ?string $imageUrl = null;
    
    /**
     * @var string|null $maxDimensionImageUrl The EPS URL to access the maximum dimension version of the uploaded image.
    */
    private ?string $maxDimensionImageUrl = null;
    
    /**
     * Instantiates a new ImageResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImageResponse {
        return new ImageResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationDate property value. The date and time when an unused EPS image will expire and be removed from the EPS server, in Coordinated Universal Time (UTC). As long as an EPS image is being used in an active listing, that image will remain on the EPS server and be accessible.
     * @return string|null
    */
    public function getExpirationDate(): ?string {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getStringValue()),
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'maxDimensionImageUrl' => fn(ParseNode $n) => $o->setMaxDimensionImageUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the imageUrl property value. The EPS URL to access the uploaded image. This URL will be used in listing calls to add the image to a listing.
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Gets the maxDimensionImageUrl property value. The EPS URL to access the maximum dimension version of the uploaded image.
     * @return string|null
    */
    public function getMaxDimensionImageUrl(): ?string {
        return $this->maxDimensionImageUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expirationDate', $this->getExpirationDate());
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
        $writer->writeStringValue('maxDimensionImageUrl', $this->getMaxDimensionImageUrl());
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
     * Sets the expirationDate property value. The date and time when an unused EPS image will expire and be removed from the EPS server, in Coordinated Universal Time (UTC). As long as an EPS image is being used in an active listing, that image will remain on the EPS server and be accessible.
     * @param string|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?string $value): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the imageUrl property value. The EPS URL to access the uploaded image. This URL will be used in listing calls to add the image to a listing.
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->imageUrl = $value;
    }

    /**
     * Sets the maxDimensionImageUrl property value. The EPS URL to access the maximum dimension version of the uploaded image.
     * @param string|null $value Value to set for the maxDimensionImageUrl property.
    */
    public function setMaxDimensionImageUrl(?string $value): void {
        $this->maxDimensionImageUrl = $value;
    }

}
