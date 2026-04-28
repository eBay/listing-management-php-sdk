<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base response of the <strong>getOffers</strong> call, and it is an array of one or more of the seller's offers, along with pagination data.
*/
class Offers implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href This is the URL to the current page of offers.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit This integer value is the number of offers that will be displayed on each results page.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next This is the URL to the next page of offers. This field will only be returned if there are additional offers to view.
    */
    private ?string $next = null;
    
    /**
     * @var array<EbayOfferDetailsWithAll>|null $offers This container is an array of one or more of the seller's offers for the SKU value that is passed in through the required <strong>sku</strong> query parameter.<br><br><span class="tablenote"> <strong>Note:</strong> Currently, the Inventory API does not support the same SKU across multiple eBay marketplaces.</span><br><strong>Max Occurs:</strong> 25
    */
    private ?array $offers = null;
    
    /**
     * @var string|null $prev This is the URL to the previous page of offers. This field will only be returned if there are previous offers to view.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $size This integer value indicates the number of offers being displayed on the current page of results. This number will generally be the same as the <strong>limit</strong> value if there are additional pages of results to view.  <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers and this value will be <code>2</code>. Otherwise, only one offer will be returned and this value will be <code>1</code>.</span>
    */
    private ?int $size = null;
    
    /**
     * @var int|null $total This integer value is the total number of offers that exist for the specified SKU value. Based on this number and on the <strong>limit</strong> value, the seller may have to toggle through multiple pages to view all offers. <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers, so this value would be <code>2</code>. Otherwise, only one offer will be returned and this value will be <code>1</code>.</span>
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new Offers and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Offers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Offers {
        return new Offers();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offers' => fn(ParseNode $n) => $o->setOffers($n->getCollectionOfObjectValues([EbayOfferDetailsWithAll::class, 'createFromDiscriminatorValue'])),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. This is the URL to the current page of offers.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. This integer value is the number of offers that will be displayed on each results page.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. This is the URL to the next page of offers. This field will only be returned if there are additional offers to view.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offers property value. This container is an array of one or more of the seller's offers for the SKU value that is passed in through the required <strong>sku</strong> query parameter.<br><br><span class="tablenote"> <strong>Note:</strong> Currently, the Inventory API does not support the same SKU across multiple eBay marketplaces.</span><br><strong>Max Occurs:</strong> 25
     * @return array<EbayOfferDetailsWithAll>|null
    */
    public function getOffers(): ?array {
        return $this->offers;
    }

    /**
     * Gets the prev property value. This is the URL to the previous page of offers. This field will only be returned if there are previous offers to view.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the size property value. This integer value indicates the number of offers being displayed on the current page of results. This number will generally be the same as the <strong>limit</strong> value if there are additional pages of results to view.  <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers and this value will be <code>2</code>. Otherwise, only one offer will be returned and this value will be <code>1</code>.</span>
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the total property value. This integer value is the total number of offers that exist for the specified SKU value. Based on this number and on the <strong>limit</strong> value, the seller may have to toggle through multiple pages to view all offers. <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers, so this value would be <code>2</code>. Otherwise, only one offer will be returned and this value will be <code>1</code>.</span>
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeCollectionOfObjectValues('offers', $this->getOffers());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. This is the URL to the current page of offers.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. This integer value is the number of offers that will be displayed on each results page.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. This is the URL to the next page of offers. This field will only be returned if there are additional offers to view.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offers property value. This container is an array of one or more of the seller's offers for the SKU value that is passed in through the required <strong>sku</strong> query parameter.<br><br><span class="tablenote"> <strong>Note:</strong> Currently, the Inventory API does not support the same SKU across multiple eBay marketplaces.</span><br><strong>Max Occurs:</strong> 25
     * @param array<EbayOfferDetailsWithAll>|null $value Value to set for the offers property.
    */
    public function setOffers(?array $value): void {
        $this->offers = $value;
    }

    /**
     * Sets the prev property value. This is the URL to the previous page of offers. This field will only be returned if there are previous offers to view.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the size property value. This integer value indicates the number of offers being displayed on the current page of results. This number will generally be the same as the <strong>limit</strong> value if there are additional pages of results to view.  <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers and this value will be <code>2</code>. Otherwise, only one offer will be returned and this value will be <code>1</code>.</span>
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->size = $value;
    }

    /**
     * Sets the total property value. This integer value is the total number of offers that exist for the specified SKU value. Based on this number and on the <strong>limit</strong> value, the seller may have to toggle through multiple pages to view all offers. <br><br><span class="tablenote"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers, so this value would be <code>2</code>. Otherwise, only one offer will be returned and this value will be <code>1</code>.</span>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
