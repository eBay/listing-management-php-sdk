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

readonly class UpdateListingTermsInput
{
    public function __construct(
        public ?UpdateListingSellerContactInput $adsSellerContact = null,
        public ?UpdateListingBestOfferTermsInput $bestOfferTerms = null,
        public ?UpdateListingBuyerRestrictionsInput $buyerRestrictions = null,
        public ?UpdateListingCharityInput $charity = null,
        public ?UpdateListingCustomPoliciesInput $customPolicies = null,
        public ?UpdateListingFulfillmentTermsInput $fulfillmentTerms = null,
        public ?bool $hideParticipation = null,
        /** @var array<int, mixed> */
        public ?array $internationalSiteVisibility = null,
        public ?UpdateListingItemLocationInput $itemLocation = null,
        public ?UpdateListingLifecycleTermsInput $lifecycleTerms = null,
        public ?UpdateListingLocalDistanceInput $localListingDistance = null,
        public ?int $lotSize = null,
        public ?string $mappingReferenceId = null,
        public ?UpdateListingPaymentTermsInput $paymentTerms = null,
        public ?UpdateListingRegulatoryInput $regulatory = null,
        public ?UpdateListingReturnTermsInput $returnTerms = null,
        public ?string $sellerCustomData = null,
        public ?UpdateListingTaxTermsInput $taxTerms = null,
        public ?UpdateListingVisualEnhancementsInput $visualEnhancements = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            adsSellerContact: isset($data['adsSellerContact']) ? UpdateListingSellerContactInput::fromArray($data['adsSellerContact']) : null,
            bestOfferTerms: isset($data['bestOfferTerms']) ? UpdateListingBestOfferTermsInput::fromArray($data['bestOfferTerms']) : null,
            buyerRestrictions: isset($data['buyerRestrictions']) ? UpdateListingBuyerRestrictionsInput::fromArray($data['buyerRestrictions']) : null,
            charity: isset($data['charity']) ? UpdateListingCharityInput::fromArray($data['charity']) : null,
            customPolicies: isset($data['customPolicies']) ? UpdateListingCustomPoliciesInput::fromArray($data['customPolicies']) : null,
            fulfillmentTerms: isset($data['fulfillmentTerms']) ? UpdateListingFulfillmentTermsInput::fromArray($data['fulfillmentTerms']) : null,
            hideParticipation: $data['hideParticipation'] ?? null,
            internationalSiteVisibility: $data['internationalSiteVisibility'] ?? [],
            itemLocation: isset($data['itemLocation']) ? UpdateListingItemLocationInput::fromArray($data['itemLocation']) : null,
            lifecycleTerms: isset($data['lifecycleTerms']) ? UpdateListingLifecycleTermsInput::fromArray($data['lifecycleTerms']) : null,
            localListingDistance: isset($data['localListingDistance']) ? UpdateListingLocalDistanceInput::fromArray($data['localListingDistance']) : null,
            lotSize: $data['lotSize'] ?? null,
            mappingReferenceId: $data['mappingReferenceId'] ?? null,
            paymentTerms: isset($data['paymentTerms']) ? UpdateListingPaymentTermsInput::fromArray($data['paymentTerms']) : null,
            regulatory: isset($data['regulatory']) ? UpdateListingRegulatoryInput::fromArray($data['regulatory']) : null,
            returnTerms: isset($data['returnTerms']) ? UpdateListingReturnTermsInput::fromArray($data['returnTerms']) : null,
            sellerCustomData: $data['sellerCustomData'] ?? null,
            taxTerms: isset($data['taxTerms']) ? UpdateListingTaxTermsInput::fromArray($data['taxTerms']) : null,
            visualEnhancements: isset($data['visualEnhancements']) ? UpdateListingVisualEnhancementsInput::fromArray($data['visualEnhancements']) : null,
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
                'itemLocation' => $this->itemLocation !== null ? (object)$this->itemLocation->toArray() : null,
                'lifecycleTerms' => $this->lifecycleTerms !== null ? (object)$this->lifecycleTerms->toArray() : null,
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
