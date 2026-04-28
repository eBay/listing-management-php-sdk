<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\GraphQL;

use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Exceptions\GraphQLException;
use GuzzleHttp\ClientInterface;

final class DynamicGraphQLClient
{
    public function __construct(
        private readonly ClientInterface $guzzle,
        private readonly ListingManagementConfiguration $config,
    ) {}

    /**
     * Execute any GraphQL query or mutation.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed> The `data` field of the GraphQL response.
     * @throws GraphQLException When the response contains GraphQL errors.
     */
    public function execute(string $query, array $variables = [], ?string $accessToken = null): array
    {
        $token = $accessToken ?? TokenContext::get() ?? $this->config->accessToken
            ?? throw new \RuntimeException(
                'No access token. Pass $accessToken per-call or set ListingManagementConfiguration::$accessToken.'
            );

        $payload = ['query' => $query];
        if (!empty($variables)) {
            $payload['variables'] = $variables;
        }

        $response = $this->guzzle->request('POST', $this->config->graphQLBaseUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type'  => 'application/json',
            ],
            'json' => $payload,
        ]);

        $body = json_decode(
            $response->getBody()->getContents(),
            true,
            512,
            JSON_THROW_ON_ERROR
        );

        if (!empty($body['errors'])) {
            throw new GraphQLException(array_column($body['errors'], 'message'));
        }

        return $body['data'] ?? [];
    }
}
