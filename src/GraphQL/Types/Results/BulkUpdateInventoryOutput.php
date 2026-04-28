<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

abstract class BulkUpdateInventoryOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): BulkUpdateInventorySuccess|BulkUpdateInventoryPartialFailure|BulkUpdateInventoryFailure
    {
        return match ($data['__typename'] ?? null) {
            'BulkUpdateInventorySuccess'        => BulkUpdateInventorySuccess::fromArray($data),
            'BulkUpdateInventoryPartialFailure' => BulkUpdateInventoryPartialFailure::fromArray($data),
            'BulkUpdateInventoryFailure'        => BulkUpdateInventoryFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for BulkUpdateInventoryOutput: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
