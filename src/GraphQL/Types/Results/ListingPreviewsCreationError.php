<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewsCreationError
{
    public function __construct(
        public string $errorDescription = '',
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            errorDescription: $data['errorDescription'] ?? '',
        );
    }
}
