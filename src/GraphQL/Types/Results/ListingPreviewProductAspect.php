<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewProductAspect
{
    public function __construct(
        /** @var string[] */
        public array $aspectValues = [],
        public ?string $displayName = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            aspectValues: $data['aspectValues'] ?? [],
            displayName:  $data['displayName'] ?? null,
        );
    }
}
