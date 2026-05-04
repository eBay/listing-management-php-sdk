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
                    activeBidHistoryRecords {
                        paginationOutput { previousCursor nextCursor }
                        bidHistoryRecords {
                            bidAmount { original { value currency } }
                            bidder { username userId }
                        }
                    }
                    cancelledBidHistoryRecords {
                        paginationOutput { previousCursor nextCursor }
                        bidHistoryRecords {
                            bidAmount { original { value currency } }
                            bidder { username userId }
                        }
                    }
                    retractedBidHistoryRecords {
                        paginationOutput { previousCursor nextCursor }
                        bidHistoryRecords {
                            bidAmount { original { value currency } }
                        }
                    }
                    leadingBid {
                        buyerBiddingSummary {
                            bidsWithSellerPercentage
                            retractedBidCount
                            totalBidCount
                            uniqueListingCategoryBidCount
                            uniqueSellerBidCount
                            itemBids { bidCount mostRecentBidAt }
                        }
                        bidder { username userId }
                        bidAmount {
                            original { value currency }
                            converted { value currency }
                        }
                        bidMetadata {
                            ... on ActiveBidMetadata {
                                placedAt
                                isHighestBid
                            }
                        }
                    }
                }
            }
        }
        GRAPHQL;

    public const BULK_UPDATE_INVENTORY = <<<'GRAPHQL'
        mutation BulkUpdateInventory($input: BulkUpdateInventoryInput!) {
            bulkUpdateInventory(input: $input) {
                __typename
                ... on BulkUpdateInventorySuccess {
                    successes {
                        listingItemIdentifier { listingId sku }
                        warnings { warningCode warningMessage inputPath }
                    }
                }
                ... on BulkUpdateInventoryPartialFailure {
                    errorCode errorMessage
                    successes {
                        listingItemIdentifier { listingId sku }
                        warnings { warningCode warningMessage inputPath }
                    }
                    failures {
                        listingItemIdentifier { listingId sku }
                        violations { violationCode violationDescription inputPath }
                        warnings { warningCode warningMessage inputPath }
                    }
                }
                ... on BulkUpdateInventoryFailure {
                    errorCode errorMessage
                    failures {
                        listingItemIdentifier { listingId sku }
                        violations { violationCode violationDescription inputPath }
                        warnings { warningCode warningMessage inputPath }
                    }
                }
            }
        }
        GRAPHQL;

    public const CREATE_LISTING = <<<'GRAPHQL'
        mutation CreateListing($input: CreateListingInput!) {
            createListing(input: $input) {
                __typename
                ... on CreateListingSuccess {
                    listing { listingId sku }
                    listingFees { listingFeeType feeAmount { value currency } }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on CreateListingValidationError {
                    errorCode errorMessage
                    violations { violationCode violationDescription inputPath }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on CreateListingValidationSuccess {
                    listing { listingId sku }
                    listingFees { listingFeeType feeAmount { value currency } }
                    warnings { warningCode warningMessage inputPath }
                }
            }
        }
        GRAPHQL;

    public const CREATE_SECOND_CHANCE_LISTING = <<<'GRAPHQL'
        mutation CreateSecondChanceListing($input: CreateSecondChanceListingInput!) {
            createSecondChanceListing(input: $input) {
                __typename
                ... on CreateSecondChanceListingSuccess {
                    listing { listingId sku }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on CreateSecondChanceListingValidationError {
                    errorCode errorMessage
                    violations { violationCode violationDescription inputPath }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on CreateSecondChanceListingValidationSuccess {
                    listing { listingId sku }
                    warnings { warningCode warningMessage inputPath }
                }
            }
        }
        GRAPHQL;

    public const END_LISTING = <<<'GRAPHQL'
        mutation EndListing($input: EndListingInput!) {
            endListing(input: $input) {
                __typename
                ... on EndListingSuccess {
                    listing { listingId sku }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on EndListingValidationError {
                    errorCode errorMessage
                    violations { violationCode violationDescription inputPath }
                    warnings { warningCode warningMessage inputPath }
                }
            }
        }
        GRAPHQL;

    public const RELIST_LISTING = <<<'GRAPHQL'
        mutation RelistListing($input: RelistListingInput!) {
            relistListing(input: $input) {
                __typename
                ... on RelistListingSuccess {
                    listing { listingId sku }
                    listingFees { listingFeeType feeAmount { value currency } }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on RelistListingValidationError {
                    errorCode errorMessage
                    violations { violationCode violationDescription inputPath }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on RelistListingValidationSuccess {
                    listing { listingId sku }
                    listingFees { listingFeeType feeAmount { value currency } }
                    warnings { warningCode warningMessage inputPath }
                }
            }
        }
        GRAPHQL;

    public const SELLER_LISTINGS = <<<'GRAPHQL'
        query SellerListings($input: SellerListingsInput!) {
            sellerListings(input: $input) {
                listings {
                    ... on ListingSuccess {
                        listingId
                    }
                }
            }
        }
        GRAPHQL;

    public const UPDATE_LISTING = <<<'GRAPHQL'
        mutation UpdateListing($input: UpdateListingInput!) {
            updateListing(input: $input) {
                __typename
                ... on UpdateListingSuccess {
                    listing { listingId sku }
                    listingFees { listingFeeType feeAmount { value currency } }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on UpdateListingValidationError {
                    errorCode errorMessage
                    violations { violationCode violationDescription inputPath }
                    warnings { warningCode warningMessage inputPath }
                }
                ... on UpdateListingValidationSuccess {
                    listing { listingId sku }
                    listingFees { listingFeeType feeAmount { value currency } }
                    warnings { warningCode warningMessage inputPath }
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
                        listings { listingId }
                    }
                    ... on SellerListingSearchInvalidInput {
                        errorCode errorMessage
                    }
                }
                endedListings {
                    __typename
                    ... on SellerListings {
                        listings { listingId }
                    }
                    ... on SellerListingSearchInvalidInput {
                        errorCode errorMessage
                    }
                }
                scheduledListings {
                    __typename
                    ... on SellerListings {
                        listings { listingId }
                    }
                    ... on SellerListingSearchInvalidInput {
                        errorCode errorMessage
                    }
                }
            }
        }
        GRAPHQL;
}
