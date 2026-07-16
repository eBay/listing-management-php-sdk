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

namespace EBay\ListingManagement\GraphQL\Types\Results;

readonly class Video
{
    public function __construct(
        public ?string $videoId = null,
        public ?string $description = null,
        public ?string $expiresAt = null,
        public ?int $height = null,
        public ?VideoModeration $moderation = null,
        /** @var VideoPlaylist[] */
        public array $playlists = [],
        public ?VideoProcessingFailureReason $processingFailure = null,
        public ?int $size = null,
        public ?string $status = null,
        public ?VideoThumbnail $thumbnail = null,
        public ?string $title = null,
        public ?string $videoDuration = null,
        public ?int $width = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            videoId:           $data['videoId'] ?? null,
            description:       $data['description'] ?? null,
            expiresAt:         $data['expiresAt'] ?? null,
            height:            isset($data['height']) ? (int)$data['height'] : null,
            moderation:        isset($data['moderation']) ? VideoModeration::fromArray($data['moderation']) : null,
            playlists:         array_map(static fn(array $p) => VideoPlaylist::fromArray($p), $data['playlists'] ?? []),
            processingFailure: isset($data['processingFailure']) ? VideoProcessingFailureReason::fromArray($data['processingFailure']) : null,
            size:              isset($data['size']) ? (int)$data['size'] : null,
            status:            $data['status'] ?? null,
            thumbnail:         isset($data['thumbnail']) ? VideoThumbnail::fromArray($data['thumbnail']) : null,
            title:             $data['title'] ?? null,
            videoDuration:     $data['videoDuration'] ?? null,
            width:             isset($data['width']) ? (int)$data['width'] : null,
        );
    }
}
