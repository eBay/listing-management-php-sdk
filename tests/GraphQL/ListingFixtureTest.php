<?php

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
