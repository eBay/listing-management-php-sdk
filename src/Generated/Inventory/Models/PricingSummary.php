<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to specify the listing price for the product and settings for the Minimum Advertised Price and Strikethrough Pricing features. The <strong>price</strong> field must be supplied before an offer is published, but a seller may create an offer without supplying a price initially. The Minimum Advertised Price feature is only available on the US site. Strikethrough Pricing is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites.
*/
class PricingSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $auctionReservePrice This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $auctionReservePrice = null;
    
    /**
     * @var Amount|null $auctionStartPrice This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $auctionStartPrice = null;
    
    /**
     * @var Amount|null $minimumAdvertisedPrice This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $minimumAdvertisedPrice = null;
    
    /**
     * @var string|null $originallySoldForRetailPriceOn This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:SoldOnEnum'>eBay API documentation</a>
    */
    private ?string $originallySoldForRetailPriceOn = null;
    
    /**
     * @var Amount|null $originalRetailPrice This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $originalRetailPrice = null;
    
    /**
     * @var Amount|null $price This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $price = null;
    
    /**
     * @var string|null $pricingVisibility This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MinimumAdvertisedPriceHandlingEnum'>eBay API documentation</a>
    */
    private ?string $pricingVisibility = null;
    
    /**
     * Instantiates a new PricingSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PricingSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PricingSummary {
        return new PricingSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the auctionReservePrice property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getAuctionReservePrice(): ?Amount {
        return $this->auctionReservePrice;
    }

    /**
     * Gets the auctionStartPrice property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getAuctionStartPrice(): ?Amount {
        return $this->auctionStartPrice;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'auctionReservePrice' => fn(ParseNode $n) => $o->setAuctionReservePrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'auctionStartPrice' => fn(ParseNode $n) => $o->setAuctionStartPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'minimumAdvertisedPrice' => fn(ParseNode $n) => $o->setMinimumAdvertisedPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'originallySoldForRetailPriceOn' => fn(ParseNode $n) => $o->setOriginallySoldForRetailPriceOn($n->getStringValue()),
            'originalRetailPrice' => fn(ParseNode $n) => $o->setOriginalRetailPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'pricingVisibility' => fn(ParseNode $n) => $o->setPricingVisibility($n->getStringValue()),
        ];
    }

    /**
     * Gets the minimumAdvertisedPrice property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getMinimumAdvertisedPrice(): ?Amount {
        return $this->minimumAdvertisedPrice;
    }

    /**
     * Gets the originallySoldForRetailPriceOn property value. This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:SoldOnEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getOriginallySoldForRetailPriceOn(): ?string {
        return $this->originallySoldForRetailPriceOn;
    }

    /**
     * Gets the originalRetailPrice property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getOriginalRetailPrice(): ?Amount {
        return $this->originalRetailPrice;
    }

    /**
     * Gets the price property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getPrice(): ?Amount {
        return $this->price;
    }

    /**
     * Gets the pricingVisibility property value. This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MinimumAdvertisedPriceHandlingEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPricingVisibility(): ?string {
        return $this->pricingVisibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('auctionReservePrice', $this->getAuctionReservePrice());
        $writer->writeObjectValue('auctionStartPrice', $this->getAuctionStartPrice());
        $writer->writeObjectValue('minimumAdvertisedPrice', $this->getMinimumAdvertisedPrice());
        $writer->writeStringValue('originallySoldForRetailPriceOn', $this->getOriginallySoldForRetailPriceOn());
        $writer->writeObjectValue('originalRetailPrice', $this->getOriginalRetailPrice());
        $writer->writeObjectValue('price', $this->getPrice());
        $writer->writeStringValue('pricingVisibility', $this->getPricingVisibility());
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
     * Sets the auctionReservePrice property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the auctionReservePrice property.
    */
    public function setAuctionReservePrice(?Amount $value): void {
        $this->auctionReservePrice = $value;
    }

    /**
     * Sets the auctionStartPrice property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the auctionStartPrice property.
    */
    public function setAuctionStartPrice(?Amount $value): void {
        $this->auctionStartPrice = $value;
    }

    /**
     * Sets the minimumAdvertisedPrice property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the minimumAdvertisedPrice property.
    */
    public function setMinimumAdvertisedPrice(?Amount $value): void {
        $this->minimumAdvertisedPrice = $value;
    }

    /**
     * Sets the originallySoldForRetailPriceOn property value. This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:SoldOnEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the originallySoldForRetailPriceOn property.
    */
    public function setOriginallySoldForRetailPriceOn(?string $value): void {
        $this->originallySoldForRetailPriceOn = $value;
    }

    /**
     * Sets the originalRetailPrice property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the originalRetailPrice property.
    */
    public function setOriginalRetailPrice(?Amount $value): void {
        $this->originalRetailPrice = $value;
    }

    /**
     * Sets the price property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the price property.
    */
    public function setPrice(?Amount $value): void {
        $this->price = $value;
    }

    /**
     * Sets the pricingVisibility property value. This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MinimumAdvertisedPriceHandlingEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the pricingVisibility property.
    */
    public function setPricingVisibility(?string $value): void {
        $this->pricingVisibility = $value;
    }

}
