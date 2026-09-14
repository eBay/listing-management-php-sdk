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

readonly class RelistListingItemTermsInput
{
    public function __construct(
        public ?RelistListingItemAvailabilityInput $availability = null,
        public ?RelistListingExtendedProducerResponsibilityInput $extendedProducerResponsibility = null,
        public ?RelistListingItemPricingTermsInput $pricingTerms = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            availability: isset($data['availability']) ? RelistListingItemAvailabilityInput::fromArray($data['availability']) : null,
            extendedProducerResponsibility: isset($data['extendedProducerResponsibility']) ? RelistListingExtendedProducerResponsibilityInput::fromArray($data['extendedProducerResponsibility']) : null,
            pricingTerms: isset($data['pricingTerms']) ? RelistListingItemPricingTermsInput::fromArray($data['pricingTerms']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'availability' => $this->availability !== null ? (object)$this->availability->toArray() : null,
                'extendedProducerResponsibility' => $this->extendedProducerResponsibility !== null ? (object)$this->extendedProducerResponsibility->toArray() : null,
                'pricingTerms' => $this->pricingTerms !== null ? (object)$this->pricingTerms->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
