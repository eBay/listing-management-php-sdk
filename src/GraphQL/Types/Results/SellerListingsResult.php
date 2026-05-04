<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListingsResult
{
    public function __construct(
        /** @var SellerListing[] */
        public array $listings = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listings: array_map(fn($l) => SellerListing::fromArray($l), $data['listings'] ?? []),
        );
    }
}
