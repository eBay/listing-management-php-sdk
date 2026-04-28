<?php

declare(strict_types=1);

namespace EBay\ListingManagement;

use EBay\ListingManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\ListingManagement\Clients\GraphQL\ListingGraphQLClient;
use EBay\ListingManagement\Clients\Rest\FeedClient;
use EBay\ListingManagement\Clients\Rest\InventoryClient;
use EBay\ListingManagement\Clients\Rest\MediaClient;
use EBay\ListingManagement\Clients\Rest\StoresClient;
use EBay\ListingManagement\Configuration\KiotaAuthProvider;
use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Generated\Feed\FeedApiClient;
use EBay\ListingManagement\Generated\Inventory\InventoryApiClient;
use EBay\ListingManagement\Generated\Media\MediaApiClient;
use EBay\ListingManagement\Generated\Stores\StoresApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

/**
 * Main entry point for the eBay Listing Management PHP SDK.
 *
 * Usage:
 *   $config = new ListingManagementConfiguration();
 *   $config->accessToken = 'your-token';
 *   $sdk = new ListingManagementClient($config);
 *
 *   // REST
 *   $item = $sdk->inventory->getInventoryItem('MY-SKU');
 *
 *   // GraphQL
 *   $result = $sdk->graphQL->createListing([...]);
 *
 *   // GraphQL escape hatch
 *   $raw = $sdk->graphQL->executeRaw('{ sellerListingSearch { ... } }');
 */
final class ListingManagementClient
{
    public readonly InventoryClient $inventory;
    public readonly FeedClient $feed;
    public readonly MediaClient $media;
    public readonly StoresClient $stores;
    public readonly ListingGraphQLClient $graphQL;

    public function __construct(
        ListingManagementConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        // Inventory
        $inventoryAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $inventoryAdapter->setBaseUrl($config->inventoryBaseUrl);
        $this->inventory = new InventoryClient(new InventoryApiClient($inventoryAdapter));

        // Feed
        $feedAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $feedAdapter->setBaseUrl($config->feedBaseUrl);
        $this->feed = new FeedClient(new FeedApiClient($feedAdapter));

        // Media
        $mediaAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $mediaAdapter->setBaseUrl($config->mediaBaseUrl);
        $this->media = new MediaClient(new MediaApiClient($mediaAdapter));

        // Stores
        $storesAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $storesAdapter->setBaseUrl($config->storesBaseUrl);
        $this->stores = new StoresClient(new StoresApiClient($storesAdapter));

        // GraphQL (Guzzle shared — no Kiota involved)
        $this->graphQL = new ListingGraphQLClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }
}
