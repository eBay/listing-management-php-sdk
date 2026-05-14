<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewCategory
{
    public function __construct(
        public ?string $categoryId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: $data['categoryId'] ?? null,
        );
    }
}
