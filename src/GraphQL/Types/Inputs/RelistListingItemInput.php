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

readonly class RelistListingItemInput
{
    public function __construct(
        public ?RelistListingItemTermsInput $itemTerms = null,
        public ?RelistListingItemProductInput $product = null,
        public ?bool $removeItemFromListing = null,
        public ?string $sku = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            itemTerms: isset($data['itemTerms']) ? RelistListingItemTermsInput::fromArray($data['itemTerms']) : null,
            product: isset($data['product']) ? RelistListingItemProductInput::fromArray($data['product']) : null,
            removeItemFromListing: $data['removeItemFromListing'] ?? null,
            sku: $data['sku'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'itemTerms' => $this->itemTerms !== null ? (object)$this->itemTerms->toArray() : null,
                'product' => $this->product !== null ? (object)$this->product->toArray() : null,
                'removeItemFromListing' => $this->removeItemFromListing,
                'sku' => $this->sku,
            ],
            static fn($value) => $value !== null,
        );
    }
}
