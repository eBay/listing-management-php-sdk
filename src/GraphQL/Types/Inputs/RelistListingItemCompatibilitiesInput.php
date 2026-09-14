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

readonly class RelistListingItemCompatibilitiesInput
{
    public function __construct(
        /** @var RelistListingItemCompatibilityInput[] */
        public ?array $itemCompatibilities = null,
        public ?bool $replaceAll = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            itemCompatibilities: array_map(fn($item) => RelistListingItemCompatibilityInput::fromArray($item), $data['itemCompatibilities'] ?? []),
            replaceAll: $data['replaceAll'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'itemCompatibilities' => $this->itemCompatibilities !== null ? array_map(fn(RelistListingItemCompatibilityInput $item) => $item->toArray(), $this->itemCompatibilities) : null,
                'replaceAll' => $this->replaceAll,
            ],
            static fn($value) => $value !== null,
        );
    }
}
