<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class ListingWarning
{
    public function __construct(
        public ?string $warningCode = null,
        public ?string $warningMessage = null,
        /** @var string[] */
        public array $inputPath = [],
        /** @var array<array{name: ?string, value: ?string}> */
        public array $additionalInformation = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            warningCode:           $data['warningCode'] ?? null,
            warningMessage:        $data['warningMessage'] ?? null,
            inputPath:             $data['inputPath'] ?? [],
            additionalInformation: $data['additionalInformation'] ?? [],
        );
    }
}
