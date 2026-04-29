<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingFee
{
    public function __construct(
        public ?string $listingFeeType = null,
        /** @var array{value: string, currency: string}|null */
        public ?array $feeAmount = null,
        /** @var array{value: string, currency: string}|null */
        public ?array $promotionalDiscount = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingFeeType:     $data['listingFeeType'] ?? null,
            feeAmount:          $data['feeAmount'] ?? null,
            promotionalDiscount: $data['promotionalDiscount'] ?? null,
        );
    }
}
