<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Generated\Inventory\InventoryApiClient;
use EBay\ListingManagement\Generated\Inventory\Models\BulkInventoryItem;
use EBay\ListingManagement\Generated\Inventory\Models\BulkOfferResponse;
use EBay\ListingManagement\Generated\Inventory\Models\BulkPriceQuantity;
use EBay\ListingManagement\Generated\Inventory\Models\BulkPublishResponse;
use EBay\ListingManagement\Generated\Inventory\Models\EbayOfferDetailsWithKeys;
use EBay\ListingManagement\Generated\Inventory\Models\EbayOfferDetailsWithId;
use EBay\ListingManagement\Generated\Inventory\Models\GetInventoryItemsResponse;
use EBay\ListingManagement\Generated\Inventory\Models\GetInventoryLocationsResponse;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItem;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemFeeGroup;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemGroup;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemGroupResponse;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemWithSkuLocaleGroupid;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocationFull;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocationResponse;
use EBay\ListingManagement\Generated\Inventory\Models\MigrateListing;
use EBay\ListingManagement\Generated\Inventory\Models\OfferResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Offers;
use EBay\ListingManagement\Generated\Inventory\Models\OfferSkusWithId;
use EBay\ListingManagement\Generated\Inventory\Models\PublishByInventoryItemGroupRequest;
use EBay\ListingManagement\Generated\Inventory\Models\PublishByInventoryItemGroupResponse;
use EBay\ListingManagement\Generated\Inventory\Models\PublishResponse;
use EBay\ListingManagement\Generated\Inventory\Models\WithdrawByInventoryItemGroupRequest;
use EBay\ListingManagement\Generated\Inventory\Models\WithdrawResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Compatibility;
use EBay\ListingManagement\Generated\Inventory\Models\BaseResponse;

final class InventoryClient
{
    public function __construct(private readonly InventoryApiClient $kiota) {}

    // ── Inventory Items ──────────────────────────────────────────────────────

    public function getInventoryItem(string $sku, ?string $accessToken = null): ?InventoryItemWithSkuLocaleGroupid
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->get()->wait();
    }

    public function createOrReplaceInventoryItem(string $sku, InventoryItem $body, ?string $accessToken = null): ?BaseResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->put($body)->wait();
    }

    public function deleteInventoryItem(string $sku, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_item()->bySku($sku)->delete()->wait();
    }

    public function getInventoryItems(?string $accessToken = null): ?GetInventoryItemsResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->get()->wait();
    }

    public function bulkGetInventoryItem(BulkInventoryItem $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_get_inventory_item()->post($body)->wait();
    }

    public function bulkCreateOrReplaceInventoryItem(BulkInventoryItem $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_create_or_replace_inventory_item()->post($body)->wait();
    }

    // ── Inventory Item Groups ────────────────────────────────────────────────

    public function getInventoryItemGroup(string $inventoryItemGroupKey, ?string $accessToken = null): ?InventoryItemGroup
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item_group()->byInventoryItemGroupKey($inventoryItemGroupKey)->get()->wait();
    }

    public function createOrReplaceInventoryItemGroup(string $inventoryItemGroupKey, InventoryItemGroup $body, ?string $accessToken = null): ?InventoryItemGroupResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item_group()->byInventoryItemGroupKey($inventoryItemGroupKey)->put($body)->wait();
    }

    public function deleteInventoryItemGroup(string $inventoryItemGroupKey, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_item_group()->byInventoryItemGroupKey($inventoryItemGroupKey)->delete()->wait();
    }

    // ── Product Compatibility ────────────────────────────────────────────────

    public function getProductCompatibility(string $sku, ?string $accessToken = null): ?Compatibility
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->product_compatibility()->get()->wait();
    }

    public function createOrReplaceProductCompatibility(string $sku, Compatibility $body, ?string $accessToken = null): ?BaseResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->product_compatibility()->put($body)->wait();
    }

    public function deleteProductCompatibility(string $sku, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_item()->bySku($sku)->product_compatibility()->delete()->wait();
    }

    // ── SKU-Location Mapping ─────────────────────────────────────────────────

    public function getSkuLocationMapping(string $listingId, string $sku, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->listing()->byListingId($listingId)->sku()->bySku($sku)->get()->wait();
    }

    public function createOrReplaceSkuLocationMapping(string $listingId, string $sku, mixed $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->listing()->byListingId($listingId)->sku()->bySku($sku)->put($body)->wait();
    }

    public function deleteSkuLocationMapping(string $listingId, string $sku, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->listing()->byListingId($listingId)->sku()->bySku($sku)->delete()->wait();
    }

    // ── Inventory Locations ──────────────────────────────────────────────────

    public function getInventoryLocation(string $merchantLocationKey, ?string $accessToken = null): ?InventoryLocationResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->get()->wait();
    }

    public function getInventoryLocations(?string $accessToken = null): ?GetInventoryLocationsResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->get()->wait();
    }

    public function createInventoryLocation(string $merchantLocationKey, InventoryLocationFull $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->post($body)->wait();
    }

    public function deleteInventoryLocation(string $merchantLocationKey, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->delete()->wait();
    }

    public function updateInventoryLocation(string $merchantLocationKey, mixed $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->update_location_details()->post($body)->wait();
    }

    public function disableInventoryLocation(string $merchantLocationKey, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->disable()->post(null)->wait();
    }

    public function enableInventoryLocation(string $merchantLocationKey, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->enable()->post(null)->wait();
    }

    // ── Offers ───────────────────────────────────────────────────────────────

    public function getOffer(string $offerId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->get()->wait();
    }

    public function getOffers(?string $accessToken = null): ?Offers
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->get()->wait();
    }

    public function createOffer(EbayOfferDetailsWithKeys $body, ?string $accessToken = null): ?OfferResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->post($body)->wait();
    }

    public function updateOffer(string $offerId, EbayOfferDetailsWithId $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->put($body)->wait();
    }

    public function deleteOffer(string $offerId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->offer()->byOfferId($offerId)->delete()->wait();
    }

    public function publishOffer(string $offerId, ?string $accessToken = null): ?PublishResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->publish()->post(null)->wait();
    }

    public function withdrawOffer(string $offerId, ?string $accessToken = null): ?WithdrawResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->withdraw()->post(null)->wait();
    }

    public function getListingFees(OfferSkusWithId $body, ?string $accessToken = null): ?InventoryItemFeeGroup
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->get_listing_fees()->post($body)->wait();
    }

    public function bulkCreateOffer(mixed $body, ?string $accessToken = null): ?BulkOfferResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_create_offer()->post($body)->wait();
    }

    public function bulkPublishOffer(mixed $body, ?string $accessToken = null): ?BulkPublishResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_publish_offer()->post($body)->wait();
    }

    public function publishOfferByInventoryItemGroup(PublishByInventoryItemGroupRequest $body, ?string $accessToken = null): ?PublishByInventoryItemGroupResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->publish_by_inventory_item_group()->post($body)->wait();
    }

    public function withdrawOfferByInventoryItemGroup(WithdrawByInventoryItemGroupRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->withdraw_by_inventory_item_group()->post($body)->wait();
    }

    // ── Bulk Operations ──────────────────────────────────────────────────────

    public function bulkMigrateListing(MigrateListing $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_migrate_listing()->post($body)->wait();
    }

    public function bulkUpdatePriceQuantity(BulkPriceQuantity $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_update_price_quantity()->post($body)->wait();
    }
}
