<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BulkInventorySuccessItem
{
    public function __construct(
        public ?string $listingId = null,
        public ?string $sku = null,
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
            sku:       $data['sku'] ?? null,
            warnings:  array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
