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
 * This type is used by the response payload of the <strong>createOffer</strong> and <strong>updateOffer</strong> calls. The <strong>offerId</strong> field contains the unique identifier for the offer if the offer is successfully created by the <strong>createOffer</strong> call. The <strong>warnings</strong> field contains any errors and/or warnings that may have been triggered by the call. <p> <span class="tablenote"><strong>Note:</strong> The <strong>offerId</strong> value is only returned with a successful <strong>createOffer</strong> call. This field will not be returned in the <strong>updateOffer </strong> response.</span></p>
*/
class OfferResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $offerId The unique identifier of the offer that was just created with a <strong>createOffer</strong> call. It is not returned if the <strong>createOffer</strong> call fails to create an offer. This identifier will be needed for many offer-related calls. <p> <span class="tablenote"><strong>Note:</strong> The <strong>offerId</strong> value is only returned with a successful <strong>createOffer</strong> call. This field will not be returned in the <strong>updateOffer </strong> response.</span></p>
    */
    private ?string $offerId = null;
    
    /**
     * @var array<ErrorDetailV3>|null $warnings This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new OfferResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferResponse {
        return new OfferResponse();
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
            'offerId' => fn(ParseNode $n) => $o->setOfferId($n->getStringValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the offerId property value. The unique identifier of the offer that was just created with a <strong>createOffer</strong> call. It is not returned if the <strong>createOffer</strong> call fails to create an offer. This identifier will be needed for many offer-related calls. <p> <span class="tablenote"><strong>Note:</strong> The <strong>offerId</strong> value is only returned with a successful <strong>createOffer</strong> call. This field will not be returned in the <strong>updateOffer </strong> response.</span></p>
     * @return string|null
    */
    public function getOfferId(): ?string {
        return $this->offerId;
    }

    /**
     * Gets the warnings property value. This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
     * @return array<ErrorDetailV3>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('offerId', $this->getOfferId());
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
     * Sets the offerId property value. The unique identifier of the offer that was just created with a <strong>createOffer</strong> call. It is not returned if the <strong>createOffer</strong> call fails to create an offer. This identifier will be needed for many offer-related calls. <p> <span class="tablenote"><strong>Note:</strong> The <strong>offerId</strong> value is only returned with a successful <strong>createOffer</strong> call. This field will not be returned in the <strong>updateOffer </strong> response.</span></p>
     * @param string|null $value Value to set for the offerId property.
    */
    public function setOfferId(?string $value): void {
        $this->offerId = $value;
    }

    /**
     * Sets the warnings property value. This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
