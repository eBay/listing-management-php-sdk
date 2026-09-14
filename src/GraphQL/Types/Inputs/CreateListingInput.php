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

readonly class CreateListingInput
{
    public function __construct(
        public string $idempotencyKey,
        public CreateListingItemsInput $listingItems,
        public CreateListingTermsInput $listingTerms,
        public string $marketplace,
        public CreateListingProductInput $product,
        public ?CreateListingVariationsInput $listingVariations = null,
        public ?ListingOptionsInput $options = null,
        public ?string $sku = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            idempotencyKey: $data['idempotencyKey'],
            listingItems: CreateListingItemsInput::fromArray($data['listingItems']),
            listingTerms: CreateListingTermsInput::fromArray($data['listingTerms']),
            listingVariations: isset($data['listingVariations']) ? CreateListingVariationsInput::fromArray($data['listingVariations']) : null,
            marketplace: $data['marketplace'],
            options: isset($data['options']) ? ListingOptionsInput::fromArray($data['options']) : null,
            product: CreateListingProductInput::fromArray($data['product']),
            sku: $data['sku'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'idempotencyKey' => $this->idempotencyKey,
                'listingItems' => (object)$this->listingItems->toArray(),
                'listingTerms' => (object)$this->listingTerms->toArray(),
                'listingVariations' => $this->listingVariations !== null ? (object)$this->listingVariations->toArray() : null,
                'marketplace' => $this->marketplace,
                'options' => $this->options !== null ? (object)$this->options->toArray() : null,
                'product' => (object)$this->product->toArray(),
                'sku' => $this->sku,
            ],
            static fn($value) => $value !== null,
        );
    }
}
