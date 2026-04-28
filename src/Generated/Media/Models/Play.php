<?php

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The two streaming video URLs available for a successfully uploaded video with a status of <code>LIVE</code>. The supported streaming video protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming).
*/
class Play implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $playUrl The playable URL for this video.
    */
    private ?string $playUrl = null;
    
    /**
     * @var string|null $protocol The protocol for the video playlist. Supported protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:ProtocolEnum'>eBay API documentation</a>
    */
    private ?string $protocol = null;
    
    /**
     * Instantiates a new Play and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Play
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Play {
        return new Play();
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
            'playUrl' => fn(ParseNode $n) => $o->setPlayUrl($n->getStringValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getStringValue()),
        ];
    }

    /**
     * Gets the playUrl property value. The playable URL for this video.
     * @return string|null
    */
    public function getPlayUrl(): ?string {
        return $this->playUrl;
    }

    /**
     * Gets the protocol property value. The protocol for the video playlist. Supported protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:ProtocolEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getProtocol(): ?string {
        return $this->protocol;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('playUrl', $this->getPlayUrl());
        $writer->writeStringValue('protocol', $this->getProtocol());
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
     * Sets the playUrl property value. The playable URL for this video.
     * @param string|null $value Value to set for the playUrl property.
    */
    public function setPlayUrl(?string $value): void {
        $this->playUrl = $value;
    }

    /**
     * Sets the protocol property value. The protocol for the video playlist. Supported protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:ProtocolEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the protocol property.
    */
    public function setProtocol(?string $value): void {
        $this->protocol = $value;
    }

}
