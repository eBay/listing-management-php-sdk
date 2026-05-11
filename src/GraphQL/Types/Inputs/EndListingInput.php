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
            'listingIdentifier' => $this->listingIdentifierInput->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            endListingReason: $data['endListingReason'],
            listingIdentifierInput: isset($data['listingIdentifier'])
                ? ListingIdentifierInput::fromArray($data['listingIdentifier'])
                : new ListingIdentifierInput(),
        );
    }
}
