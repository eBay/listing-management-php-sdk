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
use EBay\ListingManagement\Generated\Media\MediaApiClient;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentResponse;
use EBay\ListingManagement\Generated\Media\Models\CreateImageFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateVideoRequest;
use EBay\ListingManagement\Generated\Media\Models\DocumentResponse;
use EBay\ListingManagement\Generated\Media\Models\ImageResponse;
use EBay\ListingManagement\Generated\Media\Models\Video;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class MediaClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingManagementConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function createImageFromFile(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ImageResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->image()->create_image_from_file()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Image\Create_image_from_file\Create_image_from_fileRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createImageFromUrl(CreateImageFromUrlRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ImageResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->image()->create_image_from_url()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Image\Create_image_from_url\Create_image_from_urlRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getImage(string $imageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ImageResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->image()->byImage_id($imageId)->get(
                new \EBay\ListingManagement\Generated\Media\Image\Item\WithImage_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createVideo(CreateVideoRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->video()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Video\VideoRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getVideo(string $videoId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Video
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->video()->byVideo_id($videoId)->get(
                new \EBay\ListingManagement\Generated\Media\Video\Item\WithVideo_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function uploadVideo(
        string $videoId,
        ?string $contentLength = null,
        ?string $contentRange = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($contentLength !== null) {
            $headers["Content-Length"] = $contentLength;
        }
        if ($contentRange !== null) {
            $headers["Content-Range"] = $contentRange;
        }
        $this->call($accessToken, fn($api) =>
            $api->video()->byVideo_id($videoId)->upload()->post(
                new \EBay\ListingManagement\Generated\Media\Video\Item\Upload\UploadRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createDocument(CreateDocumentRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CreateDocumentResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->document()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Document\DocumentRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createDocumentFromUrl(CreateDocumentFromUrlRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CreateDocumentResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->document()->create_document_from_url()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Document\Create_document_from_url\Create_document_from_urlRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getDocument(string $documentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?DocumentResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->document()->byDocument_id($documentId)->get(
                new \EBay\ListingManagement\Generated\Media\Document\Item\WithDocument_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function uploadDocument(
        string $documentId,
        mixed $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?DocumentResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->document()->byDocument_id($documentId)->upload()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Document\Item\Upload\UploadRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function downloadPostOrderDocument(string $documentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->post_order()->document()->byDocument_id($documentId)->get(
                new \EBay\ListingManagement\Generated\Media\Post_order\Document\Item\WithDocument_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function removePostOrderDocument(string $documentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->post_order()->document()->byDocument_id($documentId)->delete(
                new \EBay\ListingManagement\Generated\Media\Post_order\Document\Item\WithDocument_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function uploadPostOrderDocument(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->post_order()->document()->post(
                $body,
                new \EBay\ListingManagement\Generated\Media\Post_order\Document\DocumentRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): MediaApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->mediaBaseUrl);
        return new MediaApiClient($adapter);
    }
}
