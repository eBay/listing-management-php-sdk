<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

/**
 * Top-level result of the itemBiddingActivity query.
 * Wraps the itemBiddingActivity array of activity records.
 */
readonly class ItemBiddingActivityResult
{
    public function __construct(
        /** @var ItemBiddingActivityRecord[] */
        public array $itemBiddingActivity = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemBiddingActivity: array_map(
                fn($r) => ItemBiddingActivityRecord::fromArray($r),
                $data['itemBiddingActivity'] ?? []
            ),
        );
    }
}
