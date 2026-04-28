<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base response payload for the <strong>getListingFees</strong> call. 
*/
class FeesSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<FeeSummary>|null $feeSummaries This container consists of an array of one or more listing fees that the seller can expect to pay for unpublished offers specified in the call request. Many fee types will get returned even when they are <code>0.0</code>.
    */
    private ?array $feeSummaries = null;
    
    /**
     * Instantiates a new FeesSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeesSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeesSummaryResponse {
        return new FeesSummaryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feeSummaries property value. This container consists of an array of one or more listing fees that the seller can expect to pay for unpublished offers specified in the call request. Many fee types will get returned even when they are <code>0.0</code>.
     * @return array<FeeSummary>|null
    */
    public function getFeeSummaries(): ?array {
        return $this->feeSummaries;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feeSummaries' => fn(ParseNode $n) => $o->setFeeSummaries($n->getCollectionOfObjectValues([FeeSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('feeSummaries', $this->getFeeSummaries());
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
     * Sets the feeSummaries property value. This container consists of an array of one or more listing fees that the seller can expect to pay for unpublished offers specified in the call request. Many fee types will get returned even when they are <code>0.0</code>.
     * @param array<FeeSummary>|null $value Value to set for the feeSummaries property.
    */
    public function setFeeSummaries(?array $value): void {
        $this->feeSummaries = $value;
    }

}
