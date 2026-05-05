<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Generated\Inventory\InventoryApiClient;
use EBay\ListingManagement\Generated\Inventory\Models\BulkGetInventoryItem;
use EBay\ListingManagement\Generated\Inventory\Models\BulkInventoryItem;
use EBay\ListingManagement\Generated\Inventory\Models\BulkOfferResponse;
use EBay\ListingManagement\Generated\Inventory\Models\BulkPriceQuantity;
use EBay\ListingManagement\Generated\Inventory\Models\BulkPublishResponse;
use EBay\ListingManagement\Generated\Inventory\Models\EbayOfferDetailsWithKeys;
use EBay\ListingManagement\Generated\Inventory\Models\EbayOfferDetailsWithId;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItems;
use EBay\ListingManagement\Generated\Inventory\Models\FeesSummaryResponse;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItem;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemGroup;
use EBay\ListingManagement\Generated\Inventory\Models\LocationResponse;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryItemWithSkuLocaleGroupid;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocationFull;
use EBay\ListingManagement\Generated\Inventory\Models\InventoryLocationResponse;
use EBay\ListingManagement\Generated\Inventory\Models\BulkMigrateListing;
use EBay\ListingManagement\Generated\Inventory\Models\OfferKeysWithId;
use EBay\ListingManagement\Generated\Inventory\Models\OfferResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Offers;
use EBay\ListingManagement\Generated\Inventory\Models\PublishByInventoryItemGroupRequest;
use EBay\ListingManagement\Generated\Inventory\Models\PublishResponse;
use EBay\ListingManagement\Generated\Inventory\Models\WithdrawByInventoryItemGroupRequest;
use EBay\ListingManagement\Generated\Inventory\Models\WithdrawResponse;
use EBay\ListingManagement\Generated\Inventory\Models\Compatibility;
use EBay\ListingManagement\Generated\Inventory\Models\BaseResponse;
use EBay\ListingManagement\Generated\Inventory\Bulk_create_offer\Bulk_create_offerRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Bulk_create_or_replace_inventory_item\Bulk_create_or_replace_inventory_itemRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Bulk_get_inventory_item\Bulk_get_inventory_itemRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Bulk_migrate_listing\Bulk_migrate_listingRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Bulk_publish_offer\Bulk_publish_offerRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Bulk_update_price_quantity\Bulk_update_price_quantityRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Inventory_itemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\WithSkuItemRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\WithSkuItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\WithSkuItemRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\Product_compatibility\Product_compatibilityRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\Product_compatibility\Product_compatibilityRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Item\Product_compatibility\Product_compatibilityRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item_group\Item\WithInventoryItemGroupKeyItemRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item_group\Item\WithInventoryItemGroupKeyItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Inventory_item_group\Item\WithInventoryItemGroupKeyItemRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku\Item\Locations\LocationsRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku\Item\Locations\LocationsRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Listing\Item\Sku\Item\Locations\LocationsRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\Item\Disable\DisableRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\Item\Enable\EnableRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\Item\Update_location_details\Update_location_detailsRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\Item\WithMerchantLocationKeyItemRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\Item\WithMerchantLocationKeyItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\Item\WithMerchantLocationKeyItemRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Location\LocationRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Get_listing_fees\Get_listing_feesRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Item\Publish\PublishRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Item\Withdraw\WithdrawRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Item\WithOfferItemRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Item\WithOfferItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Item\WithOfferItemRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\OfferRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\OfferRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Publish_by_inventory_item_group\Publish_by_inventory_item_groupRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Inventory\Offer\Withdraw_by_inventory_item_group\Withdraw_by_inventory_item_groupRequestBuilderPostRequestConfiguration;

final class InventoryClient
{
    public function __construct(
        private readonly InventoryApiClient $kiota,
        private readonly ListingManagementConfiguration $config = new ListingManagementConfiguration(),
    ) {}

    /**
     * Merge default headers with per-request headers.
     * Default headers fill first; per-request headers fill any remaining gaps.
     *
     * @return array<string,string>
     */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    // ── Inventory Items ──────────────────────────────────────────────────────

    public function getInventoryItem(string $sku, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?InventoryItemWithSkuLocaleGroupid
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->get(
            new WithSkuItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function createOrReplaceInventoryItem(string $sku, InventoryItem $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BaseResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->put(
            $body,
            new WithSkuItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteInventoryItem(string $sku, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_item()->bySku($sku)->delete(
            new WithSkuItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function getInventoryItems(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?InventoryItems {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->get(
            new Inventory_itemRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Inventory_itemRequestBuilderGetRequestConfiguration::createQueryParameters(
                    limit: $limit,
                    offset: $offset,
                ),
            )
        )->wait();
    }

    public function bulkGetInventoryItem(BulkGetInventoryItem $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_get_inventory_item()->post(
            $body,
            new Bulk_get_inventory_itemRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function bulkCreateOrReplaceInventoryItem(BulkInventoryItem $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_create_or_replace_inventory_item()->post(
            $body,
            new Bulk_create_or_replace_inventory_itemRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Inventory Item Groups ────────────────────────────────────────────────

    public function getInventoryItemGroup(string $inventoryItemGroupKey, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?InventoryItemGroup
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item_group()->byInventoryItemGroupKey($inventoryItemGroupKey)->get(
            new WithInventoryItemGroupKeyItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function createOrReplaceInventoryItemGroup(string $inventoryItemGroupKey, InventoryItemGroup $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BaseResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item_group()->byInventoryItemGroupKey($inventoryItemGroupKey)->put(
            $body,
            new WithInventoryItemGroupKeyItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteInventoryItemGroup(string $inventoryItemGroupKey, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_item_group()->byInventoryItemGroupKey($inventoryItemGroupKey)->delete(
            new WithInventoryItemGroupKeyItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Product Compatibility ────────────────────────────────────────────────

    public function getProductCompatibility(string $sku, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Compatibility
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->product_compatibility()->get(
            new Product_compatibilityRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function createOrReplaceProductCompatibility(string $sku, Compatibility $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BaseResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_item()->bySku($sku)->product_compatibility()->put(
            $body,
            new Product_compatibilityRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteProductCompatibility(string $sku, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_item()->bySku($sku)->product_compatibility()->delete(
            new Product_compatibilityRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── SKU-Location Mapping ─────────────────────────────────────────────────

    public function getSkuLocationMapping(string $listingId, string $sku, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->listing()->byListingId($listingId)->sku()->bySku($sku)->locations()->get(
            new LocationsRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function createOrReplaceSkuLocationMapping(string $listingId, string $sku, mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->listing()->byListingId($listingId)->sku()->bySku($sku)->locations()->put(
            $body,
            new LocationsRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteSkuLocationMapping(string $listingId, string $sku, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->listing()->byListingId($listingId)->sku()->bySku($sku)->locations()->delete(
            new LocationsRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Inventory Locations ──────────────────────────────────────────────────

    public function getInventoryLocation(string $merchantLocationKey, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?InventoryLocationResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->get(
            new WithMerchantLocationKeyItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function getInventoryLocations(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?LocationResponse {
        TokenContext::set($accessToken);
        return $this->kiota->location()->get(
            new LocationRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: LocationRequestBuilderGetRequestConfiguration::createQueryParameters(
                    limit: $limit,
                    offset: $offset,
                ),
            )
        )->wait();
    }

    public function createInventoryLocation(string $merchantLocationKey, InventoryLocationFull $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->post(
            $body,
            new WithMerchantLocationKeyItemRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteInventoryLocation(string $merchantLocationKey, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->delete(
            new WithMerchantLocationKeyItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function updateInventoryLocation(string $merchantLocationKey, mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->update_location_details()->post(
            $body,
            new Update_location_detailsRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function disableInventoryLocation(string $merchantLocationKey, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->disable()->post(
            new DisableRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function enableInventoryLocation(string $merchantLocationKey, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->location()->byMerchantLocationKey($merchantLocationKey)->enable()->post(
            new EnableRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Offers ───────────────────────────────────────────────────────────────

    public function getOffer(string $offerId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->get(
            new WithOfferItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function getOffers(
        ?string $format = null,
        ?string $limit = null,
        ?string $marketplaceId = null,
        ?string $offset = null,
        ?string $sku = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Offers {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->get(
            new OfferRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: OfferRequestBuilderGetRequestConfiguration::createQueryParameters(
                    format: $format,
                    limit: $limit,
                    marketplace_id: $marketplaceId,
                    offset: $offset,
                    sku: $sku,
                ),
            )
        )->wait();
    }

    public function createOffer(EbayOfferDetailsWithKeys $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?OfferResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->post(
            $body,
            new OfferRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function updateOffer(string $offerId, EbayOfferDetailsWithId $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->put(
            $body,
            new WithOfferItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function deleteOffer(string $offerId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->offer()->byOfferId($offerId)->delete(
            new WithOfferItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function publishOffer(string $offerId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PublishResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->publish()->post(
            new PublishRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function withdrawOffer(string $offerId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?WithdrawResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->byOfferId($offerId)->withdraw()->post(
            new WithdrawRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function getListingFees(OfferKeysWithId $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?FeesSummaryResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->get_listing_fees()->post(
            $body,
            new Get_listing_feesRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function bulkCreateOffer(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BulkOfferResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_create_offer()->post(
            $body,
            new Bulk_create_offerRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function bulkPublishOffer(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BulkPublishResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_publish_offer()->post(
            $body,
            new Bulk_publish_offerRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function publishOfferByInventoryItemGroup(PublishByInventoryItemGroupRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PublishResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->publish_by_inventory_item_group()->post(
            $body,
            new Publish_by_inventory_item_groupRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function withdrawOfferByInventoryItemGroup(WithdrawByInventoryItemGroupRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->offer()->withdraw_by_inventory_item_group()->post(
            $body,
            new Withdraw_by_inventory_item_groupRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    // ── Bulk Operations ──────────────────────────────────────────────────────

    public function bulkMigrateListing(BulkMigrateListing $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_migrate_listing()->post(
            $body,
            new Bulk_migrate_listingRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }

    public function bulkUpdatePriceQuantity(BulkPriceQuantity $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_update_price_quantity()->post(
            $body,
            new Bulk_update_price_quantityRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait();
    }
}
