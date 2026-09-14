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

readonly class CreateListingItemConditionInput
{
    public function __construct(
        public ?string $conditionDescription = null,
        /** @var CreateListingItemConditionDescriptorInput[] */
        public ?array $conditionDescriptors = null,
        public ?string $conditionId = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            conditionDescription: $data['conditionDescription'] ?? null,
            conditionDescriptors: array_map(fn($item) => CreateListingItemConditionDescriptorInput::fromArray($item), $data['conditionDescriptors'] ?? []),
            conditionId: $data['conditionId'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'conditionDescription' => $this->conditionDescription,
                'conditionDescriptors' => $this->conditionDescriptors !== null ? array_map(fn(CreateListingItemConditionDescriptorInput $item) => $item->toArray(), $this->conditionDescriptors) : null,
                'conditionId' => $this->conditionId,
            ],
            static fn($value) => $value !== null,
        );
    }
}
