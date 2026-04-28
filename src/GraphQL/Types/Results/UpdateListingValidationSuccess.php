<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class UpdateListingValidationSuccess extends UpdateListingOutput
{
    public function __construct(
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public function getTypename(): string { return 'UpdateListingValidationSuccess'; }

    public static function fromArray(array $data): self
    {
        return new self(
            warnings: array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
