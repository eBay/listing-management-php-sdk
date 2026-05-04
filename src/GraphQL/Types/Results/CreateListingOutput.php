<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

abstract readonly class CreateListingOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): CreateListingSuccess|CreateListingValidationError|CreateListingValidationSuccess
    {
        return match ($data['__typename'] ?? null) {
            'CreateListingSuccess'           => CreateListingSuccess::fromArray($data),
            'CreateListingValidationError'   => CreateListingValidationError::fromArray($data),
            'CreateListingValidationSuccess' => CreateListingValidationSuccess::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for CreateListingOutput: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
