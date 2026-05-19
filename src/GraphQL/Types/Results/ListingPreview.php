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

readonly class ListingPreview
{
    public function __construct(
        /** @var ListingPreviewAspect[] */
        public array $aspects = [],
        public ?ListingPreviewCategory $category = null,
        public ?ClientProvidedProductDetails $clientProvidedProductDetails = null,
        public ?string $description = null,
        /** @var string[] */
        public array $images = [],
        public ?string $mappingReferenceId = null,
        public ?ListingPreviewProduct $product = null,
        public ?string $sku = null,
        public ?string $title = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            aspects:                     array_map(fn($a) => ListingPreviewAspect::fromArray($a), $data['aspects'] ?? []),
            category:                    isset($data['category'])
                ? ListingPreviewCategory::fromArray($data['category'])
                : null,
            clientProvidedProductDetails: isset($data['clientProvidedProductDetails'])
                ? ClientProvidedProductDetails::fromArray($data['clientProvidedProductDetails'])
                : null,
            description:       $data['description'] ?? null,
            images:            $data['images'] ?? [],
            mappingReferenceId: $data['mappingReferenceId'] ?? null,
            product:           isset($data['product'])
                ? ListingPreviewProduct::fromArray($data['product'])
                : null,
            sku:   $data['sku'] ?? null,
            title: $data['title'] ?? null,
        );
    }
}
