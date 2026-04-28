<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides name and contact information about the manufacturer of the item.
*/
class Manufacturer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine1 The first line of the product manufacturer's street address.<br><br><b>Max length</b>: 180 characters
    */
    private ?string $addressLine1 = null;
    
    /**
     * @var string|null $addressLine2 The second line of the product manufacturer's street address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.<br><br><b>Max length</b>: 180 characters
    */
    private ?string $addressLine2 = null;
    
    /**
     * @var string|null $city The city of the product manufacturer's street address.<br><br><b>Max length</b>: 64 characters
    */
    private ?string $city = null;
    
    /**
     * @var string|null $companyName The company name of the product manufacturer.<br><br><b>Max length</b>: 100 characters
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $contactUrl The contact URL of the product manufacturer.<br><br><b>Max length</b>: 250 characters
    */
    private ?string $contactUrl = null;
    
    /**
     * @var string|null $country This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $country = null;
    
    /**
     * @var string|null $email The product manufacturer's business email address.<br><br><b>Max length</b>: 180 characters
    */
    private ?string $email = null;
    
    /**
     * @var string|null $phone The product manufacturer's business phone number.<br><br><b>Max length</b>: 64 characters
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $postalCode The postal code of the product manufacturer's street address.<br><br><b>Max length</b>: 9 characters
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $stateOrProvince The state or province of the product manufacturer's street address.<br><br><b>Max length</b>: 64 characters
    */
    private ?string $stateOrProvince = null;
    
    /**
     * Instantiates a new Manufacturer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Manufacturer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Manufacturer {
        return new Manufacturer();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressLine1 property value. The first line of the product manufacturer's street address.<br><br><b>Max length</b>: 180 characters
     * @return string|null
    */
    public function getAddressLine1(): ?string {
        return $this->addressLine1;
    }

    /**
     * Gets the addressLine2 property value. The second line of the product manufacturer's street address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.<br><br><b>Max length</b>: 180 characters
     * @return string|null
    */
    public function getAddressLine2(): ?string {
        return $this->addressLine2;
    }

    /**
     * Gets the city property value. The city of the product manufacturer's street address.<br><br><b>Max length</b>: 64 characters
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the companyName property value. The company name of the product manufacturer.<br><br><b>Max length</b>: 100 characters
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the contactUrl property value. The contact URL of the product manufacturer.<br><br><b>Max length</b>: 250 characters
     * @return string|null
    */
    public function getContactUrl(): ?string {
        return $this->contactUrl;
    }

    /**
     * Gets the country property value. This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the email property value. The product manufacturer's business email address.<br><br><b>Max length</b>: 180 characters
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addressLine1' => fn(ParseNode $n) => $o->setAddressLine1($n->getStringValue()),
            'addressLine2' => fn(ParseNode $n) => $o->setAddressLine2($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'contactUrl' => fn(ParseNode $n) => $o->setContactUrl($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
        ];
    }

    /**
     * Gets the phone property value. The product manufacturer's business phone number.<br><br><b>Max length</b>: 64 characters
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the postalCode property value. The postal code of the product manufacturer's street address.<br><br><b>Max length</b>: 9 characters
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the stateOrProvince property value. The state or province of the product manufacturer's street address.<br><br><b>Max length</b>: 64 characters
     * @return string|null
    */
    public function getStateOrProvince(): ?string {
        return $this->stateOrProvince;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('addressLine1', $this->getAddressLine1());
        $writer->writeStringValue('addressLine2', $this->getAddressLine2());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('contactUrl', $this->getContactUrl());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('stateOrProvince', $this->getStateOrProvince());
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
     * Sets the addressLine1 property value. The first line of the product manufacturer's street address.<br><br><b>Max length</b>: 180 characters
     * @param string|null $value Value to set for the addressLine1 property.
    */
    public function setAddressLine1(?string $value): void {
        $this->addressLine1 = $value;
    }

    /**
     * Sets the addressLine2 property value. The second line of the product manufacturer's street address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.<br><br><b>Max length</b>: 180 characters
     * @param string|null $value Value to set for the addressLine2 property.
    */
    public function setAddressLine2(?string $value): void {
        $this->addressLine2 = $value;
    }

    /**
     * Sets the city property value. The city of the product manufacturer's street address.<br><br><b>Max length</b>: 64 characters
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the companyName property value. The company name of the product manufacturer.<br><br><b>Max length</b>: 100 characters
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the contactUrl property value. The contact URL of the product manufacturer.<br><br><b>Max length</b>: 250 characters
     * @param string|null $value Value to set for the contactUrl property.
    */
    public function setContactUrl(?string $value): void {
        $this->contactUrl = $value;
    }

    /**
     * Sets the country property value. This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the email property value. The product manufacturer's business email address.<br><br><b>Max length</b>: 180 characters
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the phone property value. The product manufacturer's business phone number.<br><br><b>Max length</b>: 64 characters
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the postalCode property value. The postal code of the product manufacturer's street address.<br><br><b>Max length</b>: 9 characters
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state or province of the product manufacturer's street address.<br><br><b>Max length</b>: 64 characters
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->stateOrProvince = $value;
    }

}
