<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide shipping specification details, such as the weekly cut-off schedule for order handling and cut-off override(s), for a fulfillment center location. 
*/
class FulfillmentCenterSpecifications implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SameDayShippingCutOffTimes|null $sameDayShippingCutOffTimes This type is used by the <b>createInventoryLocation</b> call to specify cut-off time(s) for an inventory location, as well as any overrides for these times.
    */
    private ?SameDayShippingCutOffTimes $sameDayShippingCutOffTimes = null;
    
    /**
     * Instantiates a new FulfillmentCenterSpecifications and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FulfillmentCenterSpecifications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FulfillmentCenterSpecifications {
        return new FulfillmentCenterSpecifications();
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
            'sameDayShippingCutOffTimes' => fn(ParseNode $n) => $o->setSameDayShippingCutOffTimes($n->getObjectValue([SameDayShippingCutOffTimes::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the sameDayShippingCutOffTimes property value. This type is used by the <b>createInventoryLocation</b> call to specify cut-off time(s) for an inventory location, as well as any overrides for these times.
     * @return SameDayShippingCutOffTimes|null
    */
    public function getSameDayShippingCutOffTimes(): ?SameDayShippingCutOffTimes {
        return $this->sameDayShippingCutOffTimes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('sameDayShippingCutOffTimes', $this->getSameDayShippingCutOffTimes());
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
     * Sets the sameDayShippingCutOffTimes property value. This type is used by the <b>createInventoryLocation</b> call to specify cut-off time(s) for an inventory location, as well as any overrides for these times.
     * @param SameDayShippingCutOffTimes|null $value Value to set for the sameDayShippingCutOffTimes property.
    */
    public function setSameDayShippingCutOffTimes(?SameDayShippingCutOffTimes $value): void {
        $this->sameDayShippingCutOffTimes = $value;
    }

}
