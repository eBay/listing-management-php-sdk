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

namespace EBay\ListingManagement\Tests\GraphQL;

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
use EBay\ListingManagement\GraphQL\Types\Results\VideosByIdsOutput;
use PHPUnit\Framework\TestCase;

class ListingFixtureTest extends TestCase
{
    private static array $operationMap = [
        'sellerListings'                  => SellerListingsResult::class,
        'sellerListingSearch'             => SellerListingSearchResult::class,
        'bulkUpdateInventory'             => BulkUpdateInventoryOutput::class,
        'createListing'                   => CreateListingOutput::class,
        'createSecondChanceListing'       => CreateSecondChanceListingOutput::class,
        'endListing'                      => EndListingOutput::class,
        'relistListing'                   => RelistListingOutput::class,
        'updateListing'                   => UpdateListingOutput::class,
        'startListingPreviewsCreation'    => StartListingPreviewsCreationOutput::class,
        'listingPreviewsCreationTaskById' => ListingPreviewsCreationTaskByIdOutput::class,
        'videosByIds'                     => VideosByIdsOutput::class,
    ];

    #[\PHPUnit\Framework\Attributes\DataProvider('fixtures')]
    public function testFixtureParses(string $operation, string $file): void
    {
        $resultClass = self::$operationMap[$operation];
        $data = json_decode(file_get_contents($file), true);
        $key = lcfirst($operation);
        $result = $resultClass::fromArray($data[$key] ?? $data);
        $this->assertNotNull($result);
    }

    public static function fixtures(): iterable
    {
        $fixturesDir = __DIR__ . '/../../fixtures/output';

        foreach (scandir($fixturesDir) as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }

            $path = $fixturesDir . '/' . $entry;

            if (is_dir($path)) {
                // variant operation: subdirectory named after the operation
                $operation = $entry;
                foreach (scandir($path) as $file) {
                    if (!str_ends_with($file, '.json')) {
                        continue;
                    }
                    $label = $operation . '/' . basename($file, '.json');
                    yield $label => [$operation, $path . '/' . $file];
                }
            } elseif (str_ends_with($entry, '.json')) {
                // flat file: operation name is the filename without extension
                $operation = basename($entry, '.json');
                yield $operation => [$operation, $path];
            }
        }
    }
}
