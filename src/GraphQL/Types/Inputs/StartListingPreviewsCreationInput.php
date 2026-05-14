<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class StartListingPreviewsCreationInput
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
