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

readonly class RelistListingShippingPackageSpecificationsInput
{
    public function __construct(
        public ?bool $irregularPackage = null,
        public ?string $measurementSystem = null,
        public ?RelistListingPackageDimensionsInput $packageDimensions = null,
        public ?string $packageType = null,
        public ?RelistListingPackageWeightInput $packageWeight = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            irregularPackage: $data['irregularPackage'] ?? null,
            measurementSystem: $data['measurementSystem'] ?? null,
            packageDimensions: isset($data['packageDimensions']) ? RelistListingPackageDimensionsInput::fromArray($data['packageDimensions']) : null,
            packageType: $data['packageType'] ?? null,
            packageWeight: isset($data['packageWeight']) ? RelistListingPackageWeightInput::fromArray($data['packageWeight']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'irregularPackage' => $this->irregularPackage,
                'measurementSystem' => $this->measurementSystem,
                'packageDimensions' => $this->packageDimensions !== null ? (object)$this->packageDimensions->toArray() : null,
                'packageType' => $this->packageType,
                'packageWeight' => $this->packageWeight !== null ? (object)$this->packageWeight->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
