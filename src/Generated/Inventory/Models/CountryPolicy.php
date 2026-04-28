<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
*/
class CountryPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $country The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166-1</a> country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $country = null;
    
    /**
     * @var array<string>|null $policyIds An array of custom policy identifiers that apply to the country specified by <a href="#request.listingPolicies.regionalProductCompliancePolicies.countryPolicies.country">listingPolicies.regionalTakeBackPolicies.countryPolicies.country</a>.<br><br>Product compliance and take-back policy information may be returned using the following methods:<ul><li><a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies " target="_blank">getCustomPolicies</a><br><br>Set <code>policy_types</code> to:<ul><li><code>PRODUCT_COMPLIANCE</code> for product compliance policies</li><li><code>TAKE_BACK</code> for takeback policies</li></ul><br>This returns the list of specified policies and corresponding <b>customPolicyId</b> values a seller has created.</li><li><a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicy " target="_blank">getCustomPolicy</a> with <code>custom_policy_id = customPolicyId</code><br><br>Returns the details of the policy specified by <b>customPolicyId</b></li></ul>For information about creating and managing custom policies, refer to the <a href="/api-docs/sell/account/resources/methods#h2-custom_policy " target="_blank">custom_policy</a> resource in the <b>Sell Account</b> API.
    */
    private ?array $policyIds = null;
    
    /**
     * Instantiates a new CountryPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CountryPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CountryPolicy {
        return new CountryPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the country property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166-1</a> country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'policyIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyIds($val);
            },
        ];
    }

    /**
     * Gets the policyIds property value. An array of custom policy identifiers that apply to the country specified by <a href="#request.listingPolicies.regionalProductCompliancePolicies.countryPolicies.country">listingPolicies.regionalTakeBackPolicies.countryPolicies.country</a>.<br><br>Product compliance and take-back policy information may be returned using the following methods:<ul><li><a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies " target="_blank">getCustomPolicies</a><br><br>Set <code>policy_types</code> to:<ul><li><code>PRODUCT_COMPLIANCE</code> for product compliance policies</li><li><code>TAKE_BACK</code> for takeback policies</li></ul><br>This returns the list of specified policies and corresponding <b>customPolicyId</b> values a seller has created.</li><li><a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicy " target="_blank">getCustomPolicy</a> with <code>custom_policy_id = customPolicyId</code><br><br>Returns the details of the policy specified by <b>customPolicyId</b></li></ul>For information about creating and managing custom policies, refer to the <a href="/api-docs/sell/account/resources/methods#h2-custom_policy " target="_blank">custom_policy</a> resource in the <b>Sell Account</b> API.
     * @return array<string>|null
    */
    public function getPolicyIds(): ?array {
        return $this->policyIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeCollectionOfPrimitiveValues('policyIds', $this->getPolicyIds());
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
     * Sets the country property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166-1</a> country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the policyIds property value. An array of custom policy identifiers that apply to the country specified by <a href="#request.listingPolicies.regionalProductCompliancePolicies.countryPolicies.country">listingPolicies.regionalTakeBackPolicies.countryPolicies.country</a>.<br><br>Product compliance and take-back policy information may be returned using the following methods:<ul><li><a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies " target="_blank">getCustomPolicies</a><br><br>Set <code>policy_types</code> to:<ul><li><code>PRODUCT_COMPLIANCE</code> for product compliance policies</li><li><code>TAKE_BACK</code> for takeback policies</li></ul><br>This returns the list of specified policies and corresponding <b>customPolicyId</b> values a seller has created.</li><li><a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicy " target="_blank">getCustomPolicy</a> with <code>custom_policy_id = customPolicyId</code><br><br>Returns the details of the policy specified by <b>customPolicyId</b></li></ul>For information about creating and managing custom policies, refer to the <a href="/api-docs/sell/account/resources/methods#h2-custom_policy " target="_blank">custom_policy</a> resource in the <b>Sell Account</b> API.
     * @param array<string>|null $value Value to set for the policyIds property.
    */
    public function setPolicyIds(?array $value): void {
        $this->policyIds = $value;
    }

}
