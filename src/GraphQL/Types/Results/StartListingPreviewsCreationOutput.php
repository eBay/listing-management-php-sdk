<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class StartListingPreviewsCreationOutput
{
    public function __construct(
        /** @var ListingPreviewsCreationError[] */
        public array $errors = [],
        public ?ListingPreviewsCreationTask $listingPreviewsCreationTask = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            errors:                      array_map(fn($e) => ListingPreviewsCreationError::fromArray($e), $data['errors'] ?? []),
            listingPreviewsCreationTask: isset($data['listingPreviewsCreationTask'])
                ? ListingPreviewsCreationTask::fromArray($data['listingPreviewsCreationTask'])
                : null,
        );
    }
}
