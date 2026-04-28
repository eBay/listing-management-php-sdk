<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <strong>listing</strong> container in the <strong>getOffer</strong> and <strong>getOffers</strong> calls to provide the eBay listing ID, the listing status, and quantity sold for the offer. The <strong>listing</strong> container is only returned for published offers, and is not returned for unpublished offers.
*/
class ListingDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingId The unique identifier of the eBay listing that is associated with the published offer. 
    */
    private ?string $listingId = null;
    
    /**
     * @var bool|null $listingOnHold Indicates if a listing is on hold due to an eBay policy violation.<br><p>If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.</p><br><p>If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as true.</p><br><p>Once a listing is fixed, this boolean will no longer be returned.</p>
    */
    private ?bool $listingOnHold = null;
    
    /**
     * @var string|null $listingStatus The enumeration value returned in this field indicates the status of the listing that is associated with the published offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingStatusEnum'>eBay API documentation</a>
    */
    private ?string $listingStatus = null;
    
    /**
     * @var int|null $soldQuantity This integer value indicates the quantity of the product that has been sold for the published offer.
    */
    private ?int $soldQuantity = null;
    
    /**
     * Instantiates a new ListingDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingDetails {
        return new ListingDetails();
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
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'listingOnHold' => fn(ParseNode $n) => $o->setListingOnHold($n->getBooleanValue()),
            'listingStatus' => fn(ParseNode $n) => $o->setListingStatus($n->getStringValue()),
            'soldQuantity' => fn(ParseNode $n) => $o->setSoldQuantity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the listingId property value. The unique identifier of the eBay listing that is associated with the published offer. 
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the listingOnHold property value. Indicates if a listing is on hold due to an eBay policy violation.<br><p>If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.</p><br><p>If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as true.</p><br><p>Once a listing is fixed, this boolean will no longer be returned.</p>
     * @return bool|null
    */
    public function getListingOnHold(): ?bool {
        return $this->listingOnHold;
    }

    /**
     * Gets the listingStatus property value. The enumeration value returned in this field indicates the status of the listing that is associated with the published offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getListingStatus(): ?string {
        return $this->listingStatus;
    }

    /**
     * Gets the soldQuantity property value. This integer value indicates the quantity of the product that has been sold for the published offer.
     * @return int|null
    */
    public function getSoldQuantity(): ?int {
        return $this->soldQuantity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeBooleanValue('listingOnHold', $this->getListingOnHold());
        $writer->writeStringValue('listingStatus', $this->getListingStatus());
        $writer->writeIntegerValue('soldQuantity', $this->getSoldQuantity());
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
     * Sets the listingId property value. The unique identifier of the eBay listing that is associated with the published offer. 
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the listingOnHold property value. Indicates if a listing is on hold due to an eBay policy violation.<br><p>If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.</p><br><p>If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as true.</p><br><p>Once a listing is fixed, this boolean will no longer be returned.</p>
     * @param bool|null $value Value to set for the listingOnHold property.
    */
    public function setListingOnHold(?bool $value): void {
        $this->listingOnHold = $value;
    }

    /**
     * Sets the listingStatus property value. The enumeration value returned in this field indicates the status of the listing that is associated with the published offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the listingStatus property.
    */
    public function setListingStatus(?string $value): void {
        $this->listingStatus = $value;
    }

    /**
     * Sets the soldQuantity property value. This integer value indicates the quantity of the product that has been sold for the published offer.
     * @param int|null $value Value to set for the soldQuantity property.
    */
    public function setSoldQuantity(?int $value): void {
        $this->soldQuantity = $value;
    }

}
