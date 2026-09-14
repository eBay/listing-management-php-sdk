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

readonly class ShippingServiceDetails
{
    public function __construct(
        public ?int $rank = null,
        public ?ConvertedAmount $additionalUnitShippingCostAmount = null,
        /** @var ShippingLocation[] */
        public array $includedShipToLocations = [],
        public ?ConvertedAmount $shippingCostAmount = null,
        public ?ListingShippingService $shippingService = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            rank: $data['rank'] ?? null,
            additionalUnitShippingCostAmount: isset($data['additionalUnitShippingCostAmount']) ? ConvertedAmount::fromArray($data['additionalUnitShippingCostAmount']) : null,
            includedShipToLocations: array_map(fn($item) => ShippingLocation::fromArray($item), $data['includedShipToLocations'] ?? []),
            shippingCostAmount: isset($data['shippingCostAmount']) ? ConvertedAmount::fromArray($data['shippingCostAmount']) : null,
            shippingService: isset($data['shippingService']) ? ListingShippingService::fromArray($data['shippingService']) : null,
        );
    }
}
