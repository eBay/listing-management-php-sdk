<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BulkInventoryFailureItem
{
    public function __construct(
        /** @var array{listingId: ?string, sku: ?string}|null */
        public ?array $listingItemIdentifier = null,
        /** @var ListingViolation[] */
        public array $violations = [],
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingItemIdentifier: $data['listingItemIdentifier'] ?? null,
            violations:            array_map(fn($v) => ListingViolation::fromArray($v), $data['violations'] ?? []),
            warnings:              array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
