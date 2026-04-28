<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class RelistListingSuccess extends RelistListingOutput
{
    public function __construct(
        public ?ListingRef $listing = null,
        /** @var ListingFee[] */
        public array $listingFees = [],
        /** @var ListingWarning[] */
        public array $warnings = [],
    ) {}

    public function getTypename(): string { return 'RelistListingSuccess'; }

    public static function fromArray(array $data): self
    {
        return new self(
            listing:     isset($data['listing']) ? ListingRef::fromArray($data['listing']) : null,
            listingFees: array_map(fn($f) => ListingFee::fromArray($f), $data['listingFees'] ?? []),
            warnings:    array_map(fn($w) => ListingWarning::fromArray($w), $data['warnings'] ?? []),
        );
    }
}
