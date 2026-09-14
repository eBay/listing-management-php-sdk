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
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
*/
class CountryPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CountryCodeEnum|null $country The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166-1</a> country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply.
    */
    private ?CountryCodeEnum $country = null;
    
    /**
     * @var array<string>|null $policyIds An array of custom policy identifiers that apply to the country specified by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.countrypolicy.country">listingPolicies.regionalTakeBackPolicies.countryPolicies.country</a>.<br><br>Product compliance and take-back policy information may be returned using the following methods:<ul><li><a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getcustompolicies" target="_blank">getCustomPolicies</a><br><br>Set <code>policy_types</code> to:<ul><li><code>PRODUCT_COMPLIANCE</code> for product compliance policies</li><li><code>TAKE_BACK</code> for takeback policies</li></ul><br>This returns the list of specified policies and corresponding <b>customPolicyId</b> values a seller has created.</li><li><a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getcustompolicy" target="_blank">getCustomPolicy</a> with <code>custom_policy_id = customPolicyId</code><br><br>Returns the details of the policy specified by <b>customPolicyId</b></li></ul>For information about creating and managing custom policies, refer to the <a href="/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource in the <b>Account API v1</b>.
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
     * Gets the country property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166-1</a> country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply.
     * @return CountryCodeEnum|null
    */
    public function getCountry(): ?CountryCodeEnum {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'country' => fn(ParseNode $n) => $o->setCountry($n->getEnumValue(CountryCodeEnum::class)),
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
     * Gets the policyIds property value. An array of custom policy identifiers that apply to the country specified by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.countrypolicy.country">listingPolicies.regionalTakeBackPolicies.countryPolicies.country</a>.<br><br>Product compliance and take-back policy information may be returned using the following methods:<ul><li><a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getcustompolicies" target="_blank">getCustomPolicies</a><br><br>Set <code>policy_types</code> to:<ul><li><code>PRODUCT_COMPLIANCE</code> for product compliance policies</li><li><code>TAKE_BACK</code> for takeback policies</li></ul><br>This returns the list of specified policies and corresponding <b>customPolicyId</b> values a seller has created.</li><li><a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getcustompolicy" target="_blank">getCustomPolicy</a> with <code>custom_policy_id = customPolicyId</code><br><br>Returns the details of the policy specified by <b>customPolicyId</b></li></ul>For information about creating and managing custom policies, refer to the <a href="/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource in the <b>Account API v1</b>.
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
        $writer->writeEnumValue('country', $this->getCountry());
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
     * Sets the country property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166-1</a> country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply.
     * @param CountryCodeEnum|null $value Value to set for the country property.
    */
    public function setCountry(?CountryCodeEnum $value): void {
        $this->country = $value;
    }

    /**
     * Sets the policyIds property value. An array of custom policy identifiers that apply to the country specified by <a href="/develop/api/sell/inventory_api#sell-inventory_api-offer-bulkcreateoffer.countrypolicy.country">listingPolicies.regionalTakeBackPolicies.countryPolicies.country</a>.<br><br>Product compliance and take-back policy information may be returned using the following methods:<ul><li><a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getcustompolicies" target="_blank">getCustomPolicies</a><br><br>Set <code>policy_types</code> to:<ul><li><code>PRODUCT_COMPLIANCE</code> for product compliance policies</li><li><code>TAKE_BACK</code> for takeback policies</li></ul><br>This returns the list of specified policies and corresponding <b>customPolicyId</b> values a seller has created.</li><li><a href="/develop/api/sell/account_api_v1#sell-account_api_v1-get-getcustompolicy" target="_blank">getCustomPolicy</a> with <code>custom_policy_id = customPolicyId</code><br><br>Returns the details of the policy specified by <b>customPolicyId</b></li></ul>For information about creating and managing custom policies, refer to the <a href="/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource in the <b>Account API v1</b>.
     * @param array<string>|null $value Value to set for the policyIds property.
    */
    public function setPolicyIds(?array $value): void {
        $this->policyIds = $value;
    }

}
