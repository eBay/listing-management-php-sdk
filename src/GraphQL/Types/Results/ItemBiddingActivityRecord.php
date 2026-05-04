<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ItemBiddingActivityRecord
{
    public function __construct(
        /** @var array{paginationOutput: array{previousCursor: ?string, nextCursor: ?string}, bidHistoryRecords: array<array{bidAmount: array{original: array{value: string, currency: string}}, bidder: array{username: string, userId: string}}>}|null */
        public ?array $activeBidHistoryRecords = null,
        /** @var array{paginationOutput: array{previousCursor: ?string, nextCursor: ?string}, bidHistoryRecords: array<array{bidAmount: array{original: array{value: string, currency: string}}, bidder: array{username: string, userId: string}}>}|null */
        public ?array $cancelledBidHistoryRecords = null,
        /** @var array{paginationOutput: array{previousCursor: ?string, nextCursor: ?string}, bidHistoryRecords: array<array{bidAmount: array{original: array{value: string, currency: string}}}>}|null */
        public ?array $retractedBidHistoryRecords = null,
        /** @var array{buyerBiddingSummary: ?array, bidder: ?array{username: string, userId: string}, bidAmount: ?array{original: array{value: string, currency: string}, converted: ?array{value: string, currency: string}}, bidMetadata: ?array{placedAt: ?string, isHighestBid: ?bool}}|null */
        public ?array $leadingBid = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            activeBidHistoryRecords:    $data['activeBidHistoryRecords'] ?? null,
            cancelledBidHistoryRecords: $data['cancelledBidHistoryRecords'] ?? null,
            retractedBidHistoryRecords: $data['retractedBidHistoryRecords'] ?? null,
            leadingBid:                 $data['leadingBid'] ?? null,
        );
    }
}
