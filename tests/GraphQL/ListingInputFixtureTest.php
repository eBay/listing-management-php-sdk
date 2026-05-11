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
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ListingInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Listing';

    public static function fixtures(): iterable
    {
        yield 'ItemBiddingActivity'       => ['ItemBiddingActivity', ItemBiddingActivityInput::class];
        yield 'BulkUpdateInventory'       => ['BulkUpdateInventory', BulkUpdateInventoryInput::class];
        yield 'CreateListing'             => ['CreateListing', CreateListingInput::class];
        yield 'CreateSecondChanceListing' => ['CreateSecondChanceListing', CreateSecondChanceListingInput::class];
        yield 'EndListing'                => ['EndListing', EndListingInput::class];
        yield 'RelistListing'             => ['RelistListing', RelistListingInput::class];
        yield 'SellerListings'            => ['SellerListings', SellerListingsInput::class];
        yield 'UpdateListing'             => ['UpdateListing', UpdateListingInput::class];
    }

    #[DataProvider('fixtures')]
    public function testFromArrayToArrayRoundtrip(string $operation, string $class): void
    {
        // Decode without assoc so {} stays stdClass (not []) — required to distinguish object vs array.
        $cases = json_decode(file_get_contents(self::$fixturesDir . '/' . $operation . '.json'))->cases;

        foreach ($cases as $case) {
            $input    = json_decode(json_encode($case->input), true); // assoc for fromArray
            $instance = $class::fromArray($input);

            // (object) cast mirrors the client which passes (object)$input->toArray() as the variable.
            $this->assertJsonStringEqualsJsonString(
                json_encode($case->expected),
                json_encode((object)$instance->toArray()),
                "Round-trip failed for case: {$case->label}",
            );
        }
    }
}
