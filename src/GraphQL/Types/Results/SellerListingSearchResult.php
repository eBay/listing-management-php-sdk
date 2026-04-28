<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListingSearchResult
{
    public function __construct(
        public ?ActiveListingsOutput $activeListings = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            activeListings: isset($data['activeListings'])
                ? ActiveListingsOutput::fromArray($data['activeListings'])
                : null,
        );
    }
}
