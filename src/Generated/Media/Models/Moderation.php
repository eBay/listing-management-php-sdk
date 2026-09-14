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

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A container that provides video moderation information when calling the <strong>getVideo</strong> method.<br /><br />This container is returned if the specified video has been blocked by moderators.<br /><br /><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> See <a href="https://www.ebay.com/help/selling/listings/creating-managing-listings/add-video-to-listing?id=5272#section2" target="_blank">Video moderation and restrictions</a> in the eBay Seller Center for details about video moderation.</span>
*/
class Moderation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<RejectReasonEnum>|null $rejectReasons The reason(s) why the specified video was blocked by moderators.
    */
    private ?array $rejectReasons = null;
    
    /**
     * Instantiates a new Moderation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Moderation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Moderation {
        return new Moderation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'rejectReasons' => fn(ParseNode $n) => $o->setRejectReasons($n->getCollectionOfEnumValues(RejectReasonEnum::class)),
        ];
    }

    /**
     * Gets the rejectReasons property value. The reason(s) why the specified video was blocked by moderators.
     * @return array<RejectReasonEnum>|null
    */
    public function getRejectReasons(): ?array {
        return $this->rejectReasons;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('rejectReasons', $this->getRejectReasons());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the rejectReasons property value. The reason(s) why the specified video was blocked by moderators.
     * @param array<RejectReasonEnum>|null $value Value to set for the rejectReasons property.
    */
    public function setRejectReasons(?array $value): void {
        $this->rejectReasons = $value;
    }

}
