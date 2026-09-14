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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type is used to identify business policies including payment, return, and fulfillment policies, as well as to identify custom policies. These policies are, or will be, associated with the listing. Every published offer must have a payment, return, and fulfillment business policy associated with it. Additionally, depending on the country/countries in which sellers are offering products and/or services to consumers (e.g., residents of the European Union), specifying additional polices may be required.<br><br>This type is also used to override the shipping costs of one or more shipping service options that are associated with the fulfillment policy, to enable eBay Plus eligibility for a listing, or to enable the Best Offer feature on the listing.
*/
class ListingPolicies implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BestOffer|null $bestOfferTerms This container is used if the seller would like to support the Best Offer feature on their listing. To enable the Best Offer feature, the seller will have to set the <strong>bestOfferEnabled</strong> field to <code>true</code>, and the seller also has the option of setting 'auto-accept' and 'auto-decline' price thresholds.<br><br><span class="tablenote"><b>Note:</b> Best Offer is unavailable for multi-variation listings.</span><br>This container is only returned if Best Offer is enabled on listing.
    */
    private ?BestOffer $bestOfferTerms = null;
    
    /**
     * @var bool|null $eBayPlusIfEligible This field is included in an offer and set to <code>true</code> if a Top-Rated seller is opted in to the eBay Plus program. With the eBay Plus program, qualified sellers must commit to next-day delivery of the item, and the buyers must have an eBay Plus subscription to be eligible to receive the benefits of this program, which are free, next-day delivery, as well as free returns.<br><br><span class="tablenote"><b>Note:</b> Currently, this program is only available on the Germany and Australian sites.</span><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer.
    */
    private ?bool $eBayPlusIfEligible = null;
    
    /**
     * @var string|null $fulfillmentPolicyId This unique identifier indicates the fulfillment business policy that will be used once an offer is published and converted to an eBay listing. This fulfillment business policy will set all fulfillment-related settings for the eBay listing.<br><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the fulfillment business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings. The seller may also want to review the shipping service costs in the fulfillment policy, and that seller might decide to override the shipping costs for one or more shipping service options by using the <strong>shippingCostOverrides</strong> container.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getfulfillmentpolicies" target="_blank">getFulfillmentPolicies</a> method. There are also calls in the <strong>Account API v1</strong> to retrieve a fulfillment policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
    */
    private ?string $fulfillmentPolicyId = null;
    
    /**
     * @var string|null $paymentPolicyId This unique identifier indicates the payment business policy that will be used once an offer is published and converted to an eBay listing. This payment business policy will set all payment-related settings for the eBay listing.<br><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the payment business policy to make sure that it is compatible with the marketplace and listing category before assigning it to the offer.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all payment policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getpaymentpolicies" target="_blank">getPaymentPolicies</a> method. There are also calls in the <strong>Account API v1</strong> to retrieve a payment policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
    */
    private ?string $paymentPolicyId = null;
    
    /**
     * @var array<string>|null $productCompliancePolicyIds This field contains the array of unique identifiers indicating the seller-created <i>global</i> product compliance policies that will be used once an offer is published and converted to a listing.<br><br>Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br><br>A maximum of six (6) global product compliance policies may apply to <i>each offer</i>.<span class="tablenote"><b>Note:</b> For countries that support country-specific policies, use <a href="#request.listingPolicies.regionalProductCompliancePolicies">regionalProductCompliancePolicies</a> to apply them to an offer.</span>
    */
    private ?array $productCompliancePolicyIds = null;
    
    /**
     * @var RegionalProductCompliancePolicies|null $regionalProductCompliancePolicies A comma-delimited list of unique identifiers indicating the seller-created <i>country-specific</i> product compliance policies that that will be used once an offer is published and converted to a listing.<br><br>Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br><br>Each offer may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul><br>For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (i.e., 6 policies x 3 countries,) may be included with each offer.<span class="tablenote"><b>Note:</b> Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <a href="#request.listingPolicies.productCompliancePolicyIds">productCompliancePolicyIds</a>.</span>
    */
    private ?RegionalProductCompliancePolicies $regionalProductCompliancePolicies = null;
    
    /**
     * @var RegionalTakeBackPolicies|null $regionalTakeBackPolicies The list of unique identifiers indicating the seller-created <i>country-specific</i> take-back policies that will be used once an offer is published and converted to a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br><br>Each offer may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul><br><span class="tablenote"><b>Note:</b> Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <a href="#request.listingPolicies.takeBackPolicyId">takeBackPolicyId</a>.</span>
    */
    private ?RegionalTakeBackPolicies $regionalTakeBackPolicies = null;
    
    /**
     * @var string|null $returnPolicyId This unique identifier indicates the return business policy that will be used once an offer is published and converted to an eBay listing. This return business policy will set all return policy settings for the eBay listing.<br><br><span class="tablenote"><b>Note:</b> As a part of Digital Services Act (DSA) requirements, as of April 3, 2023, buyers in the EU must be allowed to return an item within 14 days or more, unless the item is exempt. Where applicable, sellers should update their return policies to reflect this requirement of accepting returns from EU buyers.</span><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the return business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getreturnpolicies" target="_blank">getReturnPolicies</a> call. There are also calls in the <strong>Account API v1</strong> to retrieve a return policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
    */
    private ?string $returnPolicyId = null;
    
    /**
     * @var array<ShippingCostOverride>|null $shippingCostOverrides This container is used if the seller wishes to override the shipping costs or surcharge for one or more domestic or international shipping service options defined in the fulfillment listing policy. To override the costs of a specific domestic or international shipping service option, the seller must know the priority/order of that shipping service in the fulfillment listing policy. The name of a shipping service option can be found in the <strong>shippingOptions.shippingServices.shippingServiceCode</strong> field of the fulfillment policy, and the priority/order of that shipping service option is found in the <strong>shippingOptions.shippingServices.sortOrderId</strong> field. Both of these values can be retrieved by searching for that fulfillment policy with the <strong>getFulfillmentPolicies</strong> or <strong>getFulfillmentPolicyByName</strong> calls of the <strong>Account API v1</strong>. The <strong>shippingCostOverrides.priority</strong> value should match the <strong>shippingOptions.shippingServices.sortOrderId</strong> in order to override the shipping costs for that shipping service option. The seller must also ensure that the <strong>shippingServiceType</strong> value is set to <code>DOMESTIC</code> to override a domestic shipping service option, or to <code>INTERNATIONAL</code> to override an international shipping service option.<br><br>A separate <strong>ShippingCostOverrides</strong> node is needed for each shipping service option whose costs are being overridden. All defined fields of the <strong>shippingCostOverrides</strong> container should be included, even if the shipping costs and surcharge values are not changing.<br><br>The <strong>shippingCostOverrides</strong> container is returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> calls if one or more shipping cost overrides are being applied to the fulfillment policy.
    */
    private ?array $shippingCostOverrides = null;
    
    /**
     * @var string|null $takeBackPolicyId This unique identifier indicates the seller-created <i>global</i> take-back policy that will be used once an offer is published and converted to a listing.<br><br>One (1) global take-back policy may be specified <i>per offer</i>.<br><span class="tablenote"><b>Note:</b> For countries that support country-specific policies, use <a href="#request.listingPolicies.regionalTakeBackPolicies">regionalTakeBackPolicies</a> to apply them to an offer.</span>
    */
    private ?string $takeBackPolicyId = null;
    
    /**
     * Instantiates a new ListingPolicies and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingPolicies
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingPolicies {
        return new ListingPolicies();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the bestOfferTerms property value. This container is used if the seller would like to support the Best Offer feature on their listing. To enable the Best Offer feature, the seller will have to set the <strong>bestOfferEnabled</strong> field to <code>true</code>, and the seller also has the option of setting 'auto-accept' and 'auto-decline' price thresholds.<br><br><span class="tablenote"><b>Note:</b> Best Offer is unavailable for multi-variation listings.</span><br>This container is only returned if Best Offer is enabled on listing.
     * @return BestOffer|null
    */
    public function getBestOfferTerms(): ?BestOffer {
        return $this->bestOfferTerms;
    }

    /**
     * Gets the eBayPlusIfEligible property value. This field is included in an offer and set to <code>true</code> if a Top-Rated seller is opted in to the eBay Plus program. With the eBay Plus program, qualified sellers must commit to next-day delivery of the item, and the buyers must have an eBay Plus subscription to be eligible to receive the benefits of this program, which are free, next-day delivery, as well as free returns.<br><br><span class="tablenote"><b>Note:</b> Currently, this program is only available on the Germany and Australian sites.</span><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer.
     * @return bool|null
    */
    public function getEBayPlusIfEligible(): ?bool {
        return $this->eBayPlusIfEligible;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bestOfferTerms' => fn(ParseNode $n) => $o->setBestOfferTerms($n->getObjectValue([BestOffer::class, 'createFromDiscriminatorValue'])),
            'eBayPlusIfEligible' => fn(ParseNode $n) => $o->setEBayPlusIfEligible($n->getBooleanValue()),
            'fulfillmentPolicyId' => fn(ParseNode $n) => $o->setFulfillmentPolicyId($n->getStringValue()),
            'paymentPolicyId' => fn(ParseNode $n) => $o->setPaymentPolicyId($n->getStringValue()),
            'productCompliancePolicyIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProductCompliancePolicyIds($val);
            },
            'regionalProductCompliancePolicies' => fn(ParseNode $n) => $o->setRegionalProductCompliancePolicies($n->getObjectValue([RegionalProductCompliancePolicies::class, 'createFromDiscriminatorValue'])),
            'regionalTakeBackPolicies' => fn(ParseNode $n) => $o->setRegionalTakeBackPolicies($n->getObjectValue([RegionalTakeBackPolicies::class, 'createFromDiscriminatorValue'])),
            'returnPolicyId' => fn(ParseNode $n) => $o->setReturnPolicyId($n->getStringValue()),
            'shippingCostOverrides' => fn(ParseNode $n) => $o->setShippingCostOverrides($n->getCollectionOfObjectValues([ShippingCostOverride::class, 'createFromDiscriminatorValue'])),
            'takeBackPolicyId' => fn(ParseNode $n) => $o->setTakeBackPolicyId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fulfillmentPolicyId property value. This unique identifier indicates the fulfillment business policy that will be used once an offer is published and converted to an eBay listing. This fulfillment business policy will set all fulfillment-related settings for the eBay listing.<br><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the fulfillment business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings. The seller may also want to review the shipping service costs in the fulfillment policy, and that seller might decide to override the shipping costs for one or more shipping service options by using the <strong>shippingCostOverrides</strong> container.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getfulfillmentpolicies" target="_blank">getFulfillmentPolicies</a> method. There are also calls in the <strong>Account API v1</strong> to retrieve a fulfillment policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @return string|null
    */
    public function getFulfillmentPolicyId(): ?string {
        return $this->fulfillmentPolicyId;
    }

    /**
     * Gets the paymentPolicyId property value. This unique identifier indicates the payment business policy that will be used once an offer is published and converted to an eBay listing. This payment business policy will set all payment-related settings for the eBay listing.<br><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the payment business policy to make sure that it is compatible with the marketplace and listing category before assigning it to the offer.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all payment policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getpaymentpolicies" target="_blank">getPaymentPolicies</a> method. There are also calls in the <strong>Account API v1</strong> to retrieve a payment policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @return string|null
    */
    public function getPaymentPolicyId(): ?string {
        return $this->paymentPolicyId;
    }

    /**
     * Gets the productCompliancePolicyIds property value. This field contains the array of unique identifiers indicating the seller-created <i>global</i> product compliance policies that will be used once an offer is published and converted to a listing.<br><br>Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br><br>A maximum of six (6) global product compliance policies may apply to <i>each offer</i>.<span class="tablenote"><b>Note:</b> For countries that support country-specific policies, use <a href="#request.listingPolicies.regionalProductCompliancePolicies">regionalProductCompliancePolicies</a> to apply them to an offer.</span>
     * @return array<string>|null
    */
    public function getProductCompliancePolicyIds(): ?array {
        return $this->productCompliancePolicyIds;
    }

    /**
     * Gets the regionalProductCompliancePolicies property value. A comma-delimited list of unique identifiers indicating the seller-created <i>country-specific</i> product compliance policies that that will be used once an offer is published and converted to a listing.<br><br>Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br><br>Each offer may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul><br>For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (i.e., 6 policies x 3 countries,) may be included with each offer.<span class="tablenote"><b>Note:</b> Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <a href="#request.listingPolicies.productCompliancePolicyIds">productCompliancePolicyIds</a>.</span>
     * @return RegionalProductCompliancePolicies|null
    */
    public function getRegionalProductCompliancePolicies(): ?RegionalProductCompliancePolicies {
        return $this->regionalProductCompliancePolicies;
    }

    /**
     * Gets the regionalTakeBackPolicies property value. The list of unique identifiers indicating the seller-created <i>country-specific</i> take-back policies that will be used once an offer is published and converted to a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br><br>Each offer may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul><br><span class="tablenote"><b>Note:</b> Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <a href="#request.listingPolicies.takeBackPolicyId">takeBackPolicyId</a>.</span>
     * @return RegionalTakeBackPolicies|null
    */
    public function getRegionalTakeBackPolicies(): ?RegionalTakeBackPolicies {
        return $this->regionalTakeBackPolicies;
    }

    /**
     * Gets the returnPolicyId property value. This unique identifier indicates the return business policy that will be used once an offer is published and converted to an eBay listing. This return business policy will set all return policy settings for the eBay listing.<br><br><span class="tablenote"><b>Note:</b> As a part of Digital Services Act (DSA) requirements, as of April 3, 2023, buyers in the EU must be allowed to return an item within 14 days or more, unless the item is exempt. Where applicable, sellers should update their return policies to reflect this requirement of accepting returns from EU buyers.</span><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the return business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getreturnpolicies" target="_blank">getReturnPolicies</a> call. There are also calls in the <strong>Account API v1</strong> to retrieve a return policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @return string|null
    */
    public function getReturnPolicyId(): ?string {
        return $this->returnPolicyId;
    }

    /**
     * Gets the shippingCostOverrides property value. This container is used if the seller wishes to override the shipping costs or surcharge for one or more domestic or international shipping service options defined in the fulfillment listing policy. To override the costs of a specific domestic or international shipping service option, the seller must know the priority/order of that shipping service in the fulfillment listing policy. The name of a shipping service option can be found in the <strong>shippingOptions.shippingServices.shippingServiceCode</strong> field of the fulfillment policy, and the priority/order of that shipping service option is found in the <strong>shippingOptions.shippingServices.sortOrderId</strong> field. Both of these values can be retrieved by searching for that fulfillment policy with the <strong>getFulfillmentPolicies</strong> or <strong>getFulfillmentPolicyByName</strong> calls of the <strong>Account API v1</strong>. The <strong>shippingCostOverrides.priority</strong> value should match the <strong>shippingOptions.shippingServices.sortOrderId</strong> in order to override the shipping costs for that shipping service option. The seller must also ensure that the <strong>shippingServiceType</strong> value is set to <code>DOMESTIC</code> to override a domestic shipping service option, or to <code>INTERNATIONAL</code> to override an international shipping service option.<br><br>A separate <strong>ShippingCostOverrides</strong> node is needed for each shipping service option whose costs are being overridden. All defined fields of the <strong>shippingCostOverrides</strong> container should be included, even if the shipping costs and surcharge values are not changing.<br><br>The <strong>shippingCostOverrides</strong> container is returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> calls if one or more shipping cost overrides are being applied to the fulfillment policy.
     * @return array<ShippingCostOverride>|null
    */
    public function getShippingCostOverrides(): ?array {
        return $this->shippingCostOverrides;
    }

    /**
     * Gets the takeBackPolicyId property value. This unique identifier indicates the seller-created <i>global</i> take-back policy that will be used once an offer is published and converted to a listing.<br><br>One (1) global take-back policy may be specified <i>per offer</i>.<br><span class="tablenote"><b>Note:</b> For countries that support country-specific policies, use <a href="#request.listingPolicies.regionalTakeBackPolicies">regionalTakeBackPolicies</a> to apply them to an offer.</span>
     * @return string|null
    */
    public function getTakeBackPolicyId(): ?string {
        return $this->takeBackPolicyId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('bestOfferTerms', $this->getBestOfferTerms());
        $writer->writeBooleanValue('eBayPlusIfEligible', $this->getEBayPlusIfEligible());
        $writer->writeStringValue('fulfillmentPolicyId', $this->getFulfillmentPolicyId());
        $writer->writeStringValue('paymentPolicyId', $this->getPaymentPolicyId());
        $writer->writeCollectionOfPrimitiveValues('productCompliancePolicyIds', $this->getProductCompliancePolicyIds());
        $writer->writeObjectValue('regionalProductCompliancePolicies', $this->getRegionalProductCompliancePolicies());
        $writer->writeObjectValue('regionalTakeBackPolicies', $this->getRegionalTakeBackPolicies());
        $writer->writeStringValue('returnPolicyId', $this->getReturnPolicyId());
        $writer->writeCollectionOfObjectValues('shippingCostOverrides', $this->getShippingCostOverrides());
        $writer->writeStringValue('takeBackPolicyId', $this->getTakeBackPolicyId());
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
     * Sets the bestOfferTerms property value. This container is used if the seller would like to support the Best Offer feature on their listing. To enable the Best Offer feature, the seller will have to set the <strong>bestOfferEnabled</strong> field to <code>true</code>, and the seller also has the option of setting 'auto-accept' and 'auto-decline' price thresholds.<br><br><span class="tablenote"><b>Note:</b> Best Offer is unavailable for multi-variation listings.</span><br>This container is only returned if Best Offer is enabled on listing.
     * @param BestOffer|null $value Value to set for the bestOfferTerms property.
    */
    public function setBestOfferTerms(?BestOffer $value): void {
        $this->bestOfferTerms = $value;
    }

    /**
     * Sets the eBayPlusIfEligible property value. This field is included in an offer and set to <code>true</code> if a Top-Rated seller is opted in to the eBay Plus program. With the eBay Plus program, qualified sellers must commit to next-day delivery of the item, and the buyers must have an eBay Plus subscription to be eligible to receive the benefits of this program, which are free, next-day delivery, as well as free returns.<br><br><span class="tablenote"><b>Note:</b> Currently, this program is only available on the Germany and Australian sites.</span><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer.
     * @param bool|null $value Value to set for the eBayPlusIfEligible property.
    */
    public function setEBayPlusIfEligible(?bool $value): void {
        $this->eBayPlusIfEligible = $value;
    }

    /**
     * Sets the fulfillmentPolicyId property value. This unique identifier indicates the fulfillment business policy that will be used once an offer is published and converted to an eBay listing. This fulfillment business policy will set all fulfillment-related settings for the eBay listing.<br><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the fulfillment business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings. The seller may also want to review the shipping service costs in the fulfillment policy, and that seller might decide to override the shipping costs for one or more shipping service options by using the <strong>shippingCostOverrides</strong> container.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getfulfillmentpolicies" target="_blank">getFulfillmentPolicies</a> method. There are also calls in the <strong>Account API v1</strong> to retrieve a fulfillment policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @param string|null $value Value to set for the fulfillmentPolicyId property.
    */
    public function setFulfillmentPolicyId(?string $value): void {
        $this->fulfillmentPolicyId = $value;
    }

    /**
     * Sets the paymentPolicyId property value. This unique identifier indicates the payment business policy that will be used once an offer is published and converted to an eBay listing. This payment business policy will set all payment-related settings for the eBay listing.<br><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the payment business policy to make sure that it is compatible with the marketplace and listing category before assigning it to the offer.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all payment policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getpaymentpolicies" target="_blank">getPaymentPolicies</a> method. There are also calls in the <strong>Account API v1</strong> to retrieve a payment policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @param string|null $value Value to set for the paymentPolicyId property.
    */
    public function setPaymentPolicyId(?string $value): void {
        $this->paymentPolicyId = $value;
    }

    /**
     * Sets the productCompliancePolicyIds property value. This field contains the array of unique identifiers indicating the seller-created <i>global</i> product compliance policies that will be used once an offer is published and converted to a listing.<br><br>Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br><br>A maximum of six (6) global product compliance policies may apply to <i>each offer</i>.<span class="tablenote"><b>Note:</b> For countries that support country-specific policies, use <a href="#request.listingPolicies.regionalProductCompliancePolicies">regionalProductCompliancePolicies</a> to apply them to an offer.</span>
     * @param array<string>|null $value Value to set for the productCompliancePolicyIds property.
    */
    public function setProductCompliancePolicyIds(?array $value): void {
        $this->productCompliancePolicyIds = $value;
    }

    /**
     * Sets the regionalProductCompliancePolicies property value. A comma-delimited list of unique identifiers indicating the seller-created <i>country-specific</i> product compliance policies that that will be used once an offer is published and converted to a listing.<br><br>Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br><br>Each offer may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul><br>For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (i.e., 6 policies x 3 countries,) may be included with each offer.<span class="tablenote"><b>Note:</b> Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <a href="#request.listingPolicies.productCompliancePolicyIds">productCompliancePolicyIds</a>.</span>
     * @param RegionalProductCompliancePolicies|null $value Value to set for the regionalProductCompliancePolicies property.
    */
    public function setRegionalProductCompliancePolicies(?RegionalProductCompliancePolicies $value): void {
        $this->regionalProductCompliancePolicies = $value;
    }

    /**
     * Sets the regionalTakeBackPolicies property value. The list of unique identifiers indicating the seller-created <i>country-specific</i> take-back policies that will be used once an offer is published and converted to a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br><br>Each offer may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul><br><span class="tablenote"><b>Note:</b> Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <a href="#request.listingPolicies.takeBackPolicyId">takeBackPolicyId</a>.</span>
     * @param RegionalTakeBackPolicies|null $value Value to set for the regionalTakeBackPolicies property.
    */
    public function setRegionalTakeBackPolicies(?RegionalTakeBackPolicies $value): void {
        $this->regionalTakeBackPolicies = $value;
    }

    /**
     * Sets the returnPolicyId property value. This unique identifier indicates the return business policy that will be used once an offer is published and converted to an eBay listing. This return business policy will set all return policy settings for the eBay listing.<br><br><span class="tablenote"><b>Note:</b> As a part of Digital Services Act (DSA) requirements, as of April 3, 2023, buyers in the EU must be allowed to return an item within 14 days or more, unless the item is exempt. Where applicable, sellers should update their return policies to reflect this requirement of accepting returns from EU buyers.</span><br>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the return business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings.<br><br>Business policies can be created and managed in My eBay or with the <a href="/develop/api/sell/account_api_v1" target="_blank">Account API v1</a>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API v1's <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getreturnpolicies" target="_blank">getReturnPolicies</a> call. There are also calls in the <strong>Account API v1</strong> to retrieve a return policy by policy ID or policy name.<br><br>This field will be returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> methods if set for the offer. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div>
     * @param string|null $value Value to set for the returnPolicyId property.
    */
    public function setReturnPolicyId(?string $value): void {
        $this->returnPolicyId = $value;
    }

    /**
     * Sets the shippingCostOverrides property value. This container is used if the seller wishes to override the shipping costs or surcharge for one or more domestic or international shipping service options defined in the fulfillment listing policy. To override the costs of a specific domestic or international shipping service option, the seller must know the priority/order of that shipping service in the fulfillment listing policy. The name of a shipping service option can be found in the <strong>shippingOptions.shippingServices.shippingServiceCode</strong> field of the fulfillment policy, and the priority/order of that shipping service option is found in the <strong>shippingOptions.shippingServices.sortOrderId</strong> field. Both of these values can be retrieved by searching for that fulfillment policy with the <strong>getFulfillmentPolicies</strong> or <strong>getFulfillmentPolicyByName</strong> calls of the <strong>Account API v1</strong>. The <strong>shippingCostOverrides.priority</strong> value should match the <strong>shippingOptions.shippingServices.sortOrderId</strong> in order to override the shipping costs for that shipping service option. The seller must also ensure that the <strong>shippingServiceType</strong> value is set to <code>DOMESTIC</code> to override a domestic shipping service option, or to <code>INTERNATIONAL</code> to override an international shipping service option.<br><br>A separate <strong>ShippingCostOverrides</strong> node is needed for each shipping service option whose costs are being overridden. All defined fields of the <strong>shippingCostOverrides</strong> container should be included, even if the shipping costs and surcharge values are not changing.<br><br>The <strong>shippingCostOverrides</strong> container is returned in the <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffer" target="_blank">getOffer</a> and <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-getoffers" target="_blank">getOffers</a> calls if one or more shipping cost overrides are being applied to the fulfillment policy.
     * @param array<ShippingCostOverride>|null $value Value to set for the shippingCostOverrides property.
    */
    public function setShippingCostOverrides(?array $value): void {
        $this->shippingCostOverrides = $value;
    }

    /**
     * Sets the takeBackPolicyId property value. This unique identifier indicates the seller-created <i>global</i> take-back policy that will be used once an offer is published and converted to a listing.<br><br>One (1) global take-back policy may be specified <i>per offer</i>.<br><span class="tablenote"><b>Note:</b> For countries that support country-specific policies, use <a href="#request.listingPolicies.regionalTakeBackPolicies">regionalTakeBackPolicies</a> to apply them to an offer.</span>
     * @param string|null $value Value to set for the takeBackPolicyId property.
    */
    public function setTakeBackPolicyId(?string $value): void {
        $this->takeBackPolicyId = $value;
    }

}
