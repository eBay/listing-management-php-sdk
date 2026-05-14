<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ProductAspect
{
    public function __construct(
        public string $name = '',
        /** @var string[] */
        public array $values = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name:   $data['name'] ?? '',
            values: $data['values'] ?? [],
        );
    }
}
