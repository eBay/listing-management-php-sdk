<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class UnmappedProduct
{
    public function __construct(
        /** @var ProductAspect[] */
        public array $aspects = [],
        public ?string $category = null,
        public ?ExternalProductIdentifier $externalProductIdentifier = null,
        /** @var string[] */
        public array $images = [],
        public ?string $sku = null,
        public ?string $title = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            aspects:                   array_map(fn($a) => ProductAspect::fromArray($a), $data['aspects'] ?? []),
            category:                  $data['category'] ?? null,
            externalProductIdentifier: isset($data['externalProductIdentifier'])
                ? ExternalProductIdentifier::fromArray($data['externalProductIdentifier'])
                : null,
            images: $data['images'] ?? [],
            sku:    $data['sku'] ?? null,
            title:  $data['title'] ?? null,
        );
    }
}
