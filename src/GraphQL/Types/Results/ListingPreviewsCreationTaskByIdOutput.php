<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewsCreationTaskByIdOutput
{
    public function __construct(
        public ?ListingPreviewsCreationTask $listingPreviewsCreationTask = null,
        public ?string $requestedId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingPreviewsCreationTask: isset($data['listingPreviewsCreationTask'])
                ? ListingPreviewsCreationTask::fromArray($data['listingPreviewsCreationTask'])
                : null,
            requestedId: $data['requestedId'] ?? null,
        );
    }
}
