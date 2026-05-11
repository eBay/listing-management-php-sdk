<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Tests\GraphQL;

use EBay\ListingManagement\GraphQL\Types\Results\BulkUpdateInventoryOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\CreateSecondChanceListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\EndListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\ItemBiddingActivityResult;
use EBay\ListingManagement\GraphQL\Types\Results\RelistListingOutput;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingSearchResult;
use EBay\ListingManagement\GraphQL\Types\Results\SellerListingsResult;
use EBay\ListingManagement\GraphQL\Types\Results\UpdateListingOutput;
use PHPUnit\Framework\TestCase;

class ListingFixtureTest extends TestCase
{
    private static array $operationMap = [
        'ItemBiddingActivity'         => ItemBiddingActivityResult::class,
        'SellerListings'              => SellerListingsResult::class,
        'SellerListingSearch'         => SellerListingSearchResult::class,
        'BulkUpdateInventory'         => BulkUpdateInventoryOutput::class,
        'CreateListing'               => CreateListingOutput::class,
        'CreateSecondChanceListing'   => CreateSecondChanceListingOutput::class,
        'EndListing'                  => EndListingOutput::class,
        'RelistListing'               => RelistListingOutput::class,
        'UpdateListing'               => UpdateListingOutput::class,
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
        $fixturesDir = __DIR__ . '/../../fixtures/output/Listing';

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
