<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingRef
{
    public function __construct(
        public ?string $listingId = null,
        public ?string $sku = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
            sku:       $data['sku'] ?? null,
        );
    }
}
