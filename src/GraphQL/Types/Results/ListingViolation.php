<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingViolation
{
    public function __construct(
        public ?string $violationCode = null,
        public ?string $violationDescription = null,
        /** @var string[] */
        public array $inputPath = [],
        /** @var array<array{name: ?string, value: ?string}> */
        public array $additionalInformation = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            violationCode:         $data['violationCode'] ?? null,
            violationDescription:  $data['violationDescription'] ?? null,
            inputPath:             $data['inputPath'] ?? [],
            additionalInformation: $data['additionalInformation'] ?? [],
        );
    }
}
