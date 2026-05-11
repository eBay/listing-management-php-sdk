<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Operations;

final class ListingOperations
{
    public static function ITEM_BIDDING_ACTIVITY(): string
    {
        return file_get_contents(__DIR__ . '/Listing/ItemBiddingActivity.graphql');
    }

    public static function BULK_UPDATE_INVENTORY(): string
    {
        return file_get_contents(__DIR__ . '/Listing/BulkUpdateInventory.graphql');
    }

    public static function CREATE_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/Listing/CreateListing.graphql');
    }

    public static function CREATE_SECOND_CHANCE_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/Listing/CreateSecondChanceListing.graphql');
    }

    public static function END_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/Listing/EndListing.graphql');
    }

    public static function RELIST_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/Listing/RelistListing.graphql');
    }

    public static function SELLER_LISTINGS(): string
    {
        return file_get_contents(__DIR__ . '/Listing/SellerListings.graphql');
    }

    public static function UPDATE_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/Listing/UpdateListing.graphql');
    }

    public static function SELLER_LISTING_SEARCH(): string
    {
        return file_get_contents(__DIR__ . '/Listing/SellerListingSearch.graphql');
    }
}
