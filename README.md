# EBay Listing Management PHP SDK

PHP SDK for eBay Listing Management APIs, combining REST and GraphQL clients.

## Covered APIs

- **Inventory V1** — inventory items, offers, inventory item groups
- **Feed V1** — bulk listing feeds (upload/download)
- **Stores V1** — eBay store management
- **Media V1 Beta** — video and image uploads
- **GraphQL** — listing and inventory queries

## OAuth Scopes

All operations require **authorization code grant** (user access tokens).

### Minimum required scopes

```
https://api.ebay.com/oauth/api_scope
https://api.ebay.com/oauth/api_scope/sell.inventory
https://api.ebay.com/oauth/api_scope/sell.fulfillment
https://api.ebay.com/oauth/api_scope/sell.analytics.readonly
https://api.ebay.com/oauth/api_scope/sell.stores
https://api.ebay.com/oauth/api_scope/sell.listing
https://api.ebay.com/oauth/api_scope/sell.listing.read
https://api.ebay.com/oauth/api_scope/sell.auction.read
```

### Per-API breakdown

#### Sell Feed API (`sell_feed_v1`)

| Operation(s) | Scope |
|---|---|
| `createCustomerServiceMetricTask`, `getCustomerServiceMetricTask`, `getCustomerServiceMetricTasks` | `sell.analytics.readonly` |
| `createInventoryTask`, `getInventoryTask`, `getInventoryTasks` | `sell.inventory` |
| `createOrderTask`, `getOrderTask`, `getOrderTasks` | `sell.fulfillment` |
| `createSchedule`, `deleteSchedule`, `getSchedule`, `getSchedules`, `updateSchedule`, `getScheduleTemplate`, `getScheduleTemplates`, `getLatestResultFile`, `createTask`, `getTask`, `getTasks`, `getInputFile`, `getResultFile`, `uploadFile` | any of: `sell.inventory`, `sell.fulfillment`, `sell.marketing`, `commerce.catalog.readonly`, `sell.analytics.readonly` |

#### Sell Inventory API (`sell_inventory_v1`)

| Operation(s) | Scope |
|---|---|
| `getInventoryItem`, `getInventoryItems`, `bulkGetInventoryItem`, `getInventoryItemGroup`, `getProductCompatibility`, `getOffer`, `getOffers`, `getListingFees`, `getInventoryLocation`, `getInventoryLocations`, `getSkuLocationMapping` | `sell.inventory.readonly` or `sell.inventory` |
| All remaining write operations | `sell.inventory` |

#### Commerce Media API (`commerce_media_v1_beta`)

All operations (`createDocument`, `createDocumentFromUrl`, `createImageFromFile`, `createImageFromUrl`, `createVideo`, `getDocument`, `getImage`, `getVideo`, `uploadDocument`, `uploadVideo`): `sell.inventory`

#### Sell Stores API (`sell_stores_v1`)

All operations (`addStoreCategory`, `deleteStoreCategory`, `getStore`, `getStoreCategories`, `getStoreTask`, `getStoreTasks`, `moveStoreCategory`, `renameStoreCategory`): `sell.stores`

#### GraphQL (`eBay_Graph`)

| Operation(s) | Scope |
|---|---|
| `createListing`, `updateListing`, `endListing`, `relistListing`, `createSecondChanceListing`, `bulkUpdateInventory` | `sell.listing` |
| `sellerListings`, `sellerListingSearch` | `sell.listing.read` |
| `itemBiddingActivity` | `sell.auction.read` or `buy.auction.read` |

## Specs

OpenAPI specs and GraphQL schema are in `specs/`.

## License

This project is licensed under the Apache License 2.0. See [LICENSE.md](LICENSE.md) for details.
