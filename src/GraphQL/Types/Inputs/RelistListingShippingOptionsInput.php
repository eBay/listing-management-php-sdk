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

readonly class RelistListingShippingOptionsInput
{
    public function __construct(
        public ?string $combinedShippingRuleId = null,
        public ?string $costType = null,
        public ?string $packageHandlingCost = null,
        public ?bool $promotionalShipping = null,
        public ?string $rateTableId = null,
        public ?string $shippingDiscountRuleId = null,
        public ?string $shippingRateTableId = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            combinedShippingRuleId: $data['combinedShippingRuleId'] ?? null,
            costType: $data['costType'] ?? null,
            packageHandlingCost: $data['packageHandlingCost'] ?? null,
            promotionalShipping: $data['promotionalShipping'] ?? null,
            rateTableId: $data['rateTableId'] ?? null,
            shippingDiscountRuleId: $data['shippingDiscountRuleId'] ?? null,
            shippingRateTableId: $data['shippingRateTableId'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'combinedShippingRuleId' => $this->combinedShippingRuleId,
                'costType' => $this->costType,
                'packageHandlingCost' => $this->packageHandlingCost,
                'promotionalShipping' => $this->promotionalShipping,
                'rateTableId' => $this->rateTableId,
                'shippingDiscountRuleId' => $this->shippingDiscountRuleId,
                'shippingRateTableId' => $this->shippingRateTableId,
            ],
            static fn($value) => $value !== null,
        );
    }
}
