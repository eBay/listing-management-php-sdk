<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base response payload of the <strong>publishOffer</strong> and <strong>publishOfferByInventoryItemGroup</strong> calls.
*/
class PublishResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingId The unique identifier of the newly created eBay listing. This field is returned if the single offer (if <strong>publishOffer</strong> call was used) or group of offers in an inventory item group (if <strong>publishOfferByInventoryItemGroup</strong> call was used) was successfully converted into an eBay listing.
    */
    private ?string $listingId = null;
    
    /**
     * @var array<Error>|null $warnings This container will contain an array of errors and/or warnings if any occur when a <strong>publishOffer</strong> or <strong>publishOfferByInventoryItemGroup</strong> call is made.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new PublishResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublishResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublishResponse {
        return new PublishResponse();
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
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingId property value. The unique identifier of the newly created eBay listing. This field is returned if the single offer (if <strong>publishOffer</strong> call was used) or group of offers in an inventory item group (if <strong>publishOfferByInventoryItemGroup</strong> call was used) was successfully converted into an eBay listing.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the warnings property value. This container will contain an array of errors and/or warnings if any occur when a <strong>publishOffer</strong> or <strong>publishOfferByInventoryItemGroup</strong> call is made.
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
        $writer->writeStringValue('listingId', $this->getListingId());
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
     * Sets the listingId property value. The unique identifier of the newly created eBay listing. This field is returned if the single offer (if <strong>publishOffer</strong> call was used) or group of offers in an inventory item group (if <strong>publishOfferByInventoryItemGroup</strong> call was used) was successfully converted into an eBay listing.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the warnings property value. This container will contain an array of errors and/or warnings if any occur when a <strong>publishOffer</strong> or <strong>publishOfferByInventoryItemGroup</strong> call is made.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
