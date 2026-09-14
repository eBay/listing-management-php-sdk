# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`FeedClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createCustomerServiceMetricTask` | `(CreateServiceMetricsTaskRequest, ?string, ?RequestOptions)` | `(CreateServiceMetricsTaskRequest, ?string, ?string, ?RequestOptions)` |
| `createTask` | `(CreateTaskRequest, ?string, ?RequestOptions)` | `(CreateTaskRequest, ?string, ?string, ?string, ?RequestOptions)` |
| `getCustomerServiceMetricTasks` | `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?int, ?int, ?int, ?string, ?RequestOptions)` |
| `getInventoryTasks` | `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?int, ?string, ?int, ?int, ?string, ?RequestOptions)` |
| `getOrderTasks` | `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?int, ?int, ?int, ?string, ?string, ?RequestOptions)` |
| `getSchedules` | `(?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?int, ?int, ?string, ?RequestOptions)` |
| `getScheduleTemplates` | `(?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?int, ?int, ?string, ?RequestOptions)` |
| `getTasks` | `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?int, ?int, ?int, ?string, ?string, ?RequestOptions)` |

`InventoryClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `bulkCreateOffer` | `(mixed, ?string, ?RequestOptions)` | `(BulkEbayOfferDetailsWithKeys, ?string, ?RequestOptions)` |
| `bulkPublishOffer` | `(mixed, ?string, ?RequestOptions)` | `(BulkOffer, ?string, ?RequestOptions)` |
| `createOrReplaceSkuLocationMapping` | `(string, string, mixed, ?string, ?RequestOptions)` | `(string, string, LocationMapping, ?string, ?RequestOptions)` |
| `updateInventoryLocation` | `(string, mixed, ?string, ?RequestOptions)` | `(string, InventoryLocation, ?string, ?RequestOptions)` |

`ListingGraphQLClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `videosByIds` | `(VideosByIdsInput, ?string, ?RequestOptions)` | `(?VideosByIdsInput, ?string, ?RequestOptions)` |

`MediaClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createImageFromFile` | `(?string, ?RequestOptions)` | `(mixed, ?string, ?RequestOptions)` |
| `uploadDocument` | `(string, ?string, ?RequestOptions)` | `(string, mixed, ?string, ?RequestOptions)` |
| `uploadVideo` | `(string, StreamInterface, ?string, ?RequestOptions)` | `(string $videoId, ?string $contentLength, ?string $contentRange, ?string $accessToken, ?RequestOptions $requestOptions)` |

### Added

#### `ListingGraphQLClient`

- `userSavedSearches`
#### `MediaClient`

- `downloadPostOrderDocument`
- `removePostOrderDocument`
- `uploadPostOrderDocument`
