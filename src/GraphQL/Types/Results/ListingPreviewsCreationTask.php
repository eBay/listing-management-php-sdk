<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewsCreationTask
{
    public function __construct(
        public string $id = '',
        public ?ListingPreviewsCreationTaskResult $result = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id:     $data['id'] ?? '',
            result: isset($data['result'])
                ? ListingPreviewsCreationTaskResult::fromArray($data['result'])
                : null,
        );
    }
}
