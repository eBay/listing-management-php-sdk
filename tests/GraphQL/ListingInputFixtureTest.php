<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Tests\GraphQL;

use EBay\ListingManagement\GraphQL\Types\Inputs\BulkUpdateInventoryInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateSecondChanceListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\EndListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\ItemBiddingActivityInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\RelistListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\SellerListingsInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\UpdateListingInput;
use PHPUnit\Framework\TestCase;

class ListingInputFixtureTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\DataProvider('fixtures')]
    public function testInputFixtureParses(string $inputClass, string $file): void
    {
        $data = json_decode(file_get_contents($file), true);
        $result = $inputClass::fromArray($data['input']);
        $this->assertNotNull($result);
    }

    public static function fixtures(): iterable
    {
        $fixturesDir = __DIR__ . '/../../fixtures/input/Listing';

        $map = [
            'ItemBiddingActivity'       => ItemBiddingActivityInput::class,
            'BulkUpdateInventory'       => BulkUpdateInventoryInput::class,
            'CreateListing'             => CreateListingInput::class,
            'CreateSecondChanceListing' => CreateSecondChanceListingInput::class,
            'EndListing'                => EndListingInput::class,
            'RelistListing'             => RelistListingInput::class,
            'SellerListings'            => SellerListingsInput::class,
            'UpdateListing'             => UpdateListingInput::class,
        ];

        foreach ($map as $operation => $inputClass) {
            $file = $fixturesDir . '/' . $operation . '.json';
            if (file_exists($file)) {
                yield $operation => [$inputClass, $file];
            }
        }
    }
}
