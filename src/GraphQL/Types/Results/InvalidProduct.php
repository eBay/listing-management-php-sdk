<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class InvalidProduct
{
    public function __construct(
        public ?ClientProvidedProductDetails $clientProvidedProductDetails = null,
        public ?string $description = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            clientProvidedProductDetails: isset($data['clientProvidedProductDetails'])
                ? ClientProvidedProductDetails::fromArray($data['clientProvidedProductDetails'])
                : null,
            description: $data['description'] ?? null,
        );
    }
}
