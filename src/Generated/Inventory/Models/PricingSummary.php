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
     * @var Amount|null $auctionReservePrice This field indicates the lowest price at which the seller is willing to sell an item through an auction listing. Note that setting a Reserve Price will incur a listing fee of $5 or 7.5% of the Reserve Price, whichever is greater. The minimum fee is $5.<br><br><span class="tablenote"><b>Important:</b> This fee is charged regardless of whether or not the item is sold.</span>
    */
    private ?Amount $auctionReservePrice = null;
    
    /**
     * @var Amount|null $auctionStartPrice This field indicates the minimum bidding price for the auction. The bidding starts at this price.<br><br><span class="tablenote"><b>Note:</b> If the <b>auctionReservePrice</b> is also specified, the value of <b>auctionStartPrice</b> must be lower than the value of <b>auctionReservePrice</b>.</span>
    */
    private ?Amount $auctionStartPrice = null;
    
    /**
     * @var Amount|null $minimumAdvertisedPrice This container is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. Minimum Advertised Price (MAP) is an agreement between suppliers (or manufacturers (OEM)) and the retailers (sellers) stipulating the lowest price an item is allowed to be advertised at. Sellers can only offer prices below this price through the use of other discounts. The MAP feature is only available to eligible US sellers. This field will be ignored if the seller and or the listing is not eligible for the MAP feature.<br><br>This container will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
    */
    private ?Amount $minimumAdvertisedPrice = null;
    
    /**
     * @var SoldOnEnum|null $originallySoldForRetailPriceOn This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br><br>This field will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
    */
    private ?SoldOnEnum $originallySoldForRetailPriceOn = null;
    
    /**
     * @var Amount|null $originalRetailPrice This container is needed if the Strikethrough Pricing (STP) feature will be used in the offer. The dollar value passed into this field indicates the original retail price set by the manufacturer (OEM). eBay does not maintain or validate the value supplied here by the seller. The dollar value in this field should always be more than the dollar value in the <strong>price</strong> container. This field and the <strong>originallySoldForRetailPriceOn</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites. Compare the <strong>originalRetailPrice</strong> and the dollar value in the <strong>price</strong> field to determine the amount of savings to the buyer. This Original Retail Price will have a strikethrough line through for a marketing affect.<br><br>This container will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
    */
    private ?Amount $originalRetailPrice = null;
    
    /**
     * @var Amount|null $price This is the listing price of the product. A listing price must be specified before publishing an offer, but it is possible to create an offer without a price.<br><br>For published offers, this container will always be returned, but for unpublished offers, this container will only be returned if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This container and its two child fields (<b>currency</b> and <b>value</b>) are required before an offer can be published to create an active listing.</p></span></div>
    */
    private ?Amount $price = null;
    
    /**
     * @var MinimumAdvertisedPriceHandlingEnum|null $pricingVisibility This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br><br>This field will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
    */
    private ?MinimumAdvertisedPriceHandlingEnum $pricingVisibility = null;
    
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
     * Gets the auctionReservePrice property value. This field indicates the lowest price at which the seller is willing to sell an item through an auction listing. Note that setting a Reserve Price will incur a listing fee of $5 or 7.5% of the Reserve Price, whichever is greater. The minimum fee is $5.<br><br><span class="tablenote"><b>Important:</b> This fee is charged regardless of whether or not the item is sold.</span>
     * @return Amount|null
    */
    public function getAuctionReservePrice(): ?Amount {
        return $this->auctionReservePrice;
    }

    /**
     * Gets the auctionStartPrice property value. This field indicates the minimum bidding price for the auction. The bidding starts at this price.<br><br><span class="tablenote"><b>Note:</b> If the <b>auctionReservePrice</b> is also specified, the value of <b>auctionStartPrice</b> must be lower than the value of <b>auctionReservePrice</b>.</span>
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
            'originallySoldForRetailPriceOn' => fn(ParseNode $n) => $o->setOriginallySoldForRetailPriceOn($n->getEnumValue(SoldOnEnum::class)),
            'originalRetailPrice' => fn(ParseNode $n) => $o->setOriginalRetailPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'pricingVisibility' => fn(ParseNode $n) => $o->setPricingVisibility($n->getEnumValue(MinimumAdvertisedPriceHandlingEnum::class)),
        ];
    }

    /**
     * Gets the minimumAdvertisedPrice property value. This container is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. Minimum Advertised Price (MAP) is an agreement between suppliers (or manufacturers (OEM)) and the retailers (sellers) stipulating the lowest price an item is allowed to be advertised at. Sellers can only offer prices below this price through the use of other discounts. The MAP feature is only available to eligible US sellers. This field will be ignored if the seller and or the listing is not eligible for the MAP feature.<br><br>This container will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @return Amount|null
    */
    public function getMinimumAdvertisedPrice(): ?Amount {
        return $this->minimumAdvertisedPrice;
    }

    /**
     * Gets the originallySoldForRetailPriceOn property value. This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br><br>This field will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @return SoldOnEnum|null
    */
    public function getOriginallySoldForRetailPriceOn(): ?SoldOnEnum {
        return $this->originallySoldForRetailPriceOn;
    }

    /**
     * Gets the originalRetailPrice property value. This container is needed if the Strikethrough Pricing (STP) feature will be used in the offer. The dollar value passed into this field indicates the original retail price set by the manufacturer (OEM). eBay does not maintain or validate the value supplied here by the seller. The dollar value in this field should always be more than the dollar value in the <strong>price</strong> container. This field and the <strong>originallySoldForRetailPriceOn</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites. Compare the <strong>originalRetailPrice</strong> and the dollar value in the <strong>price</strong> field to determine the amount of savings to the buyer. This Original Retail Price will have a strikethrough line through for a marketing affect.<br><br>This container will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @return Amount|null
    */
    public function getOriginalRetailPrice(): ?Amount {
        return $this->originalRetailPrice;
    }

    /**
     * Gets the price property value. This is the listing price of the product. A listing price must be specified before publishing an offer, but it is possible to create an offer without a price.<br><br>For published offers, this container will always be returned, but for unpublished offers, this container will only be returned if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This container and its two child fields (<b>currency</b> and <b>value</b>) are required before an offer can be published to create an active listing.</p></span></div>
     * @return Amount|null
    */
    public function getPrice(): ?Amount {
        return $this->price;
    }

    /**
     * Gets the pricingVisibility property value. This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br><br>This field will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @return MinimumAdvertisedPriceHandlingEnum|null
    */
    public function getPricingVisibility(): ?MinimumAdvertisedPriceHandlingEnum {
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
        $writer->writeEnumValue('originallySoldForRetailPriceOn', $this->getOriginallySoldForRetailPriceOn());
        $writer->writeObjectValue('originalRetailPrice', $this->getOriginalRetailPrice());
        $writer->writeObjectValue('price', $this->getPrice());
        $writer->writeEnumValue('pricingVisibility', $this->getPricingVisibility());
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
     * Sets the auctionReservePrice property value. This field indicates the lowest price at which the seller is willing to sell an item through an auction listing. Note that setting a Reserve Price will incur a listing fee of $5 or 7.5% of the Reserve Price, whichever is greater. The minimum fee is $5.<br><br><span class="tablenote"><b>Important:</b> This fee is charged regardless of whether or not the item is sold.</span>
     * @param Amount|null $value Value to set for the auctionReservePrice property.
    */
    public function setAuctionReservePrice(?Amount $value): void {
        $this->auctionReservePrice = $value;
    }

    /**
     * Sets the auctionStartPrice property value. This field indicates the minimum bidding price for the auction. The bidding starts at this price.<br><br><span class="tablenote"><b>Note:</b> If the <b>auctionReservePrice</b> is also specified, the value of <b>auctionStartPrice</b> must be lower than the value of <b>auctionReservePrice</b>.</span>
     * @param Amount|null $value Value to set for the auctionStartPrice property.
    */
    public function setAuctionStartPrice(?Amount $value): void {
        $this->auctionStartPrice = $value;
    }

    /**
     * Sets the minimumAdvertisedPrice property value. This container is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. Minimum Advertised Price (MAP) is an agreement between suppliers (or manufacturers (OEM)) and the retailers (sellers) stipulating the lowest price an item is allowed to be advertised at. Sellers can only offer prices below this price through the use of other discounts. The MAP feature is only available to eligible US sellers. This field will be ignored if the seller and or the listing is not eligible for the MAP feature.<br><br>This container will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @param Amount|null $value Value to set for the minimumAdvertisedPrice property.
    */
    public function setMinimumAdvertisedPrice(?Amount $value): void {
        $this->minimumAdvertisedPrice = $value;
    }

    /**
     * Sets the originallySoldForRetailPriceOn property value. This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br><br>This field will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @param SoldOnEnum|null $value Value to set for the originallySoldForRetailPriceOn property.
    */
    public function setOriginallySoldForRetailPriceOn(?SoldOnEnum $value): void {
        $this->originallySoldForRetailPriceOn = $value;
    }

    /**
     * Sets the originalRetailPrice property value. This container is needed if the Strikethrough Pricing (STP) feature will be used in the offer. The dollar value passed into this field indicates the original retail price set by the manufacturer (OEM). eBay does not maintain or validate the value supplied here by the seller. The dollar value in this field should always be more than the dollar value in the <strong>price</strong> container. This field and the <strong>originallySoldForRetailPriceOn</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites. Compare the <strong>originalRetailPrice</strong> and the dollar value in the <strong>price</strong> field to determine the amount of savings to the buyer. This Original Retail Price will have a strikethrough line through for a marketing affect.<br><br>This container will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @param Amount|null $value Value to set for the originalRetailPrice property.
    */
    public function setOriginalRetailPrice(?Amount $value): void {
        $this->originalRetailPrice = $value;
    }

    /**
     * Sets the price property value. This is the listing price of the product. A listing price must be specified before publishing an offer, but it is possible to create an offer without a price.<br><br>For published offers, this container will always be returned, but for unpublished offers, this container will only be returned if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This container and its two child fields (<b>currency</b> and <b>value</b>) are required before an offer can be published to create an active listing.</p></span></div>
     * @param Amount|null $value Value to set for the price property.
    */
    public function setPrice(?Amount $value): void {
        $this->price = $value;
    }

    /**
     * Sets the pricingVisibility property value. This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br><br>This field will be returned by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers">getOffers</a> if set for the offer.
     * @param MinimumAdvertisedPriceHandlingEnum|null $value Value to set for the pricingVisibility property.
    */
    public function setPricingVisibility(?MinimumAdvertisedPriceHandlingEnum $value): void {
        $this->pricingVisibility = $value;
    }

}
