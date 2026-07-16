<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

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

    public static function VIDEOS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/videosByIds.graphql');
    }
}
