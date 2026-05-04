<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

abstract readonly class RelistListingOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): RelistListingSuccess|RelistListingValidationError|RelistListingValidationSuccess
    {
        return match ($data['__typename'] ?? null) {
            'RelistListingSuccess'           => RelistListingSuccess::fromArray($data),
            'RelistListingValidationError'   => RelistListingValidationError::fromArray($data),
            'RelistListingValidationSuccess' => RelistListingValidationSuccess::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for RelistListingOutput: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
