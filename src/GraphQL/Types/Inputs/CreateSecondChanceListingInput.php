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

readonly class CreateSecondChanceListingInput
{
    public function __construct(
        public ListingIdentifierInput $listingIdentifier,
        public SecondChanceListingTermsInput $listingTerms,
        public string $marketplace,
        public string $recipientUserId,
        public ?ListingOptionsInput $options = null,
        public ?string $sellerMessage = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            listingIdentifier: ListingIdentifierInput::fromArray($data['listingIdentifier']),
            listingTerms: SecondChanceListingTermsInput::fromArray($data['listingTerms']),
            marketplace: $data['marketplace'],
            options: isset($data['options']) ? ListingOptionsInput::fromArray($data['options']) : null,
            recipientUserId: $data['recipientUserId'],
            sellerMessage: $data['sellerMessage'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'listingIdentifier' => (object)$this->listingIdentifier->toArray(),
                'listingTerms' => (object)$this->listingTerms->toArray(),
                'marketplace' => $this->marketplace,
                'options' => $this->options !== null ? (object)$this->options->toArray() : null,
                'recipientUserId' => $this->recipientUserId,
                'sellerMessage' => $this->sellerMessage,
            ],
            static fn($value) => $value !== null,
        );
    }
}
