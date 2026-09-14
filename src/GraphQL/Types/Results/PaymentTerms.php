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

readonly class PaymentTerms
{
    public function __construct(
        public ?bool $immediatePay = null,
        public ?BusinessPolicy $businessPolicy = null,
        public ?string $paymentInstructions = null,
        /** @var array<int, mixed> */
        public array $listingPaymentMethods = [],
        public ?MotorVehicleDeposit $motorVehicleDeposit = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            immediatePay: $data['immediatePay'] ?? null,
            businessPolicy: isset($data['businessPolicy']) ? BusinessPolicy::fromArray($data['businessPolicy']) : null,
            paymentInstructions: $data['paymentInstructions'] ?? null,
            listingPaymentMethods: $data['listingPaymentMethods'] ?? [],
            motorVehicleDeposit: isset($data['motorVehicleDeposit']) ? MotorVehicleDeposit::fromArray($data['motorVehicleDeposit']) : null,
        );
    }
}
