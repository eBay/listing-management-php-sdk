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

readonly class SellerScheduledListingSearchFilterInput
{
    public function __construct(
        public ?string $formatType = null,
        /** @var array<int, mixed> */
        public ?array $listingIds = null,
        /** @var array<int, mixed> */
        public ?array $marketplaces = null,
        public ?SellerListingDateTimeRangeInput $modifiedAtRange = null,
        /** @var array<int, mixed> */
        public ?array $primaryCategoryIds = null,
        /** @var array<int, mixed> */
        public ?array $skus = null,
        public ?SellerListingDateTimeRangeInput $startAtRange = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            formatType: $data['formatType'] ?? null,
            listingIds: $data['listingIds'] ?? [],
            marketplaces: $data['marketplaces'] ?? [],
            modifiedAtRange: isset($data['modifiedAtRange']) ? SellerListingDateTimeRangeInput::fromArray($data['modifiedAtRange']) : null,
            primaryCategoryIds: $data['primaryCategoryIds'] ?? [],
            skus: $data['skus'] ?? [],
            startAtRange: isset($data['startAtRange']) ? SellerListingDateTimeRangeInput::fromArray($data['startAtRange']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'formatType' => $this->formatType,
                'listingIds' => $this->listingIds,
                'marketplaces' => $this->marketplaces,
                'modifiedAtRange' => $this->modifiedAtRange !== null ? (object)$this->modifiedAtRange->toArray() : null,
                'primaryCategoryIds' => $this->primaryCategoryIds,
                'skus' => $this->skus,
                'startAtRange' => $this->startAtRange !== null ? (object)$this->startAtRange->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
