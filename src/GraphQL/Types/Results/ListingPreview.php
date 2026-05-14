<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreview
{
    public function __construct(
        /** @var ListingPreviewAspect[] */
        public array $aspects = [],
        public ?ListingPreviewCategory $category = null,
        public ?ClientProvidedProductDetails $clientProvidedProductDetails = null,
        public ?string $description = null,
        /** @var string[] */
        public array $images = [],
        public ?string $mappingReferenceId = null,
        public ?ListingPreviewProduct $product = null,
        public ?string $sku = null,
        public ?string $title = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            aspects:                     array_map(fn($a) => ListingPreviewAspect::fromArray($a), $data['aspects'] ?? []),
            category:                    isset($data['category'])
                ? ListingPreviewCategory::fromArray($data['category'])
                : null,
            clientProvidedProductDetails: isset($data['clientProvidedProductDetails'])
                ? ClientProvidedProductDetails::fromArray($data['clientProvidedProductDetails'])
                : null,
            description:       $data['description'] ?? null,
            images:            $data['images'] ?? [],
            mappingReferenceId: $data['mappingReferenceId'] ?? null,
            product:           isset($data['product'])
                ? ListingPreviewProduct::fromArray($data['product'])
                : null,
            sku:   $data['sku'] ?? null,
            title: $data['title'] ?? null,
        );
    }
}
