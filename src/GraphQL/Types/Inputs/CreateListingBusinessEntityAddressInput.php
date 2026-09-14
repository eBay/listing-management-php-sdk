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

readonly class CreateListingBusinessEntityAddressInput
{
    public function __construct(
        public string $addressLine1,
        public string $city,
        public string $country,
        public string $postalCode,
        public ?string $addressLine2 = null,
        public ?string $stateOrProvince = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            addressLine1: $data['addressLine1'],
            addressLine2: $data['addressLine2'] ?? null,
            city: $data['city'],
            country: $data['country'],
            postalCode: $data['postalCode'],
            stateOrProvince: $data['stateOrProvince'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'addressLine1' => $this->addressLine1,
                'addressLine2' => $this->addressLine2,
                'city' => $this->city,
                'country' => $this->country,
                'postalCode' => $this->postalCode,
                'stateOrProvince' => $this->stateOrProvince,
            ],
            static fn($value) => $value !== null,
        );
    }
}
