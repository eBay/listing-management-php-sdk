<?php

declare(strict_types=1);

namespace EBay\ListingManagement\GraphQL\Operations;

final class ListingOperations
{
    public static function BULK_UPDATE_INVENTORY(): string
    {
        return file_get_contents(__DIR__ . '/bulkUpdateInventory.graphql');
    }

    public static function CREATE_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/createListing.graphql');
    }

    public static function CREATE_SECOND_CHANCE_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/createSecondChanceListing.graphql');
    }

    public static function END_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/endListing.graphql');
    }

    public static function LISTING_PREVIEWS_CREATION_TASK_BY_ID(): string
    {
        return file_get_contents(__DIR__ . '/listingPreviewsCreationTaskById.graphql');
    }

    public static function RELIST_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/relistListing.graphql');
    }

    public static function SELLER_LISTINGS(): string
    {
        return file_get_contents(__DIR__ . '/sellerListings.graphql');
    }

    public static function SELLER_LISTING_SEARCH(): string
    {
        return file_get_contents(__DIR__ . '/sellerListingSearch.graphql');
    }

    public static function START_LISTING_PREVIEWS_CREATION(): string
    {
        return file_get_contents(__DIR__ . '/startListingPreviewsCreation.graphql');
    }

    public static function UPDATE_LISTING(): string
    {
        return file_get_contents(__DIR__ . '/updateListing.graphql');
    }
}
