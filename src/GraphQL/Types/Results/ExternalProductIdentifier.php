<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ExternalProductIdentifier
{
    public function __construct(
        public string $productType = '',
        public string $productId = '',
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            productType: $data['productType'] ?? '',
            productId:   $data['productId'] ?? '',
        );
    }
}
