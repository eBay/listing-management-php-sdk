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
use EBay\ListingManagement\GraphQL\Types\Inputs\UserSavedSearchesInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\VideosByIdsInput;
use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventoryFailure;
use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventoryOutput;
use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventoryPartialFailure;
use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventorySuccess;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingValidationError;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingValidationSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingValidationError;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingValidationSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\EndListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\EndListingSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\EndListingValidationError;
use EBay\ListingManagement\GraphQL\Types\Results\ListingPreviewsCreationTaskByIdOutput;
use EBay\ListingManagement\GraphQL\Types\Results\MaxVideoIdsAllowedExceeded;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingValidationError;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingValidationSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingSearchResult;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingsResult;
use EBay\ListingManagement\GraphQL\Types\Results\StartListingPreviewsCreationOutput;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingValidationError;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingValidationSuccess;
use EBay\ListingManagement\GraphQL\Types\Results\UserSavedSearchesResult;
use EBay\ListingManagement\GraphQL\Types\Results\VideoList;
use EBay\ListingManagement\GraphQL\Types\Results\VideosByIdsOutput;

final class ListingGraphQLClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    public function bulkUpdateInventory(BulkUpdateInventoryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdateInventoryFailure|BulkUpdateInventoryPartialFailure|BulkUpdateInventorySuccess
    {
        $data = $this->dynamic->execute(
            ListingOperations::BULK_UPDATE_INVENTORY(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return BulkUpdateInventoryOutput::fromArray($data['bulkUpdateInventory'] ?? []);
    }

    public function createListing(CreateListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateListingSuccess|CreateListingValidationError|CreateListingValidationSuccess
    {
        $data = $this->dynamic->execute(
            ListingOperations::CREATE_LISTING(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateListingOutput::fromArray($data['createListing'] ?? []);
    }

    public function createSecondChanceListing(CreateSecondChanceListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateSecondChanceListingSuccess|CreateSecondChanceListingValidationError|CreateSecondChanceListingValidationSuccess
    {
        $data = $this->dynamic->execute(
            ListingOperations::CREATE_SECOND_CHANCE_LISTING(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateSecondChanceListingOutput::fromArray($data['createSecondChanceListing'] ?? []);
    }

    public function endListing(EndListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): EndListingSuccess|EndListingValidationError
    {
        $data = $this->dynamic->execute(
            ListingOperations::END_LISTING(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return EndListingOutput::fromArray($data['endListing'] ?? []);
    }

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

    public function relistListing(RelistListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RelistListingSuccess|RelistListingValidationError|RelistListingValidationSuccess
    {
        $data = $this->dynamic->execute(
            ListingOperations::RELIST_LISTING(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RelistListingOutput::fromArray($data['relistListing'] ?? []);
    }

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

    public function updateListing(UpdateListingInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateListingSuccess|UpdateListingValidationError|UpdateListingValidationSuccess
    {
        $data = $this->dynamic->execute(
            ListingOperations::UPDATE_LISTING(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateListingOutput::fromArray($data['updateListing'] ?? []);
    }

    public function userSavedSearches(?UserSavedSearchesInput $input = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UserSavedSearchesResult
    {
        $data = $this->dynamic->execute(
            ListingOperations::USER_SAVED_SEARCHES(),
            $input !== null ? ['input' => (object)$input->toArray()] : [],
            $accessToken,
            $requestOptions
        );
        return UserSavedSearchesResult::fromArray($data['userSavedSearches'] ?? []);
    }

    public function videosByIds(?VideosByIdsInput $input = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MaxVideoIdsAllowedExceeded|VideoList
    {
        $data = $this->dynamic->execute(
            ListingOperations::VIDEOS_BY_IDS(),
            $input !== null ? ['input' => (object)$input->toArray()] : [],
            $accessToken,
            $requestOptions
        );
        return VideosByIdsOutput::fromArray($data['videosByIds'] ?? []);
    }

    /**
     * Execute an arbitrary GraphQL query string and return the raw `data` payload.
     *
     * **WARNING — injection risk.** Never interpolate user-supplied input directly into
     * `$query`. Always pass dynamic values via `$variables` so the server handles
     * escaping.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRawUnsafe(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
