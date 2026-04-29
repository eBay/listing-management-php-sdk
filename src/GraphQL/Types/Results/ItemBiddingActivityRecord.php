<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

/**
 * AuctionData payload from the itemBiddingActivity query.
 * Maps the AuctionData type from the schema.
 */
readonly class ItemBiddingActivityRecord
{
    public function __construct(
        /** @var array{userSubmittedBidCount: int}|null */
        public ?array $bidStatistics = null,
        /** @var array{bidAmount: array{value: string, currency: string}}|null */
        public ?array $leadingBid = null,
        public ?bool $reservePriceMet = null,
        /** @var array{minimumQualifyingBidForMaxBid: array{value: string, currency: string}, userBiddingStatus: ?string}|null */
        public ?array $bidderAuctionDetails = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidStatistics:        $data['bidStatistics'] ?? null,
            leadingBid:           $data['leadingBid'] ?? null,
            reservePriceMet:      isset($data['reservePriceMet']) ? (bool) $data['reservePriceMet'] : null,
            bidderAuctionDetails: $data['bidderAuctionDetails'] ?? null,
        );
    }
}
