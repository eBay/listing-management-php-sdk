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

readonly class UpdateListingRegulatoryInput
{
    public function __construct(
        /** @var array<int, mixed> */
        public ?array $documentIds = null,
        public ?UpdateListingEnergyEfficiencyLabelInput $energyEfficiencyLabel = null,
        public ?UpdateListingHazardousMaterialInput $hazardousMaterial = null,
        public ?UpdateListingManufacturerInput $manufacturer = null,
        public ?UpdateListingProductSafetyInput $productSafety = null,
        public ?float $repairIndexScore = null,
        /** @var UpdateListingResponsiblePersonInput[] */
        public ?array $responsiblePersons = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            documentIds: $data['documentIds'] ?? [],
            energyEfficiencyLabel: isset($data['energyEfficiencyLabel']) ? UpdateListingEnergyEfficiencyLabelInput::fromArray($data['energyEfficiencyLabel']) : null,
            hazardousMaterial: isset($data['hazardousMaterial']) ? UpdateListingHazardousMaterialInput::fromArray($data['hazardousMaterial']) : null,
            manufacturer: isset($data['manufacturer']) ? UpdateListingManufacturerInput::fromArray($data['manufacturer']) : null,
            productSafety: isset($data['productSafety']) ? UpdateListingProductSafetyInput::fromArray($data['productSafety']) : null,
            repairIndexScore: $data['repairIndexScore'] ?? null,
            responsiblePersons: array_map(fn($item) => UpdateListingResponsiblePersonInput::fromArray($item), $data['responsiblePersons'] ?? []),
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
                'responsiblePersons' => $this->responsiblePersons !== null ? array_map(fn(UpdateListingResponsiblePersonInput $item) => $item->toArray(), $this->responsiblePersons) : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
