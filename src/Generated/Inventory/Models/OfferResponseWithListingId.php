<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to indicate the status of each offer that the user attempted to publish. If an offer is successfully published, an eBay listing ID (also known as an Item ID) is returned. If there is an issue publishing the offer and creating the new eBay listing, the information about why the listing failed should be returned in the <strong>errors</strong> and/or <strong>warnings</strong> containers.
*/
class OfferResponseWithListingId implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Error>|null $errors This container will be returned if there were one or more errors associated with publishing the offer.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $listingId The unique identifier of the newly-created eBay listing. This field is only returned if the seller successfully published the offer and created the new eBay listing.
    */
    private ?string $listingId = null;
    
    /**
     * @var string|null $offerId The unique identifier of the offer that the seller published (or attempted to publish).
    */
    private ?string $offerId = null;
    
    /**
     * @var int|null $statusCode The HTTP status code returned in this field indicates the success or failure of publishing the offer specified in the <strong>offerId</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<Error>|null $warnings This container will be returned if there were one or more warnings associated with publishing the offer.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new OfferResponseWithListingId and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferResponseWithListingId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferResponseWithListingId {
        return new OfferResponseWithListingId();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. This container will be returned if there were one or more errors associated with publishing the offer.
     * @return array<Error>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'offerId' => fn(ParseNode $n) => $o->setOfferId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingId property value. The unique identifier of the newly-created eBay listing. This field is only returned if the seller successfully published the offer and created the new eBay listing.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the offerId property value. The unique identifier of the offer that the seller published (or attempted to publish).
     * @return string|null
    */
    public function getOfferId(): ?string {
        return $this->offerId;
    }

    /**
     * Gets the statusCode property value. The HTTP status code returned in this field indicates the success or failure of publishing the offer specified in the <strong>offerId</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. This container will be returned if there were one or more warnings associated with publishing the offer.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeStringValue('offerId', $this->getOfferId());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the errors property value. This container will be returned if there were one or more errors associated with publishing the offer.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the listingId property value. The unique identifier of the newly-created eBay listing. This field is only returned if the seller successfully published the offer and created the new eBay listing.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the offerId property value. The unique identifier of the offer that the seller published (or attempted to publish).
     * @param string|null $value Value to set for the offerId property.
    */
    public function setOfferId(?string $value): void {
        $this->offerId = $value;
    }

    /**
     * Sets the statusCode property value. The HTTP status code returned in this field indicates the success or failure of publishing the offer specified in the <strong>offerId</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. This container will be returned if there were one or more warnings associated with publishing the offer.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
