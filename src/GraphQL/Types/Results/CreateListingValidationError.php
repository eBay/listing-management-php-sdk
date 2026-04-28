<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class CreateListingValidationError extends CreateListingOutput
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var ListingViolation[] */
        public array $violations = [],
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public function getTypename(): string { return 'CreateListingValidationError'; }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            violations:   array_map(fn($v) => ListingViolation::fromArray($v), $data['violations'] ?? []),
            warnings:     array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
