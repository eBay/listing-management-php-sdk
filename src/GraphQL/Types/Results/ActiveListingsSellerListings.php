<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ActiveListingsSellerListings extends ActiveListingsOutput
{
    public function __construct(
        /** @var ActiveListingRef[] */
        public array $listings = [],
    ) {}

    public function getTypename(): string { return 'SellerListings'; }

    public static function fromArray(array $data): self
    {
        return new self(
            listings: array_map(fn($l) => ActiveListingRef::fromArray($l), $data['listings'] ?? []),
        );
    }
}
