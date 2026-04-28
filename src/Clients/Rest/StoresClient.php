<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Generated\Stores\StoresApiClient;
use EBay\ListingManagement\Generated\Stores\Models\AddStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\DeleteStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\MoveStoreCategoryRequestType;
use EBay\ListingManagement\Generated\Stores\Models\RenameStoreCategoryRequestType;

final class StoresClient
{
    public function __construct(private readonly StoresApiClient $kiota) {}

    // ── Store ────────────────────────────────────────────────────────────────

    public function getStore(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->get()->wait();
    }

    // ── Store Categories ─────────────────────────────────────────────────────

    public function getStoreCategories(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->get()->wait();
    }

    public function addStoreCategory(AddStoreCategoryRequestType $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->post($body)->wait();
    }

    public function deleteStoreCategory(string $categoryId, DeleteStoreCategoryRequestType $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->store()->categories()->byCategory_id($categoryId)->delete($body)->wait();
    }

    public function renameStoreCategory(string $categoryId, RenameStoreCategoryRequestType $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->byCategory_id($categoryId)->put($body)->wait();
    }

    public function moveStoreCategory(MoveStoreCategoryRequestType $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->categories()->move_category()->post($body)->wait();
    }

    // ── Store Tasks ──────────────────────────────────────────────────────────

    public function getStoreTasks(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->tasks()->get()->wait();
    }

    public function getStoreTask(string $taskId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->store()->tasks()->byTask_id($taskId)->get()->wait();
    }
}
