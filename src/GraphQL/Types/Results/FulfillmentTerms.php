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

readonly class FulfillmentTerms
{
    public function __construct(
        public ?ShippingPackageSpec $packageSpecifications = null,
        public ?ShippingTerms $shippingTerms = null,
        public ?bool $digitalDeliverySupported = null,
        public ?bool $globalShippingSupported = null,
        public ?bool $freeShippingAvailable = null,
        public ?bool $inStorePickupSupported = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            packageSpecifications: isset($data['packageSpecifications']) ? ShippingPackageSpec::fromArray($data['packageSpecifications']) : null,
            shippingTerms: isset($data['shippingTerms']) ? ShippingTerms::fromArray($data['shippingTerms']) : null,
            digitalDeliverySupported: $data['digitalDeliverySupported'] ?? null,
            globalShippingSupported: $data['globalShippingSupported'] ?? null,
            freeShippingAvailable: $data['freeShippingAvailable'] ?? null,
            inStorePickupSupported: $data['inStorePickupSupported'] ?? null,
        );
    }
}
