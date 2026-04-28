<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base request of the <strong>bulkCreateOffer</strong> method, which is used to create up to 25 new offers.
*/
class BulkEbayOfferDetailsWithKeys implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<EbayOfferDetailsWithKeys>|null $requests The details of each offer that is being created is passed in under this container. Up to 25 offers can be created with one <strong>bulkCreateOffer</strong> call.
    */
    private ?array $requests = null;
    
    /**
     * Instantiates a new BulkEbayOfferDetailsWithKeys and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkEbayOfferDetailsWithKeys
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkEbayOfferDetailsWithKeys {
        return new BulkEbayOfferDetailsWithKeys();
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
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([EbayOfferDetailsWithKeys::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the requests property value. The details of each offer that is being created is passed in under this container. Up to 25 offers can be created with one <strong>bulkCreateOffer</strong> call.
     * @return array<EbayOfferDetailsWithKeys>|null
    */
    public function getRequests(): ?array {
        return $this->requests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('requests', $this->getRequests());
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
     * Sets the requests property value. The details of each offer that is being created is passed in under this container. Up to 25 offers can be created with one <strong>bulkCreateOffer</strong> call.
     * @param array<EbayOfferDetailsWithKeys>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->requests = $value;
    }

}
