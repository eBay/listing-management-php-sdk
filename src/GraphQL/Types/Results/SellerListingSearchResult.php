<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListingSearchResult
{
    public function __construct(
        public ?ActiveListingsOutput $activeListings = null,
        public ?ActiveListingsOutput $endedListings = null,
        public ?ActiveListingsOutput $scheduledListings = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            activeListings: isset($data['activeListings'])
                ? ActiveListingsOutput::fromArray($data['activeListings'])
                : null,
            endedListings: isset($data['endedListings'])
                ? ActiveListingsOutput::fromArray($data['endedListings'])
                : null,
            scheduledListings: isset($data['scheduledListings'])
                ? ActiveListingsOutput::fromArray($data['scheduledListings'])
                : null,
        );
    }
}
