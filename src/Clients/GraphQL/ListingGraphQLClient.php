<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\GraphQL;

use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\GraphQL\Operations\ListingOperations;

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
     *
     * @param array{itemId: string} $input
     * @return array<string, mixed>
     */
    public function itemBiddingActivity(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::ITEM_BIDDING_ACTIVITY,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['itemBiddingActivity'] ?? [];
    }

    /**
     * Retrieve details of one or more seller listings by listing ID.
     *
     * @param array{listings: array<array{listingId?: string, sku?: string}>} $input
     * @return array<string, mixed>
     */
    public function sellerListings(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::SELLER_LISTINGS,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['sellerListings'] ?? [];
    }

    /**
     * Search seller's active, ended, and scheduled listings.
     *
     * @return array<string, mixed>
     */
    public function sellerListingSearch(?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::SELLER_LISTING_SEARCH,
            [],
            $accessToken,
            $requestOptions
        );
        return $data['sellerListingSearch'] ?? [];
    }

    // ── Mutations ────────────────────────────────────────────────────────────

    /**
     * Bulk update price and/or quantity for fixed-price listing items.
     *
     * @param array{inventory: array<array<string, mixed>>} $input
     * @return array<string, mixed>
     */
    public function bulkUpdateInventory(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::BULK_UPDATE_INVENTORY,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['bulkUpdateInventory'] ?? [];
    }

    /**
     * Create a new eBay listing.
     *
     * @param array<string, mixed> $input See CreateListingInput schema fields.
     * @return array<string, mixed>
     */
    public function createListing(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::CREATE_LISTING,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['createListing'] ?? [];
    }

    /**
     * Create a Second Chance Offer listing from a recently ended auction.
     *
     * @param array<string, mixed> $input See CreateSecondChanceListingInput schema fields.
     * @return array<string, mixed>
     */
    public function createSecondChanceListing(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::CREATE_SECOND_CHANCE_LISTING,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['createSecondChanceListing'] ?? [];
    }

    /**
     * End an active listing before its scheduled end time.
     *
     * @param array{listingIdentifierInput: array<string, mixed>, endListingReason: string} $input
     * @return array<string, mixed>
     */
    public function endListing(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::END_LISTING,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['endListing'] ?? [];
    }

    /**
     * Relist an ended eBay listing.
     *
     * @param array<string, mixed> $input See RelistListingInput schema fields.
     * @return array<string, mixed>
     */
    public function relistListing(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::RELIST_LISTING,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['relistListing'] ?? [];
    }

    /**
     * Update one or more fields of an active or scheduled listing.
     *
     * @param array<string, mixed> $input See UpdateListingInput schema fields.
     * @return array<string, mixed>
     */
    public function updateListing(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $data = $this->dynamic->execute(
            ListingOperations::UPDATE_LISTING,
            ['input' => $input],
            $accessToken,
            $requestOptions
        );
        return $data['updateListing'] ?? [];
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
