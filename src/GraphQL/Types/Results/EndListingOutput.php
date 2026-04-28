<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

abstract class EndListingOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): EndListingSuccess|EndListingValidationError
    {
        return match ($data['__typename'] ?? null) {
            'EndListingSuccess'         => EndListingSuccess::fromArray($data),
            'EndListingValidationError' => EndListingValidationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for EndListingOutput: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
