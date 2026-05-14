<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ClientProvidedProductDetails
{
    public function __construct(
        public ?string $category = null,
        /** @var ProductAspect[] */
        public array $aspects = [],
        public ?ExternalProductIdentifier $externalProductIdentifier = null,
        /** @var string[] */
        public array $images = [],
        public ?string $sku = null,
        public ?string $title = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            category:                  $data['category'] ?? null,
            aspects:                   array_map(fn($a) => ProductAspect::fromArray($a), $data['aspects'] ?? []),
            externalProductIdentifier: isset($data['externalProductIdentifier'])
                ? ExternalProductIdentifier::fromArray($data['externalProductIdentifier'])
                : null,
            images: $data['images'] ?? [],
            sku:    $data['sku'] ?? null,
            title:  $data['title'] ?? null,
        );
    }
}
