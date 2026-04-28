<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Operations;

/**
 * GraphQL query/mutation strings for the listing-management operations.
 */
final class ListingOperations
{
    public const ITEM_BIDDING_ACTIVITY = <<<'GRAPHQL'
        query ItemBiddingActivity($input: ItemBiddingActivityInput!) {
            itemBiddingActivity(input: $input) {
                itemBiddingActivity {
                    __typename
                    currentPrice { value currency }
                    bidCount
                    highBidder { userId }
                    reserveMet
                    minimumBidPrice { value currency }
                }
            }
        }
        GRAPHQL;

    public const BULK_UPDATE_INVENTORY = <<<'GRAPHQL'
        mutation BulkUpdateInventory($input: BulkUpdateInventoryInput!) {
            bulkUpdateInventory(input: $input) {
                __typename
                ... on BulkUpdateInventorySuccess {
                    successes { listingId sku warnings { code message } }
                }
                ... on BulkUpdateInventoryPartialFailure {
                    errorCode errorMessage
                    successes { listingId sku warnings { code message } }
                    failures { listingId sku errors { code message } warnings { code message } }
                }
                ... on BulkUpdateInventoryFailure {
                    errorCode errorMessage
                    failures { listingId sku errors { code message } warnings { code message } }
                }
            }
        }
        GRAPHQL;

    public const CREATE_LISTING = <<<'GRAPHQL'
        mutation CreateListing($input: CreateListingInput!) {
            createListing(input: $input) {
                __typename
                ... on CreateListingSuccess {
                    listing { listingId status sku }
                    listingFees { feeType amount { value currency } }
                    warnings { code message }
                }
                ... on CreateListingValidationError {
                    errorCode errorMessage
                    violations { code message }
                    warnings { code message }
                }
                ... on CreateListingValidationSuccess {
                    warnings { code message }
                }
            }
        }
        GRAPHQL;

    public const CREATE_SECOND_CHANCE_LISTING = <<<'GRAPHQL'
        mutation CreateSecondChanceListing($input: CreateSecondChanceListingInput!) {
            createSecondChanceListing(input: $input) {
                __typename
                ... on CreateSecondChanceListingSuccess {
                    listing { listingId status sku }
                    warnings { code message }
                }
                ... on CreateSecondChanceListingValidationError {
                    errorCode errorMessage
                    violations { code message }
                    warnings { code message }
                }
                ... on CreateSecondChanceListingValidationSuccess {
                    warnings { code message }
                }
            }
        }
        GRAPHQL;

    public const END_LISTING = <<<'GRAPHQL'
        mutation EndListing($input: EndListingInput!) {
            endListing(input: $input) {
                __typename
                ... on EndListingSuccess {
                    listing { listingId status sku }
                    warnings { code message }
                }
                ... on EndListingValidationError {
                    errorCode errorMessage
                    violations { code message }
                    warnings { code message }
                }
            }
        }
        GRAPHQL;

    public const RELIST_LISTING = <<<'GRAPHQL'
        mutation RelistListing($input: RelistListingInput!) {
            relistListing(input: $input) {
                __typename
                ... on RelistListingSuccess {
                    listing { listingId status sku }
                    listingFees { feeType amount { value currency } }
                    warnings { code message }
                }
                ... on RelistListingValidationError {
                    errorCode errorMessage
                    violations { code message }
                    warnings { code message }
                }
                ... on RelistListingValidationSuccess {
                    warnings { code message }
                }
            }
        }
        GRAPHQL;

    public const SELLER_LISTINGS = <<<'GRAPHQL'
        query SellerListings($input: SellerListingsInput!) {
            sellerListings(input: $input) {
                listings {
                    listingId status sku
                    items { sku price { value currency } availableQuantity }
                }
            }
        }
        GRAPHQL;

    public const UPDATE_LISTING = <<<'GRAPHQL'
        mutation UpdateListing($input: UpdateListingInput!) {
            updateListing(input: $input) {
                __typename
                ... on UpdateListingSuccess {
                    listing { listingId status sku }
                    warnings { code message }
                }
                ... on UpdateListingValidationError {
                    errorCode errorMessage
                    violations { code message }
                    warnings { code message }
                }
                ... on UpdateListingValidationSuccess {
                    warnings { code message }
                }
            }
        }
        GRAPHQL;

    public const SELLER_LISTING_SEARCH = <<<'GRAPHQL'
        query SellerListingSearch {
            sellerListingSearch {
                activeListings {
                    __typename
                    ... on SellerListings {
                        listings { listingId status sku }
                    }
                }
            }
        }
        GRAPHQL;
}
