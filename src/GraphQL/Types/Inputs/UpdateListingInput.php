<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

/**
 * Input for the updateListing mutation.
 * Accepts the full input payload as a raw array due to the deeply nested structure.
 *
 * @param array<string, mixed> $data Full UpdateListingInput payload.
 */
readonly class UpdateListingInput
{
    public function __construct(
        /** @var array<string, mixed> */
        private array $data,
    ) {}

    public function toArray(): array
    {
        return $this->data;
    }
}
