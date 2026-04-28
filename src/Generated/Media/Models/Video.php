<?php

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A response field that retrieves all the metadata for the video, including its <b>title</b>, <b>classification</b>, <b>size</b>, <b>description</b>, <b>status</b>, <b>status message</b> (if any), and <b>expiration date</b>.
*/
class Video implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $classification The intended use for this video content. Currently, videos can only be added and associated with eBay listings, so the only supported value is <code>ITEM</code>.
    */
    private ?array $classification = null;
    
    /**
     * @var string|null $description The description of the video. The video description is an optional field that can be set using the <a href=" /api-docs/commerce/media/resources/video/methods/createVideo" target="_blank">createVideo</a> method.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $expirationDate The date and time when an unused video will expire and be removed from the eBay Video Services server, in Coordinated Universal Time (UTC).<br><br>As long as a video is being used in an active listing, that video will remain on the server and be accessible. If a video is not being used on an active listing, its expiration date is automatically set to 30 days after the video's initial upload.
    */
    private ?string $expirationDate = null;
    
    /**
     * @var Moderation|null $moderation A container that provides video moderation information when calling the <strong>getVideo</strong> method.<br /><br />This container is returned if the specified video has been blocked by moderators.<br /><br /><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> See <a href="https://www.ebay.com/help/selling/listings/creating-managing-listings/add-video-to-listing?id=5272#section2" target="_blank">Video moderation and restrictions</a> in the eBay Seller Center for details about video moderation.</span>
    */
    private ?Moderation $moderation = null;
    
    /**
     * @var array<Play>|null $playLists The playlist created for the uploaded video, which provides the streaming video URLs to play the video. The supported streaming video protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). The playlist will only be generated if a video is successfully uploaded with a status of <code>LIVE</code>.
    */
    private ?array $playLists = null;
    
    /**
     * @var int|null $size The size, in bytes, of the video content.
    */
    private ?int $size = null;
    
    /**
     * @var string|null $status The status of the current video resource. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:VideoStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * @var string|null $statusMessage The <b>statusMessage</b> field contains additional information on the status. For example, information on why processing might have failed or if the video was blocked.
    */
    private ?string $statusMessage = null;
    
    /**
     * @var Image|null $thumbnail A type that provides the location of the image.
    */
    private ?Image $thumbnail = null;
    
    /**
     * @var string|null $title The title of the video.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $videoId The unique ID of the video.
    */
    private ?string $videoId = null;
    
    /**
     * Instantiates a new Video and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Video
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Video {
        return new Video();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the classification property value. The intended use for this video content. Currently, videos can only be added and associated with eBay listings, so the only supported value is <code>ITEM</code>.
     * @return array<string>|null
    */
    public function getClassification(): ?array {
        return $this->classification;
    }

    /**
     * Gets the description property value. The description of the video. The video description is an optional field that can be set using the <a href=" /api-docs/commerce/media/resources/video/methods/createVideo" target="_blank">createVideo</a> method.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the expirationDate property value. The date and time when an unused video will expire and be removed from the eBay Video Services server, in Coordinated Universal Time (UTC).<br><br>As long as a video is being used in an active listing, that video will remain on the server and be accessible. If a video is not being used on an active listing, its expiration date is automatically set to 30 days after the video's initial upload.
     * @return string|null
    */
    public function getExpirationDate(): ?string {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classification' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setClassification($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getStringValue()),
            'moderation' => fn(ParseNode $n) => $o->setModeration($n->getObjectValue([Moderation::class, 'createFromDiscriminatorValue'])),
            'playLists' => fn(ParseNode $n) => $o->setPlayLists($n->getCollectionOfObjectValues([Play::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusMessage' => fn(ParseNode $n) => $o->setStatusMessage($n->getStringValue()),
            'thumbnail' => fn(ParseNode $n) => $o->setThumbnail($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
        ];
    }

    /**
     * Gets the moderation property value. A container that provides video moderation information when calling the <strong>getVideo</strong> method.<br /><br />This container is returned if the specified video has been blocked by moderators.<br /><br /><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> See <a href="https://www.ebay.com/help/selling/listings/creating-managing-listings/add-video-to-listing?id=5272#section2" target="_blank">Video moderation and restrictions</a> in the eBay Seller Center for details about video moderation.</span>
     * @return Moderation|null
    */
    public function getModeration(): ?Moderation {
        return $this->moderation;
    }

    /**
     * Gets the playLists property value. The playlist created for the uploaded video, which provides the streaming video URLs to play the video. The supported streaming video protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). The playlist will only be generated if a video is successfully uploaded with a status of <code>LIVE</code>.
     * @return array<Play>|null
    */
    public function getPlayLists(): ?array {
        return $this->playLists;
    }

    /**
     * Gets the size property value. The size, in bytes, of the video content.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the status property value. The status of the current video resource. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:VideoStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusMessage property value. The <b>statusMessage</b> field contains additional information on the status. For example, information on why processing might have failed or if the video was blocked.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        return $this->statusMessage;
    }

    /**
     * Gets the thumbnail property value. A type that provides the location of the image.
     * @return Image|null
    */
    public function getThumbnail(): ?Image {
        return $this->thumbnail;
    }

    /**
     * Gets the title property value. The title of the video.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the videoId property value. The unique ID of the video.
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->videoId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('classification', $this->getClassification());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('expirationDate', $this->getExpirationDate());
        $writer->writeObjectValue('moderation', $this->getModeration());
        $writer->writeCollectionOfObjectValues('playLists', $this->getPlayLists());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusMessage', $this->getStatusMessage());
        $writer->writeObjectValue('thumbnail', $this->getThumbnail());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('videoId', $this->getVideoId());
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
     * Sets the classification property value. The intended use for this video content. Currently, videos can only be added and associated with eBay listings, so the only supported value is <code>ITEM</code>.
     * @param array<string>|null $value Value to set for the classification property.
    */
    public function setClassification(?array $value): void {
        $this->classification = $value;
    }

    /**
     * Sets the description property value. The description of the video. The video description is an optional field that can be set using the <a href=" /api-docs/commerce/media/resources/video/methods/createVideo" target="_blank">createVideo</a> method.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the expirationDate property value. The date and time when an unused video will expire and be removed from the eBay Video Services server, in Coordinated Universal Time (UTC).<br><br>As long as a video is being used in an active listing, that video will remain on the server and be accessible. If a video is not being used on an active listing, its expiration date is automatically set to 30 days after the video's initial upload.
     * @param string|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?string $value): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the moderation property value. A container that provides video moderation information when calling the <strong>getVideo</strong> method.<br /><br />This container is returned if the specified video has been blocked by moderators.<br /><br /><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> See <a href="https://www.ebay.com/help/selling/listings/creating-managing-listings/add-video-to-listing?id=5272#section2" target="_blank">Video moderation and restrictions</a> in the eBay Seller Center for details about video moderation.</span>
     * @param Moderation|null $value Value to set for the moderation property.
    */
    public function setModeration(?Moderation $value): void {
        $this->moderation = $value;
    }

    /**
     * Sets the playLists property value. The playlist created for the uploaded video, which provides the streaming video URLs to play the video. The supported streaming video protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). The playlist will only be generated if a video is successfully uploaded with a status of <code>LIVE</code>.
     * @param array<Play>|null $value Value to set for the playLists property.
    */
    public function setPlayLists(?array $value): void {
        $this->playLists = $value;
    }

    /**
     * Sets the size property value. The size, in bytes, of the video content.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->size = $value;
    }

    /**
     * Sets the status property value. The status of the current video resource. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:VideoStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusMessage property value. The <b>statusMessage</b> field contains additional information on the status. For example, information on why processing might have failed or if the video was blocked.
     * @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value): void {
        $this->statusMessage = $value;
    }

    /**
     * Sets the thumbnail property value. A type that provides the location of the image.
     * @param Image|null $value Value to set for the thumbnail property.
    */
    public function setThumbnail(?Image $value): void {
        $this->thumbnail = $value;
    }

    /**
     * Sets the title property value. The title of the video.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the videoId property value. The unique ID of the video.
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

}
