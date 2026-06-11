<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\KiotaAuthProvider;
use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\Generated\Feed\FeedApiClient;
use EBay\ListingManagement\Generated\Feed\Models\CreateInventoryTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateOrderTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateServiceMetricsTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateUserScheduleRequest;
use EBay\ListingManagement\Generated\Feed\Models\UpdateUserScheduleRequest;
use EBay\ListingManagement\Generated\Feed\Customer_service_metric_task\Customer_service_metric_taskRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Customer_service_metric_task\Customer_service_metric_taskRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Customer_service_metric_task\Item\WithTask_ItemRequestBuilderGetRequestConfiguration as CsmWithTaskGetConfig;
use EBay\ListingManagement\Generated\Feed\Inventory_task\Inventory_taskRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Inventory_task\Inventory_taskRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Inventory_task\Item\WithTask_ItemRequestBuilderGetRequestConfiguration as InventoryWithTaskGetConfig;
use EBay\ListingManagement\Generated\Feed\Order_task\Item\WithTask_ItemRequestBuilderGetRequestConfiguration as OrderWithTaskGetConfig;
use EBay\ListingManagement\Generated\Feed\Order_task\Order_taskRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Order_task\Order_taskRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule_template\Item\WithSchedule_template_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule_template\Schedule_templateRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule\Item\Download_result_file\Download_result_fileRequestBuilderGetRequestConfiguration as ScheduleDownloadResultConfig;
use EBay\ListingManagement\Generated\Feed\Schedule\Item\WithSchedule_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule\Item\WithSchedule_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule\Item\WithSchedule_ItemRequestBuilderPutRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule\ScheduleRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Schedule\ScheduleRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Task\Item\Download_input_file\Download_input_fileRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Task\Item\Download_result_file\Download_result_fileRequestBuilderGetRequestConfiguration as TaskDownloadResultConfig;
use EBay\ListingManagement\Generated\Feed\Task\Item\Upload_file\Upload_fileRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Task\Item\WithTask_ItemRequestBuilderGetRequestConfiguration as TaskWithTaskGetConfig;
use EBay\ListingManagement\Generated\Feed\Task\TaskRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Feed\Task\TaskRequestBuilderPostRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class FeedClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingManagementConfiguration $config,
    ) {}

    /**
     * Merge default headers with per-request headers.
     * Default headers fill first; per-request headers fill any remaining gaps.
     *
     * @return array<string,string>
     */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }

    // ── Generic Tasks ────────────────────────────────────────────────────────

    public function getTasks(
        ?string $dateRange = null,
        ?string $feedType = null,
        ?string $limit = null,
        ?string $lookBackDays = null,
        ?string $offset = null,
        ?string $scheduleId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->task()->get(
                new TaskRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: TaskRequestBuilderGetRequestConfiguration::createQueryParameters(
                        date_range: $dateRange,
                        feed_type: $feedType,
                        limit: $limit,
                        look_back_days: $lookBackDays,
                        offset: $offset,
                        schedule_id: $scheduleId,
                    ),
                )
            )->wait()
        );
    }

    public function getTask(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->task()->byTask_id($taskId)->get(
                new TaskWithTaskGetConfig(headers: $headers)
            )->wait()
        );
    }

    public function createTask(CreateTaskRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->task()->post(
                $body,
                new TaskRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getInputFile(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->task()->byTask_id($taskId)->download_input_file()->get(
                new Download_input_fileRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getResultFile(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->task()->byTask_id($taskId)->download_result_file()->get(
                new TaskDownloadResultConfig(headers: $headers)
            )->wait()
        );
    }

    public function uploadFile(string $taskId, mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        // Note: Kiota's upload_file builder handles the body internally via form-data;
        // the body param is kept for API compatibility but headers are threaded via config.
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->task()->byTask_id($taskId)->upload_file()->post(
                new Upload_fileRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Customer Service Metric Tasks ────────────────────────────────────────

    public function getCustomerServiceMetricTasks(
        ?string $dateRange = null,
        ?string $feedType = null,
        ?string $limit = null,
        ?string $lookBackDays = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->customer_service_metric_task()->get(
                new Customer_service_metric_taskRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Customer_service_metric_taskRequestBuilderGetRequestConfiguration::createQueryParameters(
                        date_range: $dateRange,
                        feed_type: $feedType,
                        limit: $limit,
                        look_back_days: $lookBackDays,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getCustomerServiceMetricTask(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->customer_service_metric_task()->byTask_id($taskId)->get(
                new CsmWithTaskGetConfig(headers: $headers)
            )->wait()
        );
    }

    public function createCustomerServiceMetricTask(CreateServiceMetricsTaskRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->customer_service_metric_task()->post(
                $body,
                new Customer_service_metric_taskRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Inventory Tasks ──────────────────────────────────────────────────────

    public function getInventoryTasks(
        ?string $dateRange = null,
        ?string $feedType = null,
        ?string $limit = null,
        ?string $lookBackDays = null,
        ?string $offset = null,
        ?string $scheduleId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->inventory_task()->get(
                new Inventory_taskRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Inventory_taskRequestBuilderGetRequestConfiguration::createQueryParameters(
                        date_range: $dateRange,
                        feed_type: $feedType,
                        limit: $limit,
                        look_back_days: $lookBackDays,
                        offset: $offset,
                        schedule_id: $scheduleId,
                    ),
                )
            )->wait()
        );
    }

    public function getInventoryTask(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->inventory_task()->byTask_id($taskId)->get(
                new InventoryWithTaskGetConfig(headers: $headers)
            )->wait()
        );
    }

    public function createInventoryTask(CreateInventoryTaskRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->inventory_task()->post(
                $body,
                new Inventory_taskRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Order Tasks ──────────────────────────────────────────────────────────

    public function getOrderTasks(
        ?string $dateRange = null,
        ?string $feedType = null,
        ?string $limit = null,
        ?string $lookBackDays = null,
        ?string $offset = null,
        ?string $scheduleId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order_task()->get(
                new Order_taskRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Order_taskRequestBuilderGetRequestConfiguration::createQueryParameters(
                        date_range: $dateRange,
                        feed_type: $feedType,
                        limit: $limit,
                        look_back_days: $lookBackDays,
                        offset: $offset,
                        schedule_id: $scheduleId,
                    ),
                )
            )->wait()
        );
    }

    public function getOrderTask(string $taskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order_task()->byTask_id($taskId)->get(
                new OrderWithTaskGetConfig(headers: $headers)
            )->wait()
        );
    }

    public function createOrderTask(CreateOrderTaskRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->order_task()->post(
                $body,
                new Order_taskRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Schedules ────────────────────────────────────────────────────────────

    public function getSchedules(
        ?string $feedType = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->schedule()->get(
                new ScheduleRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: ScheduleRequestBuilderGetRequestConfiguration::createQueryParameters(
                        feed_type: $feedType,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getSchedule(string $scheduleId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->schedule()->bySchedule_id($scheduleId)->get(
                new WithSchedule_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createSchedule(CreateUserScheduleRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->schedule()->post(
                $body,
                new ScheduleRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateSchedule(string $scheduleId, UpdateUserScheduleRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->schedule()->bySchedule_id($scheduleId)->put(
                $body,
                new WithSchedule_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteSchedule(string $scheduleId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->schedule()->bySchedule_id($scheduleId)->delete(
                new WithSchedule_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getLatestResultFile(string $scheduleId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->schedule()->bySchedule_id($scheduleId)->download_result_file()->get(
                new ScheduleDownloadResultConfig(headers: $headers)
            )->wait()
        );
    }

    // ── Schedule Templates ───────────────────────────────────────────────────

    public function getScheduleTemplates(
        ?string $feedType = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->schedule_template()->get(
                new Schedule_templateRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Schedule_templateRequestBuilderGetRequestConfiguration::createQueryParameters(
                        feed_type: $feedType,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getScheduleTemplate(string $scheduleTemplateId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->schedule_template()->bySchedule_template_id($scheduleTemplateId)->get(
                new WithSchedule_template_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): FeedApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->feedBaseUrl);
        return new FeedApiClient($adapter);
    }
}
