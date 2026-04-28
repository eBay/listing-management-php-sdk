<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BulkInventoryFailureItem
{
    public function __construct(
        public ?string $listingId = null,
        public ?string $sku = null,
        /** @var ListingError[] */
        public array $errors = [],
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
            sku:       $data['sku'] ?? null,
            errors:    array_map(fn($e) => ListingError::fromArray($e), $data['errors'] ?? []),
            warnings:  array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
