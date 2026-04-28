<?php

declare(strict_types=1);

namespace EBay\ListingManagement\Clients\Rest;

use EBay\ListingManagement\Configuration\TokenContext;
use EBay\ListingManagement\Generated\Media\MediaApiClient;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateDocumentFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateImageFromUrlRequest;
use EBay\ListingManagement\Generated\Media\Models\CreateVideoRequest;
use Psr\Http\Message\StreamInterface;

final class MediaClient
{
    public function __construct(private readonly MediaApiClient $kiota) {}

    // ── Documents ────────────────────────────────────────────────────────────

    public function getDocument(string $documentId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->document()->byDocument_id($documentId)->get()->wait();
    }

    public function createDocument(CreateDocumentRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->document()->post($body)->wait();
    }

    public function createDocumentFromUrl(CreateDocumentFromUrlRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->document()->create_document_from_url()->post($body)->wait();
    }

    public function uploadDocument(string $documentId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->document()->byDocument_id($documentId)->upload()->post()->wait();
    }

    // ── Images ───────────────────────────────────────────────────────────────

    public function getImage(string $imageId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->image()->byImage_id($imageId)->get()->wait();
    }

    public function createImageFromFile(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->image()->create_image_from_file()->post()->wait();
    }

    public function createImageFromUrl(CreateImageFromUrlRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->image()->create_image_from_url()->post($body)->wait();
    }

    // ── Videos ───────────────────────────────────────────────────────────────

    public function getVideo(string $videoId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->video()->byVideo_id($videoId)->get()->wait();
    }

    public function createVideo(CreateVideoRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->video()->post($body)->wait();
    }

    public function uploadVideo(string $videoId, StreamInterface $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->video()->byVideo_id($videoId)->upload()->post($body)->wait();
    }
}
