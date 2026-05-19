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
 * This type is used to specify product aspects for which variations within an inventory item group vary, and the order in which they appear in the listing. For example, t-shirts in an inventory item group may be available in multiple sizes and colors.
*/
class Specification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name This is the name of product variation aspect. Typically, for clothing, typical aspect names are <code>"Size"</code> and <code>"Color"</code>. Product variation aspects are not required immediately upon creating an inventory item group, but these aspects will be required before a multiple-variation listing containing this inventory item group is published. For each product variation aspect that is specified through the <strong>specifications</strong> container, one <strong>name</strong> value is required and two or more variations of this aspect are required through the <strong>values</strong> array.<br><br><span class="tablenote"> <strong>Note:</strong> Each member of the inventory item group should have these same aspect names specified through the <strong>product.aspects</strong> container when the inventory item is created with the <strong>createOrReplaceInventoryItem</strong> or <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Max Length</strong>: 40
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $values This is an array of values pertaining to the corresponding product variation aspect (specified in the <strong>name</strong> field). Below is a sample of how these values will appear under a <strong>specifications</strong> container: <br> <pre><code>"specifications": [{<br> "name": "Size",<br> "values": ["Small",<br> "Medium",<br> "Large"]<br> },<br> { <br> "name": "Color",<br> "values": ["Blue",<br> "White",<br> "Red"] <br> }] </pre></code><span class="tablenote"> <strong>Note:</strong> Each member of the inventory item group should have these same aspect names, and each individual inventory item should have each variation of the product aspect values specified through the <strong>product.aspects</strong> container when the inventory item is created with the <strong>createOrReplaceInventoryItem</strong> or <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one value that matches the corresponding aspect name must be specified.</p></span></div><br><strong>Max Length</strong>: 50
    */
    private ?array $values = null;
    
    /**
     * Instantiates a new Specification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Specification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Specification {
        return new Specification();
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
     * Gets the name property value. This is the name of product variation aspect. Typically, for clothing, typical aspect names are <code>"Size"</code> and <code>"Color"</code>. Product variation aspects are not required immediately upon creating an inventory item group, but these aspects will be required before a multiple-variation listing containing this inventory item group is published. For each product variation aspect that is specified through the <strong>specifications</strong> container, one <strong>name</strong> value is required and two or more variations of this aspect are required through the <strong>values</strong> array.<br><br><span class="tablenote"> <strong>Note:</strong> Each member of the inventory item group should have these same aspect names specified through the <strong>product.aspects</strong> container when the inventory item is created with the <strong>createOrReplaceInventoryItem</strong> or <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Max Length</strong>: 40
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the values property value. This is an array of values pertaining to the corresponding product variation aspect (specified in the <strong>name</strong> field). Below is a sample of how these values will appear under a <strong>specifications</strong> container: <br> <pre><code>"specifications": [{<br> "name": "Size",<br> "values": ["Small",<br> "Medium",<br> "Large"]<br> },<br> { <br> "name": "Color",<br> "values": ["Blue",<br> "White",<br> "Red"] <br> }] </pre></code><span class="tablenote"> <strong>Note:</strong> Each member of the inventory item group should have these same aspect names, and each individual inventory item should have each variation of the product aspect values specified through the <strong>product.aspects</strong> container when the inventory item is created with the <strong>createOrReplaceInventoryItem</strong> or <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one value that matches the corresponding aspect name must be specified.</p></span></div><br><strong>Max Length</strong>: 50
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
     * Sets the name property value. This is the name of product variation aspect. Typically, for clothing, typical aspect names are <code>"Size"</code> and <code>"Color"</code>. Product variation aspects are not required immediately upon creating an inventory item group, but these aspects will be required before a multiple-variation listing containing this inventory item group is published. For each product variation aspect that is specified through the <strong>specifications</strong> container, one <strong>name</strong> value is required and two or more variations of this aspect are required through the <strong>values</strong> array.<br><br><span class="tablenote"> <strong>Note:</strong> Each member of the inventory item group should have these same aspect names specified through the <strong>product.aspects</strong> container when the inventory item is created with the <strong>createOrReplaceInventoryItem</strong> or <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Max Length</strong>: 40
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the values property value. This is an array of values pertaining to the corresponding product variation aspect (specified in the <strong>name</strong> field). Below is a sample of how these values will appear under a <strong>specifications</strong> container: <br> <pre><code>"specifications": [{<br> "name": "Size",<br> "values": ["Small",<br> "Medium",<br> "Large"]<br> },<br> { <br> "name": "Color",<br> "values": ["Blue",<br> "White",<br> "Red"] <br> }] </pre></code><span class="tablenote"> <strong>Note:</strong> Each member of the inventory item group should have these same aspect names, and each individual inventory item should have each variation of the product aspect values specified through the <strong>product.aspects</strong> container when the inventory item is created with the <strong>createOrReplaceInventoryItem</strong> or <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one value that matches the corresponding aspect name must be specified.</p></span></div><br><strong>Max Length</strong>: 50
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->values = $value;
    }

}
