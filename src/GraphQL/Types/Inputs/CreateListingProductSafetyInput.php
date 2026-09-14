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

readonly class CreateListingProductSafetyInput
{
    public function __construct(
        public ?string $additionalInformation = null,
        /** @var array<int, mixed> */
        public ?array $pictogramCodes = null,
        /** @var array<int, mixed> */
        public ?array $statementCodes = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            additionalInformation: $data['additionalInformation'] ?? null,
            pictogramCodes: $data['pictogramCodes'] ?? [],
            statementCodes: $data['statementCodes'] ?? [],
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'additionalInformation' => $this->additionalInformation,
                'pictogramCodes' => $this->pictogramCodes,
                'statementCodes' => $this->statementCodes,
            ],
            static fn($value) => $value !== null,
        );
    }
}
