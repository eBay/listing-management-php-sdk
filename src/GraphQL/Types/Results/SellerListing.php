<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListing
{
    public function __construct(
        public ?string $listingId = null,
        /** @var array<string, mixed>|null Full listing detail including listingTerms, sellerProduct, etc. */
        public ?array $listing = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
            listing:   $data['listing'] ?? null,
        );
    }
}
