<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewProductCategory
{
    public function __construct(
        public ?string $categoryId = null,
        public ?string $id = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: $data['categoryId'] ?? null,
            id:         $data['id'] ?? null,
        );
    }
}
