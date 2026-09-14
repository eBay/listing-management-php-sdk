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

readonly class CreateListingShippingTermsInput
{
    public function __construct(
        public ?CreateShippingBusinessPolicyInput $businessPolicy = null,
        public ?bool $buyerResponsibleForShipping = null,
        /** @var ListingShippingLocationInput[] */
        public ?array $excludedShipToLocations = null,
        public ?string $handlingTimeDuration = null,
        /** @var ListingShippingLocationInput[] */
        public ?array $includedShipToLocations = null,
        public ?CreateListingShippingOptionsInput $marketplaceShippingOptions = null,
        public ?CreateListingShippingOptionsInput $nonMarketplaceShippingOptions = null,
        /** @var CreateListingShippingServiceInput[] */
        public ?array $shippingServices = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            businessPolicy: isset($data['businessPolicy']) ? CreateShippingBusinessPolicyInput::fromArray($data['businessPolicy']) : null,
            buyerResponsibleForShipping: $data['buyerResponsibleForShipping'] ?? null,
            excludedShipToLocations: array_map(fn($item) => ListingShippingLocationInput::fromArray($item), $data['excludedShipToLocations'] ?? []),
            handlingTimeDuration: $data['handlingTimeDuration'] ?? null,
            includedShipToLocations: array_map(fn($item) => ListingShippingLocationInput::fromArray($item), $data['includedShipToLocations'] ?? []),
            marketplaceShippingOptions: isset($data['marketplaceShippingOptions']) ? CreateListingShippingOptionsInput::fromArray($data['marketplaceShippingOptions']) : null,
            nonMarketplaceShippingOptions: isset($data['nonMarketplaceShippingOptions']) ? CreateListingShippingOptionsInput::fromArray($data['nonMarketplaceShippingOptions']) : null,
            shippingServices: array_map(fn($item) => CreateListingShippingServiceInput::fromArray($item), $data['shippingServices'] ?? []),
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'businessPolicy' => $this->businessPolicy !== null ? (object)$this->businessPolicy->toArray() : null,
                'buyerResponsibleForShipping' => $this->buyerResponsibleForShipping,
                'excludedShipToLocations' => $this->excludedShipToLocations !== null ? array_map(fn(ListingShippingLocationInput $item) => $item->toArray(), $this->excludedShipToLocations) : null,
                'handlingTimeDuration' => $this->handlingTimeDuration,
                'includedShipToLocations' => $this->includedShipToLocations !== null ? array_map(fn(ListingShippingLocationInput $item) => $item->toArray(), $this->includedShipToLocations) : null,
                'marketplaceShippingOptions' => $this->marketplaceShippingOptions !== null ? (object)$this->marketplaceShippingOptions->toArray() : null,
                'nonMarketplaceShippingOptions' => $this->nonMarketplaceShippingOptions !== null ? (object)$this->nonMarketplaceShippingOptions->toArray() : null,
                'shippingServices' => $this->shippingServices !== null ? array_map(fn(CreateListingShippingServiceInput $item) => $item->toArray(), $this->shippingServices) : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
