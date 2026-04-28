<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingError
{
    public function __construct(
        public ?string $code = null,
        public ?string $message = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            code:    $data['code'] ?? null,
            message: $data['message'] ?? null,
        );
    }
}
