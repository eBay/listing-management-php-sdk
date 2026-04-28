<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BulkUpdateInventorySuccess extends BulkUpdateInventoryOutput
{
    public function __construct(
        /** @var BulkInventorySuccessItem[] */
        public array $successes = [],
    ) {}

    public function getTypename(): string { return 'BulkUpdateInventorySuccess'; }

    public static function fromArray(array $data): self
    {
        return new self(
            successes: array_map(fn($s) => BulkInventorySuccessItem::fromArray($s), $data['successes'] ?? []),
        );
    }
}
