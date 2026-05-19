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

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A complex data type that filters data for report creation. See <strong>CustomerServiceMetricsFilterCriteria</strong> for fields and descriptions.
*/
class CustomerServiceMetricsFilterCriteria implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $customerServiceMetricType An enumeration value that specifies the customer service metric that eBay tracks to measure seller performance.<br><br>See <a href="/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum">CustomerServiceMetricTypeEnum</a> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum'>eBay API documentation</a>
    */
    private ?string $customerServiceMetricType = null;
    
    /**
     * @var string|null $evaluationMarketplaceId An enumeration value that specifies the eBay marketplace where the evaluation occurs.<br><br>See <a href="/api-docs/sell/feed/types/bas:MarketplaceIdEnum">MarketplaceIdEnum</a> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $evaluationMarketplaceId = null;
    
    /**
     * @var array<string>|null $listingCategories A list of listing category IDs on which the service metric is measured. A seller can use one or more L1 (top-level) eBay categories to get metrics specific to those L1 categories. The Category IDs for each L1 category are required. Category ID values for L1 categories can be retrieved using the Taxonomy API.<p> <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_AS_DESCRIBED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>
    */
    private ?array $listingCategories = null;
    
    /**
     * @var array<string>|null $shippingRegions A list of shipping region enumeration values on which the service metric is measured. This comma delimited array allows the seller to customize the report to focus on domestic or international shipping. <p> <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_RECEIVED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>See <strong>ShippingRegionTypeEnum</strong> for values
    */
    private ?array $shippingRegions = null;
    
    /**
     * Instantiates a new CustomerServiceMetricsFilterCriteria and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerServiceMetricsFilterCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerServiceMetricsFilterCriteria {
        return new CustomerServiceMetricsFilterCriteria();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the customerServiceMetricType property value. An enumeration value that specifies the customer service metric that eBay tracks to measure seller performance.<br><br>See <a href="/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum">CustomerServiceMetricTypeEnum</a> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCustomerServiceMetricType(): ?string {
        return $this->customerServiceMetricType;
    }

    /**
     * Gets the evaluationMarketplaceId property value. An enumeration value that specifies the eBay marketplace where the evaluation occurs.<br><br>See <a href="/api-docs/sell/feed/types/bas:MarketplaceIdEnum">MarketplaceIdEnum</a> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEvaluationMarketplaceId(): ?string {
        return $this->evaluationMarketplaceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customerServiceMetricType' => fn(ParseNode $n) => $o->setCustomerServiceMetricType($n->getStringValue()),
            'evaluationMarketplaceId' => fn(ParseNode $n) => $o->setEvaluationMarketplaceId($n->getStringValue()),
            'listingCategories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingCategories($val);
            },
            'shippingRegions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setShippingRegions($val);
            },
        ];
    }

    /**
     * Gets the listingCategories property value. A list of listing category IDs on which the service metric is measured. A seller can use one or more L1 (top-level) eBay categories to get metrics specific to those L1 categories. The Category IDs for each L1 category are required. Category ID values for L1 categories can be retrieved using the Taxonomy API.<p> <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_AS_DESCRIBED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>
     * @return array<string>|null
    */
    public function getListingCategories(): ?array {
        return $this->listingCategories;
    }

    /**
     * Gets the shippingRegions property value. A list of shipping region enumeration values on which the service metric is measured. This comma delimited array allows the seller to customize the report to focus on domestic or international shipping. <p> <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_RECEIVED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>See <strong>ShippingRegionTypeEnum</strong> for values
     * @return array<string>|null
    */
    public function getShippingRegions(): ?array {
        return $this->shippingRegions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customerServiceMetricType', $this->getCustomerServiceMetricType());
        $writer->writeStringValue('evaluationMarketplaceId', $this->getEvaluationMarketplaceId());
        $writer->writeCollectionOfPrimitiveValues('listingCategories', $this->getListingCategories());
        $writer->writeCollectionOfPrimitiveValues('shippingRegions', $this->getShippingRegions());
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
     * Sets the customerServiceMetricType property value. An enumeration value that specifies the customer service metric that eBay tracks to measure seller performance.<br><br>See <a href="/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum">CustomerServiceMetricTypeEnum</a> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the customerServiceMetricType property.
    */
    public function setCustomerServiceMetricType(?string $value): void {
        $this->customerServiceMetricType = $value;
    }

    /**
     * Sets the evaluationMarketplaceId property value. An enumeration value that specifies the eBay marketplace where the evaluation occurs.<br><br>See <a href="/api-docs/sell/feed/types/bas:MarketplaceIdEnum">MarketplaceIdEnum</a> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the evaluationMarketplaceId property.
    */
    public function setEvaluationMarketplaceId(?string $value): void {
        $this->evaluationMarketplaceId = $value;
    }

    /**
     * Sets the listingCategories property value. A list of listing category IDs on which the service metric is measured. A seller can use one or more L1 (top-level) eBay categories to get metrics specific to those L1 categories. The Category IDs for each L1 category are required. Category ID values for L1 categories can be retrieved using the Taxonomy API.<p> <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_AS_DESCRIBED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>
     * @param array<string>|null $value Value to set for the listingCategories property.
    */
    public function setListingCategories(?array $value): void {
        $this->listingCategories = $value;
    }

    /**
     * Sets the shippingRegions property value. A list of shipping region enumeration values on which the service metric is measured. This comma delimited array allows the seller to customize the report to focus on domestic or international shipping. <p> <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_RECEIVED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>See <strong>ShippingRegionTypeEnum</strong> for values
     * @param array<string>|null $value Value to set for the shippingRegions property.
    */
    public function setShippingRegions(?array $value): void {
        $this->shippingRegions = $value;
    }

}
