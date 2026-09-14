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

readonly class UpdateInventoryInput
{
    public function __construct(
        public ListingItemIdentifierInput $listingItemIdentifier,
        public ?int $availableQuantity = null,
        public ?string $fixedPrice = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            availableQuantity: $data['availableQuantity'] ?? null,
            fixedPrice: $data['fixedPrice'] ?? null,
            listingItemIdentifier: ListingItemIdentifierInput::fromArray($data['listingItemIdentifier']),
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'availableQuantity' => $this->availableQuantity,
                'fixedPrice' => $this->fixedPrice,
                'listingItemIdentifier' => (object)$this->listingItemIdentifier->toArray(),
            ],
            static fn($value) => $value !== null,
        );
    }
}
