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

readonly class RelistListingRegulatoryInput
{
    public function __construct(
        /** @var array<int, mixed> */
        public ?array $documentIds = null,
        public ?RelistListingEnergyEfficiencyLabelInput $energyEfficiencyLabel = null,
        public ?RelistListingHazardousMaterialInput $hazardousMaterial = null,
        public ?RelistListingManufacturerInput $manufacturer = null,
        public ?RelistListingProductSafetyInput $productSafety = null,
        public ?float $repairIndexScore = null,
        /** @var RelistListingResponsiblePersonInput[] */
        public ?array $responsiblePersons = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            documentIds: $data['documentIds'] ?? [],
            energyEfficiencyLabel: isset($data['energyEfficiencyLabel']) ? RelistListingEnergyEfficiencyLabelInput::fromArray($data['energyEfficiencyLabel']) : null,
            hazardousMaterial: isset($data['hazardousMaterial']) ? RelistListingHazardousMaterialInput::fromArray($data['hazardousMaterial']) : null,
            manufacturer: isset($data['manufacturer']) ? RelistListingManufacturerInput::fromArray($data['manufacturer']) : null,
            productSafety: isset($data['productSafety']) ? RelistListingProductSafetyInput::fromArray($data['productSafety']) : null,
            repairIndexScore: $data['repairIndexScore'] ?? null,
            responsiblePersons: array_map(fn($item) => RelistListingResponsiblePersonInput::fromArray($item), $data['responsiblePersons'] ?? []),
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'documentIds' => $this->documentIds,
                'energyEfficiencyLabel' => $this->energyEfficiencyLabel !== null ? (object)$this->energyEfficiencyLabel->toArray() : null,
                'hazardousMaterial' => $this->hazardousMaterial !== null ? (object)$this->hazardousMaterial->toArray() : null,
                'manufacturer' => $this->manufacturer !== null ? (object)$this->manufacturer->toArray() : null,
                'productSafety' => $this->productSafety !== null ? (object)$this->productSafety->toArray() : null,
                'repairIndexScore' => $this->repairIndexScore,
                'responsiblePersons' => $this->responsiblePersons !== null ? array_map(fn(RelistListingResponsiblePersonInput $item) => $item->toArray(), $this->responsiblePersons) : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
