<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewAspectValue
{
    public function __construct(
        public string $confidence = '',
        public string $value = '',
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            confidence: $data['confidence'] ?? '',
            value:      $data['value'] ?? '',
        );
    }
}
