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

readonly class ClientProvidedProductDetails
{
    public function __construct(
        public ?string $category = null,
        /** @var ProductAspect[] */
        public array $aspects = [],
        public ?ExternalProductIdentifier $externalProductIdentifier = null,
        /** @var string[] */
        public array $images = [],
        public ?string $sku = null,
        public ?string $title = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            category:                  $data['category'] ?? null,
            aspects:                   array_map(fn($a) => ProductAspect::fromArray($a), $data['aspects'] ?? []),
            externalProductIdentifier: isset($data['externalProductIdentifier'])
                ? ExternalProductIdentifier::fromArray($data['externalProductIdentifier'])
                : null,
            images: $data['images'] ?? [],
            sku:    $data['sku'] ?? null,
            title:  $data['title'] ?? null,
        );
    }
}
