<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\GraphQL;

use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\GraphQL\Operations\ListingOperations;
use EBay\ListingManagement\GraphQL\Types\Inputs\BulkUpdateInventoryInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateSecondChanceListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\EndListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\ItemBiddingActivityInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\RelistListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\SellerListingsInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\UpdateListingInput;
use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventoryOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\EndListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\ItemBiddingActivityResult;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingSearchResult;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingsResult;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingOutput;

/**
 * Typed wrapper around the eBay GraphQL listing operations.
 *
 * Each method maps one-to-one to a pre-defined operation in ListingOperations.
 * For anything not covered here, use executeRaw() to send an arbitrary query.
 */
final class ListingGraphQLClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    // ── Queries ──────────────────────────────────────────────────────────────

    /**
     * Returns auction and bid information for a specified listing.
     */
    public function itemBiddingActivity(ItemBiddingActivityInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemBiddingActivityResult
    {
        $data = $this->dynamic->execute(
            ListingOperations::ITEM_BIDDING_ACTIVITY(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ItemBiddingActivityResult::fromArray($data['itemBiddingActivity'] ?? []);
    }

    /**
     * Retrieve details of one or more seller listings by listing ID.
     */
    public function sellerListings(SellerListingsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerListingsResult
    {
        $data = $this->dynamic->execute(
            ListingOperations::SELLER_LISTINGS(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SellerListingsResult::fromArray($data['sellerListings'] ?? []);
    }

    /**
     * Search seller's active, ended, and scheduled listings.
     */
    public function sellerListingSearch(?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerListingSearchResult
    {
        $data = $this->dynamic->execute(
            ListingOperations::SELLER_LISTING_SEARCH(),
            [],
            $accessToken,
            $requestOptions
        );
        return SellerListingSearchResult::fromArray($data['sellerListingSearch'] ?? []);
    }

    // ── Mutations ────────────────────────────────────────────────────────────

    /**
     * Bulk update price and/or quantity for fixed-price listing items.
     */
    public function bulkUpdateInventory(BulkUpdateInventoryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdateInventoryOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::BULK_UPDATE_INVENTORY(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return BulkUpdateInventoryOutput::fromArray($data['bulkUpdateInventory'] ?? []);
    }

    /**
     * Create a new eBay listing.
     */
    public function createListing(CreateListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateListingOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::CREATE_LISTING(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateListingOutput::fromArray($data['createListing'] ?? []);
    }

    /**
     * Create a Second Chance Offer listing from a recently ended auction.
     */
    public function createSecondChanceListing(CreateSecondChanceListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateSecondChanceListingOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::CREATE_SECOND_CHANCE_LISTING(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateSecondChanceListingOutput::fromArray($data['createSecondChanceListing'] ?? []);
    }

    /**
     * End an active listing before its scheduled end time.
     */
    public function endListing(EndListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): EndListingOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::END_LISTING(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return EndListingOutput::fromArray($data['endListing'] ?? []);
    }

    /**
     * Relist an ended eBay listing.
     */
    public function relistListing(RelistListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RelistListingOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::RELIST_LISTING(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RelistListingOutput::fromArray($data['relistListing'] ?? []);
    }

    /**
     * Update one or more fields of an active or scheduled listing.
     */
    public function updateListing(UpdateListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateListingOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::UPDATE_LISTING(),
            ['input' => $input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateListingOutput::fromArray($data['updateListing'] ?? []);
    }

    // ── Escape hatch ─────────────────────────────────────────────────────────

    /**
     * Send an arbitrary GraphQL query/mutation and return the raw `data` payload.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRaw(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
