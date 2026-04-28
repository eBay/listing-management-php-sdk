<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to enable the use of a sales-tax table, to pass in a tax exception category code, or to specify a VAT percentage.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces.</span>
*/
class Tax implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $applyTax When set to <code>true</code>, the seller's account-level sales-tax table will be used to calculate sales tax for an order.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul></p></div><br>For complete information about using sales-tax tables, refer to <a href="/api-docs/sell/static/seller-accounts/tax-tables.html" target="_blank">Establishing sales-tax tables</a>.<br><br>Note that a seller can enable the use of a sales-tax table, but if a sales-tax rate is not specified for the buyer's tax jurisdiction, sales tax will not be applied to the order.<br><br>When a <code>thirdPartyTaxCategory</code> value is used, <code>applyTax</code> must also be set to <code>true</code>.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.<br><br>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.
    */
    private ?bool $applyTax = null;
    
    /**
     * @var string|null $thirdPartyTaxCategory The tax exception category code. If this field is used, sales tax will also apply to a service/fee, and not just the item price. This is to be used only by sellers who have opted into sales tax being calculated by a sales tax calculation vendor. If you are interested in becoming a tax calculation vendor partner with eBay, contact <a href="mailto:developer-relations@ebay.com ">developer-relations@ebay.com</a>. One supported value for this field is <code>WASTE_RECYCLING_FEE</code>. If this field is used, the <strong>applyTax</strong> field must also be used and set to <code>true</code><br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.
    */
    private ?string $thirdPartyTaxCategory = null;
    
    /**
     * @var float|null $vatPercentage This value is the Value Add Tax (VAT) rate for the item, if any. When a VAT percentage is specified, the item's VAT information appears on the listing's View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. <br><br>To use VAT, a seller must be a business seller with a VAT-ID registered with eBay, and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346).<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.
    */
    private ?float $vatPercentage = null;
    
    /**
     * Instantiates a new Tax and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Tax
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Tax {
        return new Tax();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applyTax property value. When set to <code>true</code>, the seller's account-level sales-tax table will be used to calculate sales tax for an order.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul></p></div><br>For complete information about using sales-tax tables, refer to <a href="/api-docs/sell/static/seller-accounts/tax-tables.html" target="_blank">Establishing sales-tax tables</a>.<br><br>Note that a seller can enable the use of a sales-tax table, but if a sales-tax rate is not specified for the buyer's tax jurisdiction, sales tax will not be applied to the order.<br><br>When a <code>thirdPartyTaxCategory</code> value is used, <code>applyTax</code> must also be set to <code>true</code>.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.<br><br>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.
     * @return bool|null
    */
    public function getApplyTax(): ?bool {
        return $this->applyTax;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applyTax' => fn(ParseNode $n) => $o->setApplyTax($n->getBooleanValue()),
            'thirdPartyTaxCategory' => fn(ParseNode $n) => $o->setThirdPartyTaxCategory($n->getStringValue()),
            'vatPercentage' => fn(ParseNode $n) => $o->setVatPercentage($n->getFloatValue()),
        ];
    }

    /**
     * Gets the thirdPartyTaxCategory property value. The tax exception category code. If this field is used, sales tax will also apply to a service/fee, and not just the item price. This is to be used only by sellers who have opted into sales tax being calculated by a sales tax calculation vendor. If you are interested in becoming a tax calculation vendor partner with eBay, contact <a href="mailto:developer-relations@ebay.com ">developer-relations@ebay.com</a>. One supported value for this field is <code>WASTE_RECYCLING_FEE</code>. If this field is used, the <strong>applyTax</strong> field must also be used and set to <code>true</code><br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.
     * @return string|null
    */
    public function getThirdPartyTaxCategory(): ?string {
        return $this->thirdPartyTaxCategory;
    }

    /**
     * Gets the vatPercentage property value. This value is the Value Add Tax (VAT) rate for the item, if any. When a VAT percentage is specified, the item's VAT information appears on the listing's View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. <br><br>To use VAT, a seller must be a business seller with a VAT-ID registered with eBay, and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346).<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.
     * @return float|null
    */
    public function getVatPercentage(): ?float {
        return $this->vatPercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('applyTax', $this->getApplyTax());
        $writer->writeStringValue('thirdPartyTaxCategory', $this->getThirdPartyTaxCategory());
        $writer->writeFloatValue('vatPercentage', $this->getVatPercentage());
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
     * Sets the applyTax property value. When set to <code>true</code>, the seller's account-level sales-tax table will be used to calculate sales tax for an order.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul></p></div><br>For complete information about using sales-tax tables, refer to <a href="/api-docs/sell/static/seller-accounts/tax-tables.html" target="_blank">Establishing sales-tax tables</a>.<br><br>Note that a seller can enable the use of a sales-tax table, but if a sales-tax rate is not specified for the buyer's tax jurisdiction, sales tax will not be applied to the order.<br><br>When a <code>thirdPartyTaxCategory</code> value is used, <code>applyTax</code> must also be set to <code>true</code>.<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.<br><br>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.
     * @param bool|null $value Value to set for the applyTax property.
    */
    public function setApplyTax(?bool $value): void {
        $this->applyTax = $value;
    }

    /**
     * Sets the thirdPartyTaxCategory property value. The tax exception category code. If this field is used, sales tax will also apply to a service/fee, and not just the item price. This is to be used only by sellers who have opted into sales tax being calculated by a sales tax calculation vendor. If you are interested in becoming a tax calculation vendor partner with eBay, contact <a href="mailto:developer-relations@ebay.com ">developer-relations@ebay.com</a>. One supported value for this field is <code>WASTE_RECYCLING_FEE</code>. If this field is used, the <strong>applyTax</strong> field must also be used and set to <code>true</code><br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.
     * @param string|null $value Value to set for the thirdPartyTaxCategory property.
    */
    public function setThirdPartyTaxCategory(?string $value): void {
        $this->thirdPartyTaxCategory = $value;
    }

    /**
     * Sets the vatPercentage property value. This value is the Value Add Tax (VAT) rate for the item, if any. When a VAT percentage is specified, the item's VAT information appears on the listing's View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. <br><br>To use VAT, a seller must be a business seller with a VAT-ID registered with eBay, and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346).<br><br>This field will be returned by <a href="/api-docs/sell/inventory/resources/offer/methods/getOffer">getOffer</a> and <a href="/api-docs/sell/inventory/resources/offer/methods/getOffers">getOffers</a> if set for the offer.
     * @param float|null $value Value to set for the vatPercentage property.
    */
    public function setVatPercentage(?float $value): void {
        $this->vatPercentage = $value;
    }

}
