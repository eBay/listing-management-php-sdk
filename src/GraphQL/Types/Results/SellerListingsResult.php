<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListingsResult
{
    public function __construct(
        /** @var ListingRef[] */
        public array $listings = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listings: array_map(fn($l) => ListingRef::fromArray($l), $data['listings'] ?? []),
        );
    }
}
