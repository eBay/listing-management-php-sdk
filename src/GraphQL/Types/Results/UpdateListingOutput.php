<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

abstract class UpdateListingOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): UpdateListingSuccess|UpdateListingValidationError|UpdateListingValidationSuccess
    {
        return match ($data['__typename'] ?? null) {
            'UpdateListingSuccess'           => UpdateListingSuccess::fromArray($data),
            'UpdateListingValidationError'   => UpdateListingValidationError::fromArray($data),
            'UpdateListingValidationSuccess' => UpdateListingValidationSuccess::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for UpdateListingOutput: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
