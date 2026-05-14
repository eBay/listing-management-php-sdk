<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class ListingPreviewsCreationTaskByIdInput
{
    public function __construct(
        public string $id,
    ) {}

    public function toArray(): array
    {
        return ['id' => $this->id];
    }

    public static function fromArray(array $data): self
    {
        return new self(id: $data['id']);
    }
}
