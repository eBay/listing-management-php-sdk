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
 * This type is used by the base response of the <strong>getInventoryLocation</strong> and <strong>getInventoryLocations</strong> calls. These responses provide details about inventory location(s) defined for the merchant's account.
*/
class InventoryLocationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FulfillmentCenterSpecifications|null $fulfillmentCenterSpecifications This container provides information about a fulfillment center's shipping specifications, such as the weekly cut-off time schedule for order handling and any cut-off time overrides.<br><br><span class="tablenote"><b>Note:</b> This field is only returned for fulfillment center locations.</span>
    */
    private ?FulfillmentCenterSpecifications $fulfillmentCenterSpecifications = null;
    
    /**
     * @var Location|null $location This container provides location details of an inventory location. The <strong>address</strong> container will always be returned, but it will not always have a complete street address. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory location. The <strong>geoCoordinates</strong> container will only be returned if the merchant provided geographical coordinates. The <strong>locationId</strong> field is always returned, but this value is only used internally by eBay.
    */
    private ?Location $location = null;
    
    /**
     * @var string|null $locationAdditionalInformation This text field provides additional information about an inventory location. This field is returned if it is set for the location.
    */
    private ?string $locationAdditionalInformation = null;
    
    /**
     * @var string|null $locationInstructions This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a <strong>createInventoryLocation</strong> or a <strong>updateInventoryLocation</strong> call, eBay will use the default pickup instructions contained in the merchant's profile.
    */
    private ?string $locationInstructions = null;
    
    /**
     * @var array<StoreTypeEnum>|null $locationTypes This container defines the function of the inventory location. Typically, a location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.
    */
    private ?array $locationTypes = null;
    
    /**
     * @var string|null $locationWebUrl This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the location.
    */
    private ?string $locationWebUrl = null;
    
    /**
     * @var string|null $merchantLocationKey The unique identifier of the inventory location. This identifier is set up by the merchant when the location is first created with the <strong>createInventoryLocation</strong> call.
    */
    private ?string $merchantLocationKey = null;
    
    /**
     * @var StatusEnum|null $merchantLocationStatus This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory cannot be loaded to location). The merchant can use the <strong>enableInventoryLocation</strong> call to enable a location in disabled status, or the <strong>disableInventoryLocation</strong> call to disable a location in enabled status.
    */
    private ?StatusEnum $merchantLocationStatus = null;
    
    /**
     * @var string|null $name The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the <strong>createInventoryLocation</strong> call, but a store inventory location must have a defined <strong>name</strong> value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the <strong>createInventoryLocation</strong> call, it will have to be added later through a <strong>updateInventoryLocation</strong> call.
    */
    private ?string $name = null;
    
    /**
     * @var array<OperatingHours>|null $operatingHours This container shows the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container is shown for each day of the week that the location is open.
    */
    private ?array $operatingHours = null;
    
    /**
     * @var string|null $phone The phone number for an inventory location. This field will typically only be returned for store locations.
    */
    private ?string $phone = null;
    
    /**
     * @var array<SpecialHours>|null $specialHours This container shows the special operating hours for a store or fulfillment center location on a specific date or dates.
    */
    private ?array $specialHours = null;
    
    /**
     * @var string|null $timeZoneId This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href="https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets" target="_blank">Java Supported Zone Ids and Offsets</a>.
    */
    private ?string $timeZoneId = null;
    
    /**
     * Instantiates a new InventoryLocationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryLocationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryLocationResponse {
        return new InventoryLocationResponse();
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
            'fulfillmentCenterSpecifications' => fn(ParseNode $n) => $o->setFulfillmentCenterSpecifications($n->getObjectValue([FulfillmentCenterSpecifications::class, 'createFromDiscriminatorValue'])),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'locationAdditionalInformation' => fn(ParseNode $n) => $o->setLocationAdditionalInformation($n->getStringValue()),
            'locationInstructions' => fn(ParseNode $n) => $o->setLocationInstructions($n->getStringValue()),
            'locationTypes' => fn(ParseNode $n) => $o->setLocationTypes($n->getCollectionOfEnumValues(StoreTypeEnum::class)),
            'locationWebUrl' => fn(ParseNode $n) => $o->setLocationWebUrl($n->getStringValue()),
            'merchantLocationKey' => fn(ParseNode $n) => $o->setMerchantLocationKey($n->getStringValue()),
            'merchantLocationStatus' => fn(ParseNode $n) => $o->setMerchantLocationStatus($n->getEnumValue(StatusEnum::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'operatingHours' => fn(ParseNode $n) => $o->setOperatingHours($n->getCollectionOfObjectValues([OperatingHours::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'specialHours' => fn(ParseNode $n) => $o->setSpecialHours($n->getCollectionOfObjectValues([SpecialHours::class, 'createFromDiscriminatorValue'])),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fulfillmentCenterSpecifications property value. This container provides information about a fulfillment center's shipping specifications, such as the weekly cut-off time schedule for order handling and any cut-off time overrides.<br><br><span class="tablenote"><b>Note:</b> This field is only returned for fulfillment center locations.</span>
     * @return FulfillmentCenterSpecifications|null
    */
    public function getFulfillmentCenterSpecifications(): ?FulfillmentCenterSpecifications {
        return $this->fulfillmentCenterSpecifications;
    }

    /**
     * Gets the location property value. This container provides location details of an inventory location. The <strong>address</strong> container will always be returned, but it will not always have a complete street address. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory location. The <strong>geoCoordinates</strong> container will only be returned if the merchant provided geographical coordinates. The <strong>locationId</strong> field is always returned, but this value is only used internally by eBay.
     * @return Location|null
    */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * Gets the locationAdditionalInformation property value. This text field provides additional information about an inventory location. This field is returned if it is set for the location.
     * @return string|null
    */
    public function getLocationAdditionalInformation(): ?string {
        return $this->locationAdditionalInformation;
    }

    /**
     * Gets the locationInstructions property value. This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a <strong>createInventoryLocation</strong> or a <strong>updateInventoryLocation</strong> call, eBay will use the default pickup instructions contained in the merchant's profile.
     * @return string|null
    */
    public function getLocationInstructions(): ?string {
        return $this->locationInstructions;
    }

    /**
     * Gets the locationTypes property value. This container defines the function of the inventory location. Typically, a location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.
     * @return array<StoreTypeEnum>|null
    */
    public function getLocationTypes(): ?array {
        return $this->locationTypes;
    }

    /**
     * Gets the locationWebUrl property value. This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the location.
     * @return string|null
    */
    public function getLocationWebUrl(): ?string {
        return $this->locationWebUrl;
    }

    /**
     * Gets the merchantLocationKey property value. The unique identifier of the inventory location. This identifier is set up by the merchant when the location is first created with the <strong>createInventoryLocation</strong> call.
     * @return string|null
    */
    public function getMerchantLocationKey(): ?string {
        return $this->merchantLocationKey;
    }

    /**
     * Gets the merchantLocationStatus property value. This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory cannot be loaded to location). The merchant can use the <strong>enableInventoryLocation</strong> call to enable a location in disabled status, or the <strong>disableInventoryLocation</strong> call to disable a location in enabled status.
     * @return StatusEnum|null
    */
    public function getMerchantLocationStatus(): ?StatusEnum {
        return $this->merchantLocationStatus;
    }

    /**
     * Gets the name property value. The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the <strong>createInventoryLocation</strong> call, but a store inventory location must have a defined <strong>name</strong> value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the <strong>createInventoryLocation</strong> call, it will have to be added later through a <strong>updateInventoryLocation</strong> call.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the operatingHours property value. This container shows the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container is shown for each day of the week that the location is open.
     * @return array<OperatingHours>|null
    */
    public function getOperatingHours(): ?array {
        return $this->operatingHours;
    }

    /**
     * Gets the phone property value. The phone number for an inventory location. This field will typically only be returned for store locations.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the specialHours property value. This container shows the special operating hours for a store or fulfillment center location on a specific date or dates.
     * @return array<SpecialHours>|null
    */
    public function getSpecialHours(): ?array {
        return $this->specialHours;
    }

    /**
     * Gets the timeZoneId property value. This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href="https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets" target="_blank">Java Supported Zone Ids and Offsets</a>.
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('fulfillmentCenterSpecifications', $this->getFulfillmentCenterSpecifications());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('locationAdditionalInformation', $this->getLocationAdditionalInformation());
        $writer->writeStringValue('locationInstructions', $this->getLocationInstructions());
        $writer->writeCollectionOfEnumValues('locationTypes', $this->getLocationTypes());
        $writer->writeStringValue('locationWebUrl', $this->getLocationWebUrl());
        $writer->writeStringValue('merchantLocationKey', $this->getMerchantLocationKey());
        $writer->writeEnumValue('merchantLocationStatus', $this->getMerchantLocationStatus());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('operatingHours', $this->getOperatingHours());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeCollectionOfObjectValues('specialHours', $this->getSpecialHours());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
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
     * Sets the fulfillmentCenterSpecifications property value. This container provides information about a fulfillment center's shipping specifications, such as the weekly cut-off time schedule for order handling and any cut-off time overrides.<br><br><span class="tablenote"><b>Note:</b> This field is only returned for fulfillment center locations.</span>
     * @param FulfillmentCenterSpecifications|null $value Value to set for the fulfillmentCenterSpecifications property.
    */
    public function setFulfillmentCenterSpecifications(?FulfillmentCenterSpecifications $value): void {
        $this->fulfillmentCenterSpecifications = $value;
    }

    /**
     * Sets the location property value. This container provides location details of an inventory location. The <strong>address</strong> container will always be returned, but it will not always have a complete street address. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory location. The <strong>geoCoordinates</strong> container will only be returned if the merchant provided geographical coordinates. The <strong>locationId</strong> field is always returned, but this value is only used internally by eBay.
     * @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the locationAdditionalInformation property value. This text field provides additional information about an inventory location. This field is returned if it is set for the location.
     * @param string|null $value Value to set for the locationAdditionalInformation property.
    */
    public function setLocationAdditionalInformation(?string $value): void {
        $this->locationAdditionalInformation = $value;
    }

    /**
     * Sets the locationInstructions property value. This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a <strong>createInventoryLocation</strong> or a <strong>updateInventoryLocation</strong> call, eBay will use the default pickup instructions contained in the merchant's profile.
     * @param string|null $value Value to set for the locationInstructions property.
    */
    public function setLocationInstructions(?string $value): void {
        $this->locationInstructions = $value;
    }

    /**
     * Sets the locationTypes property value. This container defines the function of the inventory location. Typically, a location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.
     * @param array<StoreTypeEnum>|null $value Value to set for the locationTypes property.
    */
    public function setLocationTypes(?array $value): void {
        $this->locationTypes = $value;
    }

    /**
     * Sets the locationWebUrl property value. This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the location.
     * @param string|null $value Value to set for the locationWebUrl property.
    */
    public function setLocationWebUrl(?string $value): void {
        $this->locationWebUrl = $value;
    }

    /**
     * Sets the merchantLocationKey property value. The unique identifier of the inventory location. This identifier is set up by the merchant when the location is first created with the <strong>createInventoryLocation</strong> call.
     * @param string|null $value Value to set for the merchantLocationKey property.
    */
    public function setMerchantLocationKey(?string $value): void {
        $this->merchantLocationKey = $value;
    }

    /**
     * Sets the merchantLocationStatus property value. This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory cannot be loaded to location). The merchant can use the <strong>enableInventoryLocation</strong> call to enable a location in disabled status, or the <strong>disableInventoryLocation</strong> call to disable a location in enabled status.
     * @param StatusEnum|null $value Value to set for the merchantLocationStatus property.
    */
    public function setMerchantLocationStatus(?StatusEnum $value): void {
        $this->merchantLocationStatus = $value;
    }

    /**
     * Sets the name property value. The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the <strong>createInventoryLocation</strong> call, but a store inventory location must have a defined <strong>name</strong> value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the <strong>createInventoryLocation</strong> call, it will have to be added later through a <strong>updateInventoryLocation</strong> call.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the operatingHours property value. This container shows the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container is shown for each day of the week that the location is open.
     * @param array<OperatingHours>|null $value Value to set for the operatingHours property.
    */
    public function setOperatingHours(?array $value): void {
        $this->operatingHours = $value;
    }

    /**
     * Sets the phone property value. The phone number for an inventory location. This field will typically only be returned for store locations.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the specialHours property value. This container shows the special operating hours for a store or fulfillment center location on a specific date or dates.
     * @param array<SpecialHours>|null $value Value to set for the specialHours property.
    */
    public function setSpecialHours(?array $value): void {
        $this->specialHours = $value;
    }

    /**
     * Sets the timeZoneId property value. This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href="https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets" target="_blank">Java Supported Zone Ids and Offsets</a>.
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

}
