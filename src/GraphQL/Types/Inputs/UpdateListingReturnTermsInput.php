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

readonly class UpdateListingReturnTermsInput
{
    public function __construct(
        public ?string $businessPolicyId = null,
        public ?UpdateListingReturnTermsOptionsInput $domesticReturnTerms = null,
        public ?UpdateListingReturnTermsOptionsInput $internationalReturnTerms = null,
        public ?string $returnInstructions = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            businessPolicyId: $data['businessPolicyId'] ?? null,
            domesticReturnTerms: isset($data['domesticReturnTerms']) ? UpdateListingReturnTermsOptionsInput::fromArray($data['domesticReturnTerms']) : null,
            internationalReturnTerms: isset($data['internationalReturnTerms']) ? UpdateListingReturnTermsOptionsInput::fromArray($data['internationalReturnTerms']) : null,
            returnInstructions: $data['returnInstructions'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'businessPolicyId' => $this->businessPolicyId,
                'domesticReturnTerms' => $this->domesticReturnTerms !== null ? (object)$this->domesticReturnTerms->toArray() : null,
                'internationalReturnTerms' => $this->internationalReturnTerms !== null ? (object)$this->internationalReturnTerms->toArray() : null,
                'returnInstructions' => $this->returnInstructions,
            ],
            static fn($value) => $value !== null,
        );
    }
}
