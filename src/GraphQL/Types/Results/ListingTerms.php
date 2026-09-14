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

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingTerms
{
    public function __construct(
        public BusinessPolicy|FulfillmentTerms|null $fulfillmentTerms = null,
        public BusinessPolicy|PaymentTerms|null $paymentTerms = null,
        public ?string $listingFormat = null,
        public ?ListingLifecycle $lifecycleTerms = null,
        public ?BestOfferTerms $bestOfferTerms = null,
        public ?ItemLocation $itemLocation = null,
        public ?FulfillmentTerms $listingFulfillmentTerms = null,
        public ?ReturnTerms $listingReturnTerms = null,
        public ?PaymentTerms $listingPaymentTerms = null,
        /** @var array<int, mixed> */
        public array $internationalSiteVisibility = [],
        public ?bool $hideParticipation = null,
        public ?ListingVisualEnhancements $visualEnhancements = null,
        public ?TaxInfo $taxTerms = null,
        public ?int $totalQuantityAvailable = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentTerms: isset($data['fulfillmentTerms']) ? FulfillmentTermsPolicy::fromArray($data['fulfillmentTerms']) : null,
            paymentTerms: isset($data['paymentTerms']) ? PaymentTermsPolicy::fromArray($data['paymentTerms']) : null,
            listingFormat: $data['listingFormat'] ?? null,
            lifecycleTerms: isset($data['lifecycleTerms']) ? ListingLifecycle::fromArray($data['lifecycleTerms']) : null,
            bestOfferTerms: isset($data['bestOfferTerms']) ? BestOfferTerms::fromArray($data['bestOfferTerms']) : null,
            itemLocation: isset($data['itemLocation']) ? ItemLocation::fromArray($data['itemLocation']) : null,
            listingFulfillmentTerms: isset($data['listingFulfillmentTerms']) ? FulfillmentTerms::fromArray($data['listingFulfillmentTerms']) : null,
            listingReturnTerms: isset($data['listingReturnTerms']) ? ReturnTerms::fromArray($data['listingReturnTerms']) : null,
            listingPaymentTerms: isset($data['listingPaymentTerms']) ? PaymentTerms::fromArray($data['listingPaymentTerms']) : null,
            internationalSiteVisibility: $data['internationalSiteVisibility'] ?? [],
            hideParticipation: $data['hideParticipation'] ?? null,
            visualEnhancements: isset($data['visualEnhancements']) ? ListingVisualEnhancements::fromArray($data['visualEnhancements']) : null,
            taxTerms: isset($data['taxTerms']) ? TaxInfo::fromArray($data['taxTerms']) : null,
            totalQuantityAvailable: $data['totalQuantityAvailable'] ?? null,
        );
    }
}
