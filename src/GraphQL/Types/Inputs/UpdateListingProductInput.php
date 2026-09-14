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

readonly class UpdateListingProductInput
{
    public function __construct(
        /** @var NameValuesPairInput[] */
        public ?array $aspects = null,
        public ?UpdateListingProductCategoriesInput $categories = null,
        public ?string $description = null,
        /** @var array<int, mixed> */
        public ?array $imageUrls = null,
        public ?UpdateListingItemConditionInput $itemCondition = null,
        public ?UpdateListingItemCompatibilitiesInput $listingCompatibilities = null,
        public ?UpdateListingMotorVehicleIdentifierInput $motorVehicleIdentifier = null,
        public ?string $title = null,
        /** @var array<int, mixed> */
        public ?array $videoIds = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspects: array_map(fn($item) => NameValuesPairInput::fromArray($item), $data['aspects'] ?? []),
            categories: isset($data['categories']) ? UpdateListingProductCategoriesInput::fromArray($data['categories']) : null,
            description: $data['description'] ?? null,
            imageUrls: $data['imageUrls'] ?? [],
            itemCondition: isset($data['itemCondition']) ? UpdateListingItemConditionInput::fromArray($data['itemCondition']) : null,
            listingCompatibilities: isset($data['listingCompatibilities']) ? UpdateListingItemCompatibilitiesInput::fromArray($data['listingCompatibilities']) : null,
            motorVehicleIdentifier: isset($data['motorVehicleIdentifier']) ? UpdateListingMotorVehicleIdentifierInput::fromArray($data['motorVehicleIdentifier']) : null,
            title: $data['title'] ?? null,
            videoIds: $data['videoIds'] ?? [],
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'aspects' => $this->aspects !== null ? array_map(fn(NameValuesPairInput $item) => $item->toArray(), $this->aspects) : null,
                'categories' => $this->categories !== null ? (object)$this->categories->toArray() : null,
                'description' => $this->description,
                'imageUrls' => $this->imageUrls,
                'itemCondition' => $this->itemCondition !== null ? (object)$this->itemCondition->toArray() : null,
                'listingCompatibilities' => $this->listingCompatibilities !== null ? (object)$this->listingCompatibilities->toArray() : null,
                'motorVehicleIdentifier' => $this->motorVehicleIdentifier !== null ? (object)$this->motorVehicleIdentifier->toArray() : null,
                'title' => $this->title,
                'videoIds' => $this->videoIds,
            ],
            static fn($value) => $value !== null,
        );
    }
}
