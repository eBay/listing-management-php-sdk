<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class SellerListingInput
{
    public function __construct(
        public string $listingId,
    ) {}

    public function toArray(): array
    {
        return ['listingId' => $this->listingId];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'],
        );
    }
}
