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

readonly class UpdateListingInput
{
    public function __construct(
        public ListingIdentifierInput $listingIdentifier,
        public string $marketplace,
        public ?UpdateListingItemsInput $listingItems = null,
        public ?UpdateListingTermsInput $listingTerms = null,
        public ?UpdateListingVariationsInput $listingVariations = null,
        public ?ListingOptionsInput $options = null,
        public ?UpdateListingProductInput $product = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            listingIdentifier: ListingIdentifierInput::fromArray($data['listingIdentifier']),
            listingItems: isset($data['listingItems']) ? UpdateListingItemsInput::fromArray($data['listingItems']) : null,
            listingTerms: isset($data['listingTerms']) ? UpdateListingTermsInput::fromArray($data['listingTerms']) : null,
            listingVariations: isset($data['listingVariations']) ? UpdateListingVariationsInput::fromArray($data['listingVariations']) : null,
            marketplace: $data['marketplace'],
            options: isset($data['options']) ? ListingOptionsInput::fromArray($data['options']) : null,
            product: isset($data['product']) ? UpdateListingProductInput::fromArray($data['product']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'listingIdentifier' => (object)$this->listingIdentifier->toArray(),
                'listingItems' => $this->listingItems !== null ? (object)$this->listingItems->toArray() : null,
                'listingTerms' => $this->listingTerms !== null ? (object)$this->listingTerms->toArray() : null,
                'listingVariations' => $this->listingVariations !== null ? (object)$this->listingVariations->toArray() : null,
                'marketplace' => $this->marketplace,
                'options' => $this->options !== null ? (object)$this->options->toArray() : null,
                'product' => $this->product !== null ? (object)$this->product->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
