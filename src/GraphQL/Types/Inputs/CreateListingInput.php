<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

/**
 * Input for the createListing mutation.
 * Accepts the full input payload as a raw array due to the deeply nested
 * structure of this type (listingItems, listingTerms, product, marketplace, etc.).
 *
 * @param array<string, mixed> $data Full CreateListingInput payload.
 */
readonly class CreateListingInput
{
    public function __construct(
        /** @var array<string, mixed> */
        private array $data,
    ) {}

    public function toArray(): array
    {
        return $this->data;
    }

    public static function fromArray(array $data): self
    {
        return new self(data: $data);
    }
}
