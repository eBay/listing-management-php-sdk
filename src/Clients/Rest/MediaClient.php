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

use EBay\ListingManagement\Configuration\ListingManagementConfiguration;
use EBay\ListingManagement\Configuration\RequestOptions;
use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Generated\Media\MediaApiClient;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateImageFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateVideoRequest;
use EBay\ListingManagement\Generated\Media\Document\Create_document_from_url\Create_document_from_urlRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Document\DocumentRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Document\Item\Upload\UploadRequestBuilderPostRequestConfiguration as DocumentUploadPostConfig;
use EBay\ListingManagement\Generated\Media\Document\Item\WithDocument_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Image\Create_image_from_file\Create_image_from_fileRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Image\Create_image_from_url\Create_image_from_urlRequestBuilderPostRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Image\Item\WithImage_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Video\Item\Upload\UploadRequestBuilderPostRequestConfiguration as VideoUploadPostConfig;
use EBay\ListingManagement\Generated\Media\Video\Item\WithVideo_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingManagement\Generated\Media\Video\VideoRequestBuilderPostRequestConfiguration;
use Psr\Http\Message\StreamInterface;

final class MediaClient
{
    public function __construct(
        private readonly MediaApiClient $kiota,
        private readonly ListingManagementConfiguration $config = new ListingManagementConfiguration(),
    ) {}

    /**
     * Merge default headers with per-request headers.
     * Default headers fill first; per-request headers fill any remaining gaps.
     *
     * @return array<string,string>
     */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    // ── Documents ────────────────────────────────────────────────────────────

    public function getDocument(string $documentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->document()->byDocument_id($documentId)->get(
            new WithDocument_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createDocument(CreateDocumentRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->document()->post(
            $body,
            new DocumentRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createDocumentFromUrl(CreateDocumentFromUrlRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->document()->create_document_from_url()->post(
            $body,
            new Create_document_from_urlRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function uploadDocument(string $documentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->document()->byDocument_id($documentId)->upload()->post(
            new DocumentUploadPostConfig(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Images ───────────────────────────────────────────────────────────────

    public function getImage(string $imageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->image()->byImage_id($imageId)->get(
            new WithImage_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createImageFromFile(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->image()->create_image_from_file()->post(
            new Create_image_from_fileRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createImageFromUrl(CreateImageFromUrlRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->image()->create_image_from_url()->post(
            $body,
            new Create_image_from_urlRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Videos ───────────────────────────────────────────────────────────────

    public function getVideo(string $videoId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->video()->byVideo_id($videoId)->get(
            new WithVideo_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createVideo(CreateVideoRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->video()->post(
            $body,
            new VideoRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function uploadVideo(string $videoId, StreamInterface $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->video()->byVideo_id($videoId)->upload()->post(
            $body,
            new VideoUploadPostConfig(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }
}
