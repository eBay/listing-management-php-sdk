# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`FeedClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createCustomerServiceMetricTask` | `(CreateServiceMetricsTaskRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(CreateServiceMetricsTaskRequest $body, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `createTask` | `(CreateTaskRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(CreateTaskRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCustomerServiceMetricTasks` | `(?string $dateRange, ?string $feedType, ?string $limit, ?string $lookBackDays, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $dateRange, ?string $feedType, ?int $limit, ?int $lookBackDays, ?int $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getInventoryTasks` | `(?string $dateRange, ?string $feedType, ?string $limit, ?string $lookBackDays, ?string $offset, ?string $scheduleId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $feedType, ?string $scheduleId, ?int $lookBackDays, ?string $dateRange, ?int $limit, ?int $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getOrderTasks` | `(?string $dateRange, ?string $feedType, ?string $limit, ?string $lookBackDays, ?string $offset, ?string $scheduleId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $dateRange, ?string $feedType, ?int $limit, ?int $lookBackDays, ?int $offset, ?string $scheduleId, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getSchedules` | `(?string $feedType, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $feedType, ?int $limit, ?int $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getScheduleTemplates` | `(?string $feedType, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $feedType, ?int $limit, ?int $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getTasks` | `(?string $dateRange, ?string $feedType, ?string $limit, ?string $lookBackDays, ?string $offset, ?string $scheduleId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $dateRange, ?string $feedType, ?int $limit, ?int $lookBackDays, ?int $offset, ?string $scheduleId, ?string $accessToken, ?RequestOptions $requestOptions)` |

`InventoryClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `bulkCreateOffer` | `(mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(BulkEbayOfferDetailsWithKeys $body, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `bulkPublishOffer` | `(mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(BulkOffer $body, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `createOrReplaceSkuLocationMapping` | `(string $listingId, string $sku, mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $listingId, string $sku, LocationMapping $body, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `updateInventoryLocation` | `(string $merchantLocationKey, mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $merchantLocationKey, InventoryLocation $body, ?string $accessToken, ?RequestOptions $requestOptions)` |

`ListingGraphQLClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `videosByIds` | `(VideosByIdsInput $input, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?VideosByIdsInput $input, ?string $accessToken, ?RequestOptions $requestOptions)` |

`MediaClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createImageFromFile` | `(?string $accessToken, ?RequestOptions $requestOptions)` | `(mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `uploadDocument` | `(string $documentId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $documentId, mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `uploadVideo` | `(string $videoId, StreamInterface $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $videoId, ?string $contentLength, ?string $contentRange, ?string $accessToken, ?RequestOptions $requestOptions)` |

### Added

#### `ListingGraphQLClient`

- `userSavedSearches`
#### `MediaClient`

- `downloadPostOrderDocument`
- `removePostOrderDocument`
- `uploadPostOrderDocument`
