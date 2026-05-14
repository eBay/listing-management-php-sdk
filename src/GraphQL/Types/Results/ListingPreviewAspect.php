<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingPreviewAspect
{
    public function __construct(
        /** @var string[] */
        public array $aspectValues = [],
        public string $name = '',
        /** @var ListingPreviewAspectValue[] */
        public array $values = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            aspectValues: $data['aspectValues'] ?? [],
            name:         $data['name'] ?? '',
            values:       array_map(fn($v) => ListingPreviewAspectValue::fromArray($v), $data['values'] ?? []),
        );
    }
}
