<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewsCreationTaskResult
{
    public function __construct(
        public string $completionStatus = '',
        /** @var InvalidProduct[] */
        public array $invalidProducts = [],
        /** @var ListingPreview[] */
        public array $listingPreviews = [],
        /** @var UnmappedProduct[] */
        public array $unmappedProducts = [],
        /** @var UnmappedProduct[] */
        public array $unprocessedProducts = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            completionStatus:    $data['completionStatus'] ?? '',
            invalidProducts:     array_map(fn($p) => InvalidProduct::fromArray($p), $data['invalidProducts'] ?? []),
            listingPreviews:     array_map(fn($p) => ListingPreview::fromArray($p), $data['listingPreviews'] ?? []),
            unmappedProducts:    array_map(fn($p) => UnmappedProduct::fromArray($p), $data['unmappedProducts'] ?? []),
            unprocessedProducts: array_map(fn($p) => UnmappedProduct::fromArray($p), $data['unprocessedProducts'] ?? []),
        );
    }
}
