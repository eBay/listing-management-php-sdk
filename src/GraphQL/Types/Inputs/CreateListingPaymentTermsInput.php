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

readonly class CreateListingPaymentTermsInput
{
    public function __construct(
        public ?string $businessPolicyId = null,
        public ?bool $immediatePay = null,
        public ?CreateListingMotorVehicleDepositInput $motorVehicleDeposit = null,
        public ?string $paymentInstructions = null,
        /** @var array<int, mixed> */
        public ?array $paymentMethods = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            businessPolicyId: $data['businessPolicyId'] ?? null,
            immediatePay: $data['immediatePay'] ?? null,
            motorVehicleDeposit: isset($data['motorVehicleDeposit']) ? CreateListingMotorVehicleDepositInput::fromArray($data['motorVehicleDeposit']) : null,
            paymentInstructions: $data['paymentInstructions'] ?? null,
            paymentMethods: $data['paymentMethods'] ?? [],
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'businessPolicyId' => $this->businessPolicyId,
                'immediatePay' => $this->immediatePay,
                'motorVehicleDeposit' => $this->motorVehicleDeposit !== null ? (object)$this->motorVehicleDeposit->toArray() : null,
                'paymentInstructions' => $this->paymentInstructions,
                'paymentMethods' => $this->paymentMethods,
            ],
            static fn($value) => $value !== null,
        );
    }
}
