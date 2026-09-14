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

readonly class UpdateListingEnergyEfficiencyLabelInput
{
    public function __construct(
        public ?string $imageDescription = null,
        public ?string $imageUrl = null,
        public ?string $productInformationSheetUrl = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            imageDescription: $data['imageDescription'] ?? null,
            imageUrl: $data['imageUrl'] ?? null,
            productInformationSheetUrl: $data['productInformationSheetUrl'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'imageDescription' => $this->imageDescription,
                'imageUrl' => $this->imageUrl,
                'productInformationSheetUrl' => $this->productInformationSheetUrl,
            ],
            static fn($value) => $value !== null,
        );
    }
}
