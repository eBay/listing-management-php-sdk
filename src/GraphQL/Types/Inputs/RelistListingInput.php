<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

/**
 * Input for the relistListing mutation.
 * Accepts the full input payload as a raw array due to the deeply nested structure.
 *
 * @param array<string, mixed> $data Full RelistListingInput payload.
 */
readonly class RelistListingInput
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
