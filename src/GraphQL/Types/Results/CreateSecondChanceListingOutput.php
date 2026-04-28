<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

abstract class CreateSecondChanceListingOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): CreateSecondChanceListingSuccess|CreateSecondChanceListingValidationError|CreateSecondChanceListingValidationSuccess
    {
        return match ($data['__typename'] ?? null) {
            'CreateSecondChanceListingSuccess'           => CreateSecondChanceListingSuccess::fromArray($data),
            'CreateSecondChanceListingValidationError'   => CreateSecondChanceListingValidationError::fromArray($data),
            'CreateSecondChanceListingValidationSuccess' => CreateSecondChanceListingValidationSuccess::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for CreateSecondChanceListingOutput: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
