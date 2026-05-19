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
 * This type is used by the seller to provide additional information about the condition of an item in a structured format.
*/
class ConditionDescriptor implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $additionalInfo This string provides additional information about a condition descriptor. Open text is passed in this field.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for graded cards. <br><br><b>Max Length:</b> 30 characters
    */
    private ?string $additionalInfo = null;
    
    /**
     * @var string|null $name This string provides the name of a condition descriptor. A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way. <br><br>To retrieve all condition descriptor name numeric IDs for a category, refer to the <b>conditionDescriptorId</b> field returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies " target="_blank">getItemConditionPolicies</a> method of Metadata API. <br><br>In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $values This array provides the value(s) associated with a condition descriptor. One or more numeric IDs is passed in this field. Commas are used as delimiters between successive name/value pairs. These numeric IDs map to the values associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way. <br><br>To retrieve all condition descriptor value numeric IDs for a category, refer to the <b>ConditionDescriptorValueId</b> array returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies " target="_blank">getItemConditionPolicies</a> method of Metadata API. <br><br>In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
    */
    private ?array $values = null;
    
    /**
     * Instantiates a new ConditionDescriptor and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionDescriptor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionDescriptor {
        return new ConditionDescriptor();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalInfo property value. This string provides additional information about a condition descriptor. Open text is passed in this field.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for graded cards. <br><br><b>Max Length:</b> 30 characters
     * @return string|null
    */
    public function getAdditionalInfo(): ?string {
        return $this->additionalInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInfo' => fn(ParseNode $n) => $o->setAdditionalInfo($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'values' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValues($val);
            },
        ];
    }

    /**
     * Gets the name property value. This string provides the name of a condition descriptor. A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way. <br><br>To retrieve all condition descriptor name numeric IDs for a category, refer to the <b>conditionDescriptorId</b> field returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies " target="_blank">getItemConditionPolicies</a> method of Metadata API. <br><br>In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the values property value. This array provides the value(s) associated with a condition descriptor. One or more numeric IDs is passed in this field. Commas are used as delimiters between successive name/value pairs. These numeric IDs map to the values associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way. <br><br>To retrieve all condition descriptor value numeric IDs for a category, refer to the <b>ConditionDescriptorValueId</b> array returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies " target="_blank">getItemConditionPolicies</a> method of Metadata API. <br><br>In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     * @return array<string>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalInfo', $this->getAdditionalInfo());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('values', $this->getValues());
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
     * Sets the additionalInfo property value. This string provides additional information about a condition descriptor. Open text is passed in this field.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for graded cards. <br><br><b>Max Length:</b> 30 characters
     * @param string|null $value Value to set for the additionalInfo property.
    */
    public function setAdditionalInfo(?string $value): void {
        $this->additionalInfo = $value;
    }

    /**
     * Sets the name property value. This string provides the name of a condition descriptor. A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way. <br><br>To retrieve all condition descriptor name numeric IDs for a category, refer to the <b>conditionDescriptorId</b> field returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies " target="_blank">getItemConditionPolicies</a> method of Metadata API. <br><br>In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the values property value. This array provides the value(s) associated with a condition descriptor. One or more numeric IDs is passed in this field. Commas are used as delimiters between successive name/value pairs. These numeric IDs map to the values associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way. <br><br>To retrieve all condition descriptor value numeric IDs for a category, refer to the <b>ConditionDescriptorValueId</b> array returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies " target="_blank">getItemConditionPolicies</a> method of Metadata API. <br><br>In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->values = $value;
    }

}
