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

abstract readonly class VideoProcessingFailureReason
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): VideoCorruptedError|VideoInternalProcessingError|VideoInvalidInputValidationError|VideoInvalidMediaStreamError|VideoModerationFailedError|VideoPlaylistGenerationError|VideoProcessingTimeoutError|VideoSystemResourceError|VideoThumbnailGenerationError
    {
        return match ($data['__typename'] ?? null) {
            'VideoCorruptedError' => VideoCorruptedError::fromArray($data),
            'VideoInternalProcessingError' => VideoInternalProcessingError::fromArray($data),
            'VideoInvalidInputValidationError' => VideoInvalidInputValidationError::fromArray($data),
            'VideoInvalidMediaStreamError' => VideoInvalidMediaStreamError::fromArray($data),
            'VideoModerationFailedError' => VideoModerationFailedError::fromArray($data),
            'VideoPlaylistGenerationError' => VideoPlaylistGenerationError::fromArray($data),
            'VideoProcessingTimeoutError' => VideoProcessingTimeoutError::fromArray($data),
            'VideoSystemResourceError' => VideoSystemResourceError::fromArray($data),
            'VideoThumbnailGenerationError' => VideoThumbnailGenerationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for VideoProcessingFailureReason: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
