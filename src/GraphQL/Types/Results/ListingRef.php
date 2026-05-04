<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingRef
{
    public function __construct(
        public ?string $listingId = null,
        public ?string $sku = null,
        public ?string $marketplace = null,
        /** @var array<string, mixed>|null */
        public ?array $sellerProduct = null,
        /** @var array<array<string, mixed>> */
        public array $items = [],
        /** @var array<string, mixed>|null */
        public ?array $listingTerms = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId:     $data['listingId'] ?? null,
            sku:           $data['sku'] ?? null,
            marketplace:   $data['marketplace'] ?? null,
            sellerProduct: $data['sellerProduct'] ?? null,
            items:         $data['items'] ?? [],
            listingTerms:  $data['listingTerms'] ?? null,
        );
    }
}
