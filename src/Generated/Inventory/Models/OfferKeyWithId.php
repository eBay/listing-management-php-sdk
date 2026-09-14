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
 * This type is used by the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees" target="_blank">getListingFees</a> call to indicate the unpublished offer(s) for which expected listing fees will be retrieved. The user passes in one or more <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkpublishoffer.offerkeywithid.offerid" target="_blank">offerId</a> values (a maximum of 250). See the <a href="https://pages.ebay.com/help/sell/fees.html" target="_blank">Standard selling fees</a> help page for more information on listing fees.
*/
class OfferKeyWithId implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $offerId The unique identifier of an unpublished offer for which expected listing fees will be retrieved. One to 250 <strong>offerId</strong> values can be passed in to the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees.offerkeyswithid.offers" target="_blank">offers</a> container for one <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees.offerkeyswithid.offers" target="_blank">getListingFees</a> call. <br><br>Use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> method to retrieve offer IDs.<br><br><span class="tablenote"><b>Note:</b> Errors will occur if <strong>offerId</strong> values representing published offers are passed in.</span>
    */
    private ?string $offerId = null;
    
    /**
     * Instantiates a new OfferKeyWithId and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferKeyWithId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferKeyWithId {
        return new OfferKeyWithId();
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
        ];
    }

    /**
     * Gets the offerId property value. The unique identifier of an unpublished offer for which expected listing fees will be retrieved. One to 250 <strong>offerId</strong> values can be passed in to the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees.offerkeyswithid.offers" target="_blank">offers</a> container for one <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees.offerkeyswithid.offers" target="_blank">getListingFees</a> call. <br><br>Use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> method to retrieve offer IDs.<br><br><span class="tablenote"><b>Note:</b> Errors will occur if <strong>offerId</strong> values representing published offers are passed in.</span>
     * @return string|null
    */
    public function getOfferId(): ?string {
        return $this->offerId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('offerId', $this->getOfferId());
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
     * Sets the offerId property value. The unique identifier of an unpublished offer for which expected listing fees will be retrieved. One to 250 <strong>offerId</strong> values can be passed in to the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees.offerkeyswithid.offers" target="_blank">offers</a> container for one <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getlistingfees.offerkeyswithid.offers" target="_blank">getListingFees</a> call. <br><br>Use the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> method to retrieve offer IDs.<br><br><span class="tablenote"><b>Note:</b> Errors will occur if <strong>offerId</strong> values representing published offers are passed in.</span>
     * @param string|null $value Value to set for the offerId property.
    */
    public function setOfferId(?string $value): void {
        $this->offerId = $value;
    }

}
