<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class ListingIdentifierInput
{
    public function __construct(
        public ?string $listingId = null,
        public ?string $sku = null,
    ) {}

    public function toArray(): array
    {
        $data = [];
        if ($this->listingId !== null) {
            $data['listingId'] = $this->listingId;
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }
        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
            sku: $data['sku'] ?? null,
        );
    }
}
