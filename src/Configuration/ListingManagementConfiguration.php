<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Configuration;

final class ListingManagementConfiguration
{
    public string $inventoryBaseUrl = 'https://api.ebay.com/sell/inventory/v1';
    public string $feedBaseUrl      = 'https://api.ebay.com/sell/feed/v1';
    public string $mediaBaseUrl     = 'https://api.ebay.com/commerce/media/v1_beta';
    public string $storesBaseUrl    = 'https://api.ebay.com/sell/stores/v1';
    public string $graphQLBaseUrl   = 'https://api.ebay.com/graphql';

    /** Static fallback access token; per-call token takes precedence. */
    public ?string $accessToken = null;

    /** Default headers applied to every REST and GraphQL request. */
    public RequestOptions $defaultRequestOptions;

    public bool $diagnosticLogging = false;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_filter(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [
                $this->inventoryBaseUrl,
                $this->feedBaseUrl,
                $this->mediaBaseUrl,
                $this->storesBaseUrl,
                $this->graphQLBaseUrl,
            ]
        )));
    }
}
