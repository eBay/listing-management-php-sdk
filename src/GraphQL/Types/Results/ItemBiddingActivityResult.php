<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

/**
 * Top-level result of the itemBiddingActivity query.
 * Wraps the single AuctionData object returned by itemBiddingActivity.
 */
readonly class ItemBiddingActivityResult
{
    public function __construct(
        public ?ItemBiddingActivityRecord $itemBiddingActivity = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemBiddingActivity: isset($data['itemBiddingActivity'])
                ? ItemBiddingActivityRecord::fromArray($data['itemBiddingActivity'])
                : null,
        );
    }
}
