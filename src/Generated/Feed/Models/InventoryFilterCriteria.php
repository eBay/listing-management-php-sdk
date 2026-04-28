<?php

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container is used to set the filter criteria for the ActiveInventoryReport. A seller can create an ActiveInventoryReport for a single listing format.
*/
class InventoryFilterCriteria implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingFormat The listing format for the ActiveInventoryReport being created. Supported types are:<br><ul><li><code>AUCTION</code></li><li><code>FIXED_PRICE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:ListingFormatEnum'>eBay API documentation</a>
    */
    private ?string $listingFormat = null;
    
    /**
     * Instantiates a new InventoryFilterCriteria and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryFilterCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryFilterCriteria {
        return new InventoryFilterCriteria();
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
            'listingFormat' => fn(ParseNode $n) => $o->setListingFormat($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingFormat property value. The listing format for the ActiveInventoryReport being created. Supported types are:<br><ul><li><code>AUCTION</code></li><li><code>FIXED_PRICE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:ListingFormatEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getListingFormat(): ?string {
        return $this->listingFormat;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingFormat', $this->getListingFormat());
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
     * Sets the listingFormat property value. The listing format for the ActiveInventoryReport being created. Supported types are:<br><ul><li><code>AUCTION</code></li><li><code>FIXED_PRICE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:ListingFormatEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the listingFormat property.
    */
    public function setListingFormat(?string $value): void {
        $this->listingFormat = $value;
    }

}
