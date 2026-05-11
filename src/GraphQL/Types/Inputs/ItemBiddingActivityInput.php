<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class ItemBiddingActivityInput
{
    public function __construct(
        public string $itemId,
    ) {}

    public function toArray(): array
    {
        return ['itemId' => $this->itemId];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemId: $data['itemId'],
        );
    }
}
