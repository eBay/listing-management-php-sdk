<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Types\Inputs;

/**
 * Input for the bulkUpdateInventory mutation.
 * The inventory array contains UpdateInventoryInput objects (listingItemIdentifier, fixedPrice, availableQuantity).
 *
 * @see https://developer.ebay.com/api-docs/buy/browse/types/gct:BulkUpdateInventoryInput
 */
readonly class BulkUpdateInventoryInput
{
    public function __construct(
        /** @var array<array<string, mixed>> */
        public array $inventory,
    ) {}

    public function toArray(): array
    {
        return ['inventory' => $this->inventory];
    }
}
