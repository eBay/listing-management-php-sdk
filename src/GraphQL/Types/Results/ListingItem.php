<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingItem
{
    public function __construct(
        public ?string $itemId = null,
        public ?string $sku = null,
        /** @var array{pricingTerms: array{fixedPrice: array{value: string, currency: string}|null}|null, availability: array{quantityAvailable: ?int}|null}|null */
        public ?array $itemTerms = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId:    $data['itemId'] ?? null,
            sku:       $data['sku'] ?? null,
            itemTerms: $data['itemTerms'] ?? null,
        );
    }
}
