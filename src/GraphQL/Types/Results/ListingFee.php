<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingFee
{
    public function __construct(
        public ?string $feeType = null,
        public ?MoneyAmount $amount = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            feeType: $data['feeType'] ?? null,
            amount:  isset($data['amount']) ? MoneyAmount::fromArray($data['amount']) : null,
        );
    }
}
