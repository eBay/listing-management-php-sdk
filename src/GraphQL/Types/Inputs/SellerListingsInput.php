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

readonly class SellerListingsInput
{
    public function __construct(
        /** @var SellerListingInput[] */
        public array $listings,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return [
            'listings' => array_map(fn(SellerListingInput $l) => $l->toArray(), $this->listings),
        ];
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            listings: array_map(fn($i) => SellerListingInput::fromArray($i), $data['listings'] ?? []),
        );
    }
}
