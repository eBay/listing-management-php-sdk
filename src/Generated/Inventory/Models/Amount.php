<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to express a dollar value and the applicable currency.
*/
class Amount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $currency A three-digit string value representing the type of currency being used. Both the <strong>value</strong> and <strong>currency</strong> fields are required/always returned when expressing prices. <br><br>See the <a href="/api-docs/sell/inventory/types/ba:CurrencyCodeEnum" target="_blank">CurrencyCodeEnum</a> type for the full list of currencies and their corresponding three-digit string values.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $value A string representation of a dollar value expressed in the currency specified in the <strong>currency</strong> field. Both the <strong>value</strong> and <strong>currency</strong> fields are required/always returned when expressing prices.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Amount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Amount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Amount {
        return new Amount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. A three-digit string value representing the type of currency being used. Both the <strong>value</strong> and <strong>currency</strong> fields are required/always returned when expressing prices. <br><br>See the <a href="/api-docs/sell/inventory/types/ba:CurrencyCodeEnum" target="_blank">CurrencyCodeEnum</a> type for the full list of currencies and their corresponding three-digit string values.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. A string representation of a dollar value expressed in the currency specified in the <strong>currency</strong> field. Both the <strong>value</strong> and <strong>currency</strong> fields are required/always returned when expressing prices.
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
        $writer->writeStringValue('currency', $this->getCurrency());
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
     * Sets the currency property value. A three-digit string value representing the type of currency being used. Both the <strong>value</strong> and <strong>currency</strong> fields are required/always returned when expressing prices. <br><br>See the <a href="/api-docs/sell/inventory/types/ba:CurrencyCodeEnum" target="_blank">CurrencyCodeEnum</a> type for the full list of currencies and their corresponding three-digit string values.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the value property value. A string representation of a dollar value expressed in the currency specified in the <strong>currency</strong> field. Both the <strong>value</strong> and <strong>currency</strong> fields are required/always returned when expressing prices.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
