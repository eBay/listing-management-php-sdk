<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class SellerListingsInput
{
    public function __construct(
        /** @var SellerListingInput[] */
        public array $listings,
    ) {}

    public function toArray(): array
    {
        return [
            'listings' => array_map(fn(SellerListingInput $l) => $l->toArray(), $this->listings),
        ];
    }
}
