<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Generated\Feed\FeedApiClient;
use EBay\ListingManagement\Generated\Feed\Models\CreateInventoryTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateOrderTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateServiceMetricsTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateTaskRequest;
use EBay\ListingManagement\Generated\Feed\Models\CreateUserScheduleRequest;
use EBay\ListingManagement\Generated\Feed\Models\UpdateUserScheduleRequest;

final class FeedClient
{
    public function __construct(private readonly FeedApiClient $kiota) {}

    // ── Generic Tasks ────────────────────────────────────────────────────────

    public function getTasks(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->task()->get()->wait();
    }

    public function getTask(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->task()->byTask_id($taskId)->get()->wait();
    }

    public function createTask(CreateTaskRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->task()->post($body)->wait();
    }

    public function getInputFile(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->task()->byTask_id($taskId)->download_input_file()->get()->wait();
    }

    public function getResultFile(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->task()->byTask_id($taskId)->download_result_file()->get()->wait();
    }

    public function uploadFile(string $taskId, mixed $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->task()->byTask_id($taskId)->upload_file()->post($body)->wait();
    }

    // ── Customer Service Metric Tasks ────────────────────────────────────────

    public function getCustomerServiceMetricTasks(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->customer_service_metric_task()->get()->wait();
    }

    public function getCustomerServiceMetricTask(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->customer_service_metric_task()->byTask_id($taskId)->get()->wait();
    }

    public function createCustomerServiceMetricTask(CreateServiceMetricsTaskRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->customer_service_metric_task()->post($body)->wait();
    }

    // ── Inventory Tasks ──────────────────────────────────────────────────────

    public function getInventoryTasks(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_task()->get()->wait();
    }

    public function getInventoryTask(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->inventory_task()->byTask_id($taskId)->get()->wait();
    }

    public function createInventoryTask(CreateInventoryTaskRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->inventory_task()->post($body)->wait();
    }

    // ── Order Tasks ──────────────────────────────────────────────────────────

    public function getOrderTasks(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->order_task()->get()->wait();
    }

    public function getOrderTask(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->order_task()->byTask_id($taskId)->get()->wait();
    }

    public function createOrderTask(CreateOrderTaskRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->order_task()->post($body)->wait();
    }

    // ── Schedules ────────────────────────────────────────────────────────────

    public function getSchedules(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->schedule()->get()->wait();
    }

    public function getSchedule(string $scheduleId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->schedule()->bySchedule_id($scheduleId)->get()->wait();
    }

    public function createSchedule(CreateUserScheduleRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->schedule()->post($body)->wait();
    }

    public function updateSchedule(string $scheduleId, UpdateUserScheduleRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->schedule()->bySchedule_id($scheduleId)->put($body)->wait();
    }

    public function deleteSchedule(string $scheduleId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->schedule()->bySchedule_id($scheduleId)->delete()->wait();
    }

    public function getLatestResultFile(string $scheduleId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->schedule()->bySchedule_id($scheduleId)->download_result_file()->get()->wait();
    }

    // ── Schedule Templates ───────────────────────────────────────────────────

    public function getScheduleTemplates(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->schedule_template()->get()->wait();
    }

    public function getScheduleTemplate(string $scheduleTemplateId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->schedule_template()->bySchedule_template_id($scheduleTemplateId)->get()->wait();
    }
}
