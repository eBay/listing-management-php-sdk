<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <strong>compatibilityProperties</strong> container to identify a motor vehicle using name/value pairs.
*/
class NameValueList implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name This string value identifies the motor vehicle aspect, such as 'make', 'model', 'year', 'trim', and 'engine'. Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br>The <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityProperties" target="_blank">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $value This string value identifies the motor vehicle aspect specified in the corresponding <strong>name</strong> field. For example, if the <strong>name</strong> field is 'make', this field may be 'Toyota', or if the <strong>name</strong> field is 'model', this field may be 'Camry'.<br><br>The <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityPropertyValues" target="_blank">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for vehicle aspect names.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new NameValueList and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NameValueList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NameValueList {
        return new NameValueList();
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
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. This string value identifies the motor vehicle aspect, such as 'make', 'model', 'year', 'trim', and 'engine'. Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br>The <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityProperties" target="_blank">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the value property value. This string value identifies the motor vehicle aspect specified in the corresponding <strong>name</strong> field. For example, if the <strong>name</strong> field is 'make', this field may be 'Toyota', or if the <strong>name</strong> field is 'model', this field may be 'Camry'.<br><br>The <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityPropertyValues" target="_blank">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for vehicle aspect names.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the name property value. This string value identifies the motor vehicle aspect, such as 'make', 'model', 'year', 'trim', and 'engine'. Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br>The <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityProperties" target="_blank">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the value property value. This string value identifies the motor vehicle aspect specified in the corresponding <strong>name</strong> field. For example, if the <strong>name</strong> field is 'make', this field may be 'Toyota', or if the <strong>name</strong> field is 'model', this field may be 'Camry'.<br><br>The <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityPropertyValues" target="_blank">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for vehicle aspect names.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
