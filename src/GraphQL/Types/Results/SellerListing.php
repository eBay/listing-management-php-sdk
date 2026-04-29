<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class SellerListing
{
    public function __construct(
        public ?string $listingId = null,
        public ?string $sku = null,
        /** @var ListingItem[] */
        public array $items = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
            sku:       $data['sku'] ?? null,
            items:     array_map(fn($i) => ListingItem::fromArray($i), $data['items'] ?? []),
        );
    }
}
