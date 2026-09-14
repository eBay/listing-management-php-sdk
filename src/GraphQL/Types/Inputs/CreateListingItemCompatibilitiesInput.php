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

readonly class CreateListingItemCompatibilitiesInput
{
    public function __construct(
        /** @var CreateListingItemCompatibilityInput[] */
        public ?array $itemCompatibilities = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            itemCompatibilities: array_map(fn($item) => CreateListingItemCompatibilityInput::fromArray($item), $data['itemCompatibilities'] ?? []),
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'itemCompatibilities' => $this->itemCompatibilities !== null ? array_map(fn(CreateListingItemCompatibilityInput $item) => $item->toArray(), $this->itemCompatibilities) : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
