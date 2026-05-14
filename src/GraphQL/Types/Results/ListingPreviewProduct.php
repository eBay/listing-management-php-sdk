<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewProduct
{
    public function __construct(
        public ?string $id = null,
        public ?string $epid = null,
        /** @var ListingPreviewProductAspect[] */
        public array $aspects = [],
        public ?ListingPreviewProductCategory $category = null,
        /** @var string[] */
        public array $imageUrls = [],
        public ?string $productId = null,
        public ?string $title = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id:        $data['id'] ?? null,
            epid:      $data['epid'] ?? null,
            aspects:   array_map(fn($a) => ListingPreviewProductAspect::fromArray($a), $data['aspects'] ?? []),
            category:  isset($data['category'])
                ? ListingPreviewProductCategory::fromArray($data['category'])
                : null,
            imageUrls: $data['imageUrls'] ?? [],
            productId: $data['productId'] ?? null,
            title:     $data['title'] ?? null,
        );
    }
}
