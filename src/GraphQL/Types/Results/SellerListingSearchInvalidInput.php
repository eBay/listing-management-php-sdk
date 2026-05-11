<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListingSearchInvalidInput extends ActiveListingsOutput
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerListingSearchInvalidInput';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
        );
    }
}
