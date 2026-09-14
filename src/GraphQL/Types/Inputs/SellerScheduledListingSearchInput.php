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

readonly class SellerScheduledListingSearchInput
{
    public function __construct(
        public ?SellerScheduledListingSearchFilterInput $filters = null,
        public ?PaginationInput $pagination = null,
        public ?SellerListingSortField $sort = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            filters: isset($data['filters']) ? SellerScheduledListingSearchFilterInput::fromArray($data['filters']) : null,
            pagination: isset($data['pagination']) ? PaginationInput::fromArray($data['pagination']) : null,
            sort: isset($data['sort']) ? SellerListingSortField::fromArray($data['sort']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'filters' => $this->filters !== null ? (object)$this->filters->toArray() : null,
                'pagination' => $this->pagination !== null ? (object)$this->pagination->toArray() : null,
                'sort' => $this->sort !== null ? (object)$this->sort->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
