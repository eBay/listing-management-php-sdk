<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

/**
 * One item's bidding activity data (inner object from itemBiddingActivity query).
 * Note: __typename is present in the query but not exposed as a property.
 */
readonly class ItemBiddingActivityRecord
{
    public function __construct(
        public ?MoneyAmount $currentPrice = null,
        public ?int $bidCount = null,
        public ?BidHighBidder $highBidder = null,
        public ?bool $reserveMet = null,
        public ?MoneyAmount $minimumBidPrice = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            currentPrice:    isset($data['currentPrice']) ? MoneyAmount::fromArray($data['currentPrice']) : null,
            bidCount:        isset($data['bidCount']) ? (int) $data['bidCount'] : null,
            highBidder:      isset($data['highBidder']) ? BidHighBidder::fromArray($data['highBidder']) : null,
            reserveMet:      isset($data['reserveMet']) ? (bool) $data['reserveMet'] : null,
            minimumBidPrice: isset($data['minimumBidPrice']) ? MoneyAmount::fromArray($data['minimumBidPrice']) : null,
        );
    }
}
