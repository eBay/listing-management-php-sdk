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

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class CreateListingTermsInput
{
    public function __construct(
        public CreateListingItemLocationInput $itemLocation,
        public CreateListingLifecycleTermsInput $lifecycleTerms,
        public string $listingFormat,
        public ?CreateListingSellerContactInput $adsSellerContact = null,
        public ?CreateListingBestOfferTermsInput $bestOfferTerms = null,
        public ?CreateListingBuyerRestrictionsInput $buyerRestrictions = null,
        public ?CreateListingCharityInput $charity = null,
        public ?CreateListingCustomPoliciesInput $customPolicies = null,
        public ?CreateListingFulfillmentTermsInput $fulfillmentTerms = null,
        public ?bool $hideParticipation = null,
        /** @var array<int, mixed> */
        public ?array $internationalSiteVisibility = null,
        public ?CreateListingLocalDistanceInput $localListingDistance = null,
        public ?int $lotSize = null,
        public ?string $mappingReferenceId = null,
        public ?CreateListingPaymentTermsInput $paymentTerms = null,
        public ?CreateListingRegulatoryInput $regulatory = null,
        public ?CreateListingReturnTermsInput $returnTerms = null,
        public ?string $sellerCustomData = null,
        public ?CreateListingTaxTermsInput $taxTerms = null,
        public ?CreateListingVisualEnhancementsInput $visualEnhancements = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            adsSellerContact: isset($data['adsSellerContact']) ? CreateListingSellerContactInput::fromArray($data['adsSellerContact']) : null,
            bestOfferTerms: isset($data['bestOfferTerms']) ? CreateListingBestOfferTermsInput::fromArray($data['bestOfferTerms']) : null,
            buyerRestrictions: isset($data['buyerRestrictions']) ? CreateListingBuyerRestrictionsInput::fromArray($data['buyerRestrictions']) : null,
            charity: isset($data['charity']) ? CreateListingCharityInput::fromArray($data['charity']) : null,
            customPolicies: isset($data['customPolicies']) ? CreateListingCustomPoliciesInput::fromArray($data['customPolicies']) : null,
            fulfillmentTerms: isset($data['fulfillmentTerms']) ? CreateListingFulfillmentTermsInput::fromArray($data['fulfillmentTerms']) : null,
            hideParticipation: $data['hideParticipation'] ?? null,
            internationalSiteVisibility: $data['internationalSiteVisibility'] ?? [],
            itemLocation: CreateListingItemLocationInput::fromArray($data['itemLocation']),
            lifecycleTerms: CreateListingLifecycleTermsInput::fromArray($data['lifecycleTerms']),
            listingFormat: $data['listingFormat'],
            localListingDistance: isset($data['localListingDistance']) ? CreateListingLocalDistanceInput::fromArray($data['localListingDistance']) : null,
            lotSize: $data['lotSize'] ?? null,
            mappingReferenceId: $data['mappingReferenceId'] ?? null,
            paymentTerms: isset($data['paymentTerms']) ? CreateListingPaymentTermsInput::fromArray($data['paymentTerms']) : null,
            regulatory: isset($data['regulatory']) ? CreateListingRegulatoryInput::fromArray($data['regulatory']) : null,
            returnTerms: isset($data['returnTerms']) ? CreateListingReturnTermsInput::fromArray($data['returnTerms']) : null,
            sellerCustomData: $data['sellerCustomData'] ?? null,
            taxTerms: isset($data['taxTerms']) ? CreateListingTaxTermsInput::fromArray($data['taxTerms']) : null,
            visualEnhancements: isset($data['visualEnhancements']) ? CreateListingVisualEnhancementsInput::fromArray($data['visualEnhancements']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'adsSellerContact' => $this->adsSellerContact !== null ? (object)$this->adsSellerContact->toArray() : null,
                'bestOfferTerms' => $this->bestOfferTerms !== null ? (object)$this->bestOfferTerms->toArray() : null,
                'buyerRestrictions' => $this->buyerRestrictions !== null ? (object)$this->buyerRestrictions->toArray() : null,
                'charity' => $this->charity !== null ? (object)$this->charity->toArray() : null,
                'customPolicies' => $this->customPolicies !== null ? (object)$this->customPolicies->toArray() : null,
                'fulfillmentTerms' => $this->fulfillmentTerms !== null ? (object)$this->fulfillmentTerms->toArray() : null,
                'hideParticipation' => $this->hideParticipation,
                'internationalSiteVisibility' => $this->internationalSiteVisibility,
                'itemLocation' => (object)$this->itemLocation->toArray(),
                'lifecycleTerms' => (object)$this->lifecycleTerms->toArray(),
                'listingFormat' => $this->listingFormat,
                'localListingDistance' => $this->localListingDistance !== null ? (object)$this->localListingDistance->toArray() : null,
                'lotSize' => $this->lotSize,
                'mappingReferenceId' => $this->mappingReferenceId,
                'paymentTerms' => $this->paymentTerms !== null ? (object)$this->paymentTerms->toArray() : null,
                'regulatory' => $this->regulatory !== null ? (object)$this->regulatory->toArray() : null,
                'returnTerms' => $this->returnTerms !== null ? (object)$this->returnTerms->toArray() : null,
                'sellerCustomData' => $this->sellerCustomData,
                'taxTerms' => $this->taxTerms !== null ? (object)$this->taxTerms->toArray() : null,
                'visualEnhancements' => $this->visualEnhancements !== null ? (object)$this->visualEnhancements->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
