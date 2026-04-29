<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class CreateSecondChanceListingValidationSuccess extends CreateSecondChanceListingOutput
{
    public function __construct(
        public ?ListingRef $listing = null,
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public function getTypename(): string { return 'CreateSecondChanceListingValidationSuccess'; }

    public static function fromArray(array $data): self
    {
        return new self(
            listing:  isset($data['listing']) ? ListingRef::fromArray($data['listing']) : null,
            warnings: array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
