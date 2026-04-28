<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Configuration;

final class ListingManagementConfiguration
{
    public string $inventoryBaseUrl = 'https://api.ebay.com';
    public string $feedBaseUrl      = 'https://api.ebay.com';
    public string $mediaBaseUrl     = 'https://api.ebay.com';
    public string $storesBaseUrl    = 'https://api.ebay.com';
    public string $graphQLBaseUrl   = 'https://api.ebay.com/graphql';

    /** Static fallback access token; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

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
