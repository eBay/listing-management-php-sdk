# ChangeLog

## 2.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `FeedClient`:
  - `getCustomerServiceMetricTasks`: `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?int, ?int, ?int, ?string, ?RequestOptions)`
  - `getInventoryTasks`: `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?int, ?string, ?int, ?int, ?string, ?RequestOptions)`
  - `getOrderTasks`: `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?int, ?int, ?int, ?string, ?string, ?RequestOptions)`
  - `getSchedules`: `(?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?int, ?int, ?string, ?RequestOptions)`
  - `getScheduleTemplates`: `(?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?int, ?int, ?string, ?RequestOptions)`
  - `getTasks`: `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?int, ?int, ?int, ?string, ?string, ?RequestOptions)`
- The following operations changed signature on `MediaClient`:
  - `uploadVideo`: `(string videoId, mixed body, ?string contentLength, ?string contentRange, ?string accessToken, ?RequestOptions requestOptions)` → `(string videoId, ?string contentLength, ?string contentRange, ?string accessToken, ?RequestOptions requestOptions)`

- The following operations were added to `MediaClient`:
  - `downloadPostOrderDocument`
  - `removePostOrderDocument`
  - `uploadPostOrderDocument`

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
