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

/**
 * This type is used to define the physical address of an inventory location.
*/
class Address implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine1 The first line of a street address. This field is required for store and fulfillment center locations. A street address is not required for warehouse locations.<br><br>This field will be returned if defined for an inventory location. <br><br><b>Max length</b>: 128
    */
    private ?string $addressLine1 = null;
    
    /**
     * @var string|null $addressLine2 The second line of a street address. This field can be used for additional address information, such as a suite or apartment number. <br><br>This field will be returned if defined for an inventory location. <br><br><b>Max length</b>: 128
    */
    private ?string $addressLine2 = null;
    
    /**
     * @var string|null $city The city in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a <strong>city</strong> and <strong>stateOrProvince</strong> pair if a <strong>postalCode</strong> is not provided. If a <strong>postalCode</strong> is provided, the city is derived from the provided postal code and this field is technically optional.<br><br>This field is returned if defined for an inventory location. <br><br><b>Max length</b>: 128
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country The country in which the address resides, represented as two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code. For example, <code>US</code> represents the United States, and <code>DE</code> represents Germany. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $country = null;
    
    /**
     * @var string|null $county The county in which the address resides.<br><br>This field is returned if defined for an inventory location.
    */
    private ?string $county = null;
    
    /**
     * @var string|null $postalCode The postal/zip code of the address. eBay uses postal codes to surface In-Store Pickup items within the vicinity of a buyer's location, and it also uses postal codes (origin and destination) to estimate shipping costs when the seller uses calculated shipping. This field is required for store and fulfillment center locations. <br><br>For warehouse locations, this field is conditionally required if a <strong>city</strong> and <strong>stateOrProvince</strong> pair is not provided.<br><br><span class="tablenote"> <strong>Note:</strong> For warehouse locations, <strong>city</strong> and <strong>stateOrProvince</strong> pair can be used instead of a <strong>postalCode</strong> value, and then the postal code is just derived from the city and state/province.</span><br><br>This field is returned if defined for an inventory location. <br><br><b>Max length</b>: 16
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $stateOrProvince The state/province in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a <strong>city</strong> and <strong>stateOrProvince</strong> pair if a <strong>postalCode</strong> is not provided. If a <strong>postalCode</strong> is provided, the state or province is derived from the provided zip code and this field is technically optional.<br><br><b>Max length</b>: 128
    */
    private ?string $stateOrProvince = null;
    
    /**
     * Instantiates a new Address and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Address
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Address {
        return new Address();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressLine1 property value. The first line of a street address. This field is required for store and fulfillment center locations. A street address is not required for warehouse locations.<br><br>This field will be returned if defined for an inventory location. <br><br><b>Max length</b>: 128
     * @return string|null
    */
    public function getAddressLine1(): ?string {
        return $this->addressLine1;
    }

    /**
     * Gets the addressLine2 property value. The second line of a street address. This field can be used for additional address information, such as a suite or apartment number. <br><br>This field will be returned if defined for an inventory location. <br><br><b>Max length</b>: 128
     * @return string|null
    */
    public function getAddressLine2(): ?string {
        return $this->addressLine2;
    }

    /**
     * Gets the city property value. The city in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a <strong>city</strong> and <strong>stateOrProvince</strong> pair if a <strong>postalCode</strong> is not provided. If a <strong>postalCode</strong> is provided, the city is derived from the provided postal code and this field is technically optional.<br><br>This field is returned if defined for an inventory location. <br><br><b>Max length</b>: 128
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. The country in which the address resides, represented as two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code. For example, <code>US</code> represents the United States, and <code>DE</code> represents Germany. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the county property value. The county in which the address resides.<br><br>This field is returned if defined for an inventory location.
     * @return string|null
    */
    public function getCounty(): ?string {
        return $this->county;
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
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'county' => fn(ParseNode $n) => $o->setCounty($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
        ];
    }

    /**
     * Gets the postalCode property value. The postal/zip code of the address. eBay uses postal codes to surface In-Store Pickup items within the vicinity of a buyer's location, and it also uses postal codes (origin and destination) to estimate shipping costs when the seller uses calculated shipping. This field is required for store and fulfillment center locations. <br><br>For warehouse locations, this field is conditionally required if a <strong>city</strong> and <strong>stateOrProvince</strong> pair is not provided.<br><br><span class="tablenote"> <strong>Note:</strong> For warehouse locations, <strong>city</strong> and <strong>stateOrProvince</strong> pair can be used instead of a <strong>postalCode</strong> value, and then the postal code is just derived from the city and state/province.</span><br><br>This field is returned if defined for an inventory location. <br><br><b>Max length</b>: 16
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the stateOrProvince property value. The state/province in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a <strong>city</strong> and <strong>stateOrProvince</strong> pair if a <strong>postalCode</strong> is not provided. If a <strong>postalCode</strong> is provided, the state or province is derived from the provided zip code and this field is technically optional.<br><br><b>Max length</b>: 128
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
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('county', $this->getCounty());
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
     * Sets the addressLine1 property value. The first line of a street address. This field is required for store and fulfillment center locations. A street address is not required for warehouse locations.<br><br>This field will be returned if defined for an inventory location. <br><br><b>Max length</b>: 128
     * @param string|null $value Value to set for the addressLine1 property.
    */
    public function setAddressLine1(?string $value): void {
        $this->addressLine1 = $value;
    }

    /**
     * Sets the addressLine2 property value. The second line of a street address. This field can be used for additional address information, such as a suite or apartment number. <br><br>This field will be returned if defined for an inventory location. <br><br><b>Max length</b>: 128
     * @param string|null $value Value to set for the addressLine2 property.
    */
    public function setAddressLine2(?string $value): void {
        $this->addressLine2 = $value;
    }

    /**
     * Sets the city property value. The city in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a <strong>city</strong> and <strong>stateOrProvince</strong> pair if a <strong>postalCode</strong> is not provided. If a <strong>postalCode</strong> is provided, the city is derived from the provided postal code and this field is technically optional.<br><br>This field is returned if defined for an inventory location. <br><br><b>Max length</b>: 128
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. The country in which the address resides, represented as two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code. For example, <code>US</code> represents the United States, and <code>DE</code> represents Germany. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the county property value. The county in which the address resides.<br><br>This field is returned if defined for an inventory location.
     * @param string|null $value Value to set for the county property.
    */
    public function setCounty(?string $value): void {
        $this->county = $value;
    }

    /**
     * Sets the postalCode property value. The postal/zip code of the address. eBay uses postal codes to surface In-Store Pickup items within the vicinity of a buyer's location, and it also uses postal codes (origin and destination) to estimate shipping costs when the seller uses calculated shipping. This field is required for store and fulfillment center locations. <br><br>For warehouse locations, this field is conditionally required if a <strong>city</strong> and <strong>stateOrProvince</strong> pair is not provided.<br><br><span class="tablenote"> <strong>Note:</strong> For warehouse locations, <strong>city</strong> and <strong>stateOrProvince</strong> pair can be used instead of a <strong>postalCode</strong> value, and then the postal code is just derived from the city and state/province.</span><br><br>This field is returned if defined for an inventory location. <br><br><b>Max length</b>: 16
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state/province in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a <strong>city</strong> and <strong>stateOrProvince</strong> pair if a <strong>postalCode</strong> is not provided. If a <strong>postalCode</strong> is provided, the state or province is derived from the provided zip code and this field is technically optional.<br><br><b>Max length</b>: 128
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->stateOrProvince = $value;
    }

}
