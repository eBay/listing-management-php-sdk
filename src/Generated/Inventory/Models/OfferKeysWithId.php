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

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base request payload of the <strong>getListingFees</strong> call.
*/
class OfferKeysWithId implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<OfferKeyWithId>|null $offers This container is used to identify one or more (up to 250) unpublished offers for which expected listing fees will be retrieved. The user passes one or more <strong>offerId</strong> values (maximum of 250) in to this container to identify the unpublished offers in which to retrieve expected listing fees. This call is only applicable for offers in the unpublished state. <br><br>The call response gives aggregate fee amounts per eBay marketplace, and does not give fee information at the individual offer level.
    */
    private ?array $offers = null;
    
    /**
     * Instantiates a new OfferKeysWithId and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferKeysWithId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferKeysWithId {
        return new OfferKeysWithId();
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
            'offers' => fn(ParseNode $n) => $o->setOffers($n->getCollectionOfObjectValues([OfferKeyWithId::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the offers property value. This container is used to identify one or more (up to 250) unpublished offers for which expected listing fees will be retrieved. The user passes one or more <strong>offerId</strong> values (maximum of 250) in to this container to identify the unpublished offers in which to retrieve expected listing fees. This call is only applicable for offers in the unpublished state. <br><br>The call response gives aggregate fee amounts per eBay marketplace, and does not give fee information at the individual offer level.
     * @return array<OfferKeyWithId>|null
    */
    public function getOffers(): ?array {
        return $this->offers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('offers', $this->getOffers());
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
     * Sets the offers property value. This container is used to identify one or more (up to 250) unpublished offers for which expected listing fees will be retrieved. The user passes one or more <strong>offerId</strong> values (maximum of 250) in to this container to identify the unpublished offers in which to retrieve expected listing fees. This call is only applicable for offers in the unpublished state. <br><br>The call response gives aggregate fee amounts per eBay marketplace, and does not give fee information at the individual offer level.
     * @param array<OfferKeyWithId>|null $value Value to set for the offers property.
    */
    public function setOffers(?array $value): void {
        $this->offers = $value;
    }

}
