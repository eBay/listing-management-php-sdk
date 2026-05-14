<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Tests\GraphQL;

use EBay\ListingManagement\GraphQL\Types\Inputs\BulkUpdateInventoryInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\CreateSecondChanceListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\EndListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\ListingPreviewsCreationTaskByIdInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\RelistListingInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\SellerListingsInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\StartListingPreviewsCreationInput;
use EBay\ListingManagement\GraphQL\Types\Inputs\UpdateListingInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ListingInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdateInventory'             => ['bulkUpdateInventory', BulkUpdateInventoryInput::class];
        yield 'CreateListing'                   => ['createListing', CreateListingInput::class];
        yield 'CreateSecondChanceListing'       => ['createSecondChanceListing', CreateSecondChanceListingInput::class];
        yield 'EndListing'                      => ['endListing', EndListingInput::class];
        yield 'ListingPreviewsCreationTaskById' => ['listingPreviewsCreationTaskById', ListingPreviewsCreationTaskByIdInput::class];
        yield 'RelistListing'                   => ['relistListing', RelistListingInput::class];
        yield 'SellerListings'                  => ['sellerListings', SellerListingsInput::class];
        yield 'StartListingPreviewsCreation'    => ['startListingPreviewsCreation', StartListingPreviewsCreationInput::class];
        yield 'UpdateListing'                   => ['updateListing', UpdateListingInput::class];
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
