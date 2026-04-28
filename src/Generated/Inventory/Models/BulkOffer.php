<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base request of the <strong>bulkPublishOffer</strong> method, which is used to publish up to 25 different offers.
*/
class BulkOffer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<OfferKeyWithId>|null $requests This container is used to pass in an array of offers to publish. Up to 25 offers can be published with one <strong>bulkPublishOffer</strong> method.
    */
    private ?array $requests = null;
    
    /**
     * Instantiates a new BulkOffer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkOffer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkOffer {
        return new BulkOffer();
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
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([OfferKeyWithId::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the requests property value. This container is used to pass in an array of offers to publish. Up to 25 offers can be published with one <strong>bulkPublishOffer</strong> method.
     * @return array<OfferKeyWithId>|null
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
     * Sets the requests property value. This container is used to pass in an array of offers to publish. Up to 25 offers can be published with one <strong>bulkPublishOffer</strong> method.
     * @param array<OfferKeyWithId>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->requests = $value;
    }

}
