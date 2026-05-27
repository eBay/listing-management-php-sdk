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

namespace EBay\ListingManagement\Clients\GraphQL;

use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\GraphQL\Operations\ListingOperations;
use EBay\ListingManagement\GraphQL\Types\Inputs\BulkUpdateInventoryInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateSecondChanceListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\EndListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\ListingPreviewsCreationTaskByIdInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\RelistListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\SellerListingsInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\StartListingPreviewsCreationInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\UpdateListingInput;
use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventoryOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\EndListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\ListingPreviewsCreationTaskByIdOutput;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingSearchResult;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingsResult;
use EBay\ListingManagement\GraphQL\Types\Results\StartListingPreviewsCreationOutput;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingOutput;

/**
 * Typed wrapper around the eBay GraphQL listing operations.
 *
 * Each method maps one-to-one to a pre-defined operation in ListingOperations.
 * For anything not covered here, use executeRawUnsafe() to send an arbitrary query.
 */
final class ListingGraphQLClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    // ── Queries ──────────────────────────────────────────────────────────────

    /**
     * Retrieve details of one or more seller listings by listing ID.
     */
    public function sellerListings(SellerListingsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerListingsResult
    {
        $data = $this->dynamic->execute(
            ListingOperations::SELLER_LISTINGS(),
            ['input' => (object)$input->toArray()],
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

    /**
     * Retrieve a listing previews creation task by its ID.
     */
    public function listingPreviewsCreationTaskById(ListingPreviewsCreationTaskByIdInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ListingPreviewsCreationTaskByIdOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::LISTING_PREVIEWS_CREATION_TASK_BY_ID(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ListingPreviewsCreationTaskByIdOutput::fromArray($data['listingPreviewsCreationTaskById'] ?? []);
    }

    // ── Mutations ────────────────────────────────────────────────────────────

    /**
     * Bulk update price and/or quantity for fixed-price listing items.
     */
    public function bulkUpdateInventory(BulkUpdateInventoryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdateInventoryOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::BULK_UPDATE_INVENTORY(),
            ['input' => (object)$input->toArray()],
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
            ['input' => (object)$input->toArray()],
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
            ['input' => (object)$input->toArray()],
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
            ['input' => (object)$input->toArray()],
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
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RelistListingOutput::fromArray($data['relistListing'] ?? []);
    }

    /**
     * Start a listing previews creation task for a set of products.
     */
    public function startListingPreviewsCreation(StartListingPreviewsCreationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): StartListingPreviewsCreationOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::START_LISTING_PREVIEWS_CREATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return StartListingPreviewsCreationOutput::fromArray($data['startListingPreviewsCreation'] ?? []);
    }

    /**
     * Update one or more fields of an active or scheduled listing.
     */
    public function updateListing(UpdateListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateListingOutput
    {
        $data = $this->dynamic->execute(
            ListingOperations::UPDATE_LISTING(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateListingOutput::fromArray($data['updateListing'] ?? []);
    }

    // ── Escape hatch ─────────────────────────────────────────────────────────

    /**
     * Execute an arbitrary GraphQL query string and return the raw `data` payload.
     *
     * **WARNING — injection risk.** Never interpolate user-supplied input directly into
     * `$query`. Always pass dynamic values via `$variables` so the server handles
     * escaping. Treat this like a raw SQL string: safe only with static,
     * developer-controlled query text.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRawUnsafe(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
