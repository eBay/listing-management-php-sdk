<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Results;

/**
 * Union base for the activeListings field in sellerListingSearch.
 * Only SellerListings variant is present in the query.
 */
abstract readonly class ActiveListingsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'SellerListings' => ActiveListingsSellerListings::fromArray($data),
            'SellerListingSearchInvalidInput' => SellerListingSearchInvalidInput::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for activeListings: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
