<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BulkUpdateInventoryPartialFailure extends BulkUpdateInventoryOutput
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var BulkInventorySuccessItem[] */
        public array $successes = [],
        /** @var BulkInventoryFailureItem[] */
        public array $failures = [],
    ) {}

    public function getTypename(): string { return 'BulkUpdateInventoryPartialFailure'; }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            successes:    array_map(fn($s) => BulkInventorySuccessItem::fromArray($s), $data['successes'] ?? []),
            failures:     array_map(fn($f) => BulkInventoryFailureItem::fromArray($f), $data['failures'] ?? []),
        );
    }
}
