<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

readonly class EndListingInput
{
    public function __construct(
        public string $endListingReason,
        public ListingIdentifierInput $listingIdentifierInput,
    ) {}

    public function toArray(): array
    {
        return [
            'endListingReason'       => $this->endListingReason,
            'listingIdentifierInput' => $this->listingIdentifierInput->toArray(),
        ];
    }
}
