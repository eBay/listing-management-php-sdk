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

readonly class UpdateListingSellerContactHoursInput
{
    public function __construct(
        public ?bool $anyTime = null,
        public ?string $supportHoursEndAt = null,
        public ?string $supportHoursStartAt = null,
        public ?string $supportOnDays = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            anyTime: $data['anyTime'] ?? null,
            supportHoursEndAt: $data['supportHoursEndAt'] ?? null,
            supportHoursStartAt: $data['supportHoursStartAt'] ?? null,
            supportOnDays: $data['supportOnDays'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'anyTime' => $this->anyTime,
                'supportHoursEndAt' => $this->supportHoursEndAt,
                'supportHoursStartAt' => $this->supportHoursStartAt,
                'supportOnDays' => $this->supportOnDays,
            ],
            static fn($value) => $value !== null,
        );
    }
}
