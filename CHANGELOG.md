# ChangeLog

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `FeedClient`:
  - `createCustomerServiceMetricTask`: `(CreateServiceMetricsTaskRequest, ?string, ?RequestOptions)` → `(CreateServiceMetricsTaskRequest, ?string, ?string, ?RequestOptions)`
  - `createTask`: `(CreateTaskRequest, ?string, ?RequestOptions)` → `(CreateTaskRequest, ?string, ?string, ?string, ?RequestOptions)`
- The following operations changed signature on `InventoryClient`:
  - `bulkCreateOffer`: `(mixed, ?string, ?RequestOptions)` → `(BulkEbayOfferDetailsWithKeys, ?string, ?RequestOptions)`
  - `bulkPublishOffer`: `(mixed, ?string, ?RequestOptions)` → `(BulkOffer, ?string, ?RequestOptions)`
  - `createOrReplaceSkuLocationMapping`: `(string, string, mixed, ?string, ?RequestOptions)` → `(string, string, LocationMapping, ?string, ?RequestOptions)`
  - `updateInventoryLocation`: `(string, mixed, ?string, ?RequestOptions)` → `(string, InventoryLocation, ?string, ?RequestOptions)`
- The following operations changed signature on `ListingGraphQLClient`:
  - `videosByIds`: `(VideosByIdsInput, ?string, ?RequestOptions)` → `(?VideosByIdsInput, ?string, ?RequestOptions)`
- The following operations changed signature on `MediaClient`:
  - `createImageFromFile`: `(?string, ?RequestOptions)` → `(mixed, ?string, ?RequestOptions)`
  - `uploadDocument`: `(string, ?string, ?RequestOptions)` → `(string, mixed, ?string, ?RequestOptions)`
  - `uploadVideo`: `(string, StreamInterface, ?string, ?RequestOptions)` → `(string, mixed, ?string, ?string, ?string, ?RequestOptions)`

- The following operations were added to `ListingGraphQLClient`:
  - `userSavedSearches`
