<?php

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base response type of the <b>getStore</b> method. It is used to describe a seller's eBay store, and includes the eBay Store name, the description of the store, the URL to the eBay Store.
*/
class GetStoreResponseType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The seller-provided description of the eBay Store.<br><br> <b>Max length: </b>300
    */
    private ?string $description = null;
    
    /**
     * @var string|null $lastOpenedTime Indicates the time the store was last opened or reopened.
    */
    private ?string $lastOpenedTime = null;
    
    /**
     * @var StoreLogoType|null $logo This type is used to provide url of the seller's store logo.
    */
    private ?StoreLogoType $logo = null;
    
    /**
     * @var string|null $name The name of the eBay Store. The name is shown at the top of the Store page.<br><br> <b>Max length: </b>35
    */
    private ?string $name = null;
    
    /**
     * @var string|null $url The complete URL of the user's store.
    */
    private ?string $url = null;
    
    /**
     * @var string|null $urlPath The relative URL path of the Store.<br><br> <b>Max length: </b>58
    */
    private ?string $urlPath = null;
    
    /**
     * Instantiates a new GetStoreResponseType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetStoreResponseType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetStoreResponseType {
        return new GetStoreResponseType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The seller-provided description of the eBay Store.<br><br> <b>Max length: </b>300
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'lastOpenedTime' => fn(ParseNode $n) => $o->setLastOpenedTime($n->getStringValue()),
            'logo' => fn(ParseNode $n) => $o->setLogo($n->getObjectValue([StoreLogoType::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'urlPath' => fn(ParseNode $n) => $o->setUrlPath($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastOpenedTime property value. Indicates the time the store was last opened or reopened.
     * @return string|null
    */
    public function getLastOpenedTime(): ?string {
        return $this->lastOpenedTime;
    }

    /**
     * Gets the logo property value. This type is used to provide url of the seller's store logo.
     * @return StoreLogoType|null
    */
    public function getLogo(): ?StoreLogoType {
        return $this->logo;
    }

    /**
     * Gets the name property value. The name of the eBay Store. The name is shown at the top of the Store page.<br><br> <b>Max length: </b>35
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the url property value. The complete URL of the user's store.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Gets the urlPath property value. The relative URL path of the Store.<br><br> <b>Max length: </b>58
     * @return string|null
    */
    public function getUrlPath(): ?string {
        return $this->urlPath;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('lastOpenedTime', $this->getLastOpenedTime());
        $writer->writeObjectValue('logo', $this->getLogo());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeStringValue('urlPath', $this->getUrlPath());
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
     * Sets the description property value. The seller-provided description of the eBay Store.<br><br> <b>Max length: </b>300
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the lastOpenedTime property value. Indicates the time the store was last opened or reopened.
     * @param string|null $value Value to set for the lastOpenedTime property.
    */
    public function setLastOpenedTime(?string $value): void {
        $this->lastOpenedTime = $value;
    }

    /**
     * Sets the logo property value. This type is used to provide url of the seller's store logo.
     * @param StoreLogoType|null $value Value to set for the logo property.
    */
    public function setLogo(?StoreLogoType $value): void {
        $this->logo = $value;
    }

    /**
     * Sets the name property value. The name of the eBay Store. The name is shown at the top of the Store page.<br><br> <b>Max length: </b>35
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the url property value. The complete URL of the user's store.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

    /**
     * Sets the urlPath property value. The relative URL path of the Store.<br><br> <b>Max length: </b>58
     * @param string|null $value Value to set for the urlPath property.
    */
    public function setUrlPath(?string $value): void {
        $this->urlPath = $value;
    }

}
