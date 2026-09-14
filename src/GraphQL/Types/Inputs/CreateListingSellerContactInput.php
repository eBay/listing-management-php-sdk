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

readonly class CreateListingSellerContactInput
{
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $companyName = null,
        public ?bool $contactByEmailEnabled = null,
        public ?string $country = null,
        public ?string $county = null,
        public ?string $phone = null,
        public ?CreateListingSellerContactHoursInput $primarySellerContactHours = null,
        public ?CreateListingSellerContactHoursInput $secondarySellerContactHours = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            addressLine1: $data['addressLine1'] ?? null,
            addressLine2: $data['addressLine2'] ?? null,
            companyName: $data['companyName'] ?? null,
            contactByEmailEnabled: $data['contactByEmailEnabled'] ?? null,
            country: $data['country'] ?? null,
            county: $data['county'] ?? null,
            phone: $data['phone'] ?? null,
            primarySellerContactHours: isset($data['primarySellerContactHours']) ? CreateListingSellerContactHoursInput::fromArray($data['primarySellerContactHours']) : null,
            secondarySellerContactHours: isset($data['secondarySellerContactHours']) ? CreateListingSellerContactHoursInput::fromArray($data['secondarySellerContactHours']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'addressLine1' => $this->addressLine1,
                'addressLine2' => $this->addressLine2,
                'companyName' => $this->companyName,
                'contactByEmailEnabled' => $this->contactByEmailEnabled,
                'country' => $this->country,
                'county' => $this->county,
                'phone' => $this->phone,
                'primarySellerContactHours' => $this->primarySellerContactHours !== null ? (object)$this->primarySellerContactHours->toArray() : null,
                'secondarySellerContactHours' => $this->secondarySellerContactHours !== null ? (object)$this->secondarySellerContactHours->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
