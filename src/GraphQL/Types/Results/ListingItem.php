<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingItem
{
    public function __construct(
        public ?string $sku = null,
        public ?MoneyAmount $price = null,
        public ?int $availableQuantity = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sku:               $data['sku'] ?? null,
            price:             isset($data['price']) ? MoneyAmount::fromArray($data['price']) : null,
            availableQuantity: isset($data['availableQuantity']) ? (int) $data['availableQuantity'] : null,
        );
    }
}
