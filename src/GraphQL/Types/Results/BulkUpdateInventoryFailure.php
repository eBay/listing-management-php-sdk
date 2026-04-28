<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BulkUpdateInventoryFailure extends BulkUpdateInventoryOutput
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var BulkInventoryFailureItem[] */
        public array $failures = [],
    ) {}

    public function getTypename(): string { return 'BulkUpdateInventoryFailure'; }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            failures:     array_map(fn($f) => BulkInventoryFailureItem::fromArray($f), $data['failures'] ?? []),
        );
    }
}
