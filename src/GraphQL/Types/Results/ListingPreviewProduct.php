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

readonly class ListingPreviewProduct
{
    public function __construct(
        public ?string $id = null,
        public ?string $epid = null,
        /** @var ListingPreviewProductAspect[] */
        public array $aspects = [],
        public ?ListingPreviewProductCategory $category = null,
        /** @var string[] */
        public array $imageUrls = [],
        public ?string $productId = null,
        public ?string $title = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id:        $data['id'] ?? null,
            epid:      $data['epid'] ?? null,
            aspects:   array_map(fn($a) => ListingPreviewProductAspect::fromArray($a), $data['aspects'] ?? []),
            category:  isset($data['category'])
                ? ListingPreviewProductCategory::fromArray($data['category'])
                : null,
            imageUrls: $data['imageUrls'] ?? [],
            productId: $data['productId'] ?? null,
            title:     $data['title'] ?? null,
        );
    }
}
