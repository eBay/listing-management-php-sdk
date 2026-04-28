<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class BidHighBidder
{
    public function __construct(
        public ?string $userId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            userId: $data['userId'] ?? null,
        );
    }
}
