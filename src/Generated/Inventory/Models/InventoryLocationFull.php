<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type is used by the <strong>createInventoryLocation</strong> call to provide details on the inventory location, including the location's name, physical address, operating hours, special hours, phone number and other details of an inventory location.
*/
class InventoryLocationFull implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FulfillmentCenterSpecifications|null $fulfillmentCenterSpecifications This type is used to provide shipping specification details, such as the weekly cut-off schedule for order handling and cut-off override(s), for a fulfillment center location. 
    */
    private ?FulfillmentCenterSpecifications $fulfillmentCenterSpecifications = null;
    
    /**
     * @var LocationDetails|null $location This type is used by the <b>createInventoryLocation</b> call to provide an full or partial address of an inventory location.
    */
    private ?LocationDetails $location = null;
    
    /**
     * @var string|null $locationAdditionalInformation This text field is used by the merchant to provide additional information about an inventory location. <br><br><b>Max length</b>: 256
    */
    private ?string $locationAdditionalInformation = null;
    
    /**
     * @var string|null $locationInstructions This text field is generally used by the merchant to provide special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available).
    */
    private ?string $locationInstructions = null;
    
    /**
     * @var array<string>|null $locationTypes This container is used to define the function of the inventory location. Typically, an inventory location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.<br><br>For In-Store Pickup inventory, set <b>StoreTypeEnum</b> to <code>STORE</code>.<br><br>To utilize the Multi-warehouse program, set <b>StoreTypeEnum</b> to <code>FULFILLMENT_CENTER</code>.<br><br>If this container is omitted, the location type of the inventory location will default to <code>WAREHOUSE</code>. See <a href="/api-docs/sell/inventory/types/api:StoreTypeEnum">StoreTypeEnum</a> for the supported values.<br><br><b>Default</b>: <code>WAREHOUSE</code>
    */
    private ?array $locationTypes = null;
    
    /**
     * @var string|null $locationWebUrl This text field is used by the merchant to provide the Website address (URL) associated with the inventory location. <br><br><b>Max length</b>: 512
    */
    private ?string $locationWebUrl = null;
    
    /**
     * @var string|null $merchantLocationStatus This field is used to indicate whether the inventory location will be enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). If this field is omitted, a successful <strong>createInventoryLocation</strong> call will automatically enable the location. A merchant may want to create a new location but leave it as disabled if the location is not yet ready for active inventory. Once the location is ready, the merchant can use the <strong>enableInventoryLocation</strong> call to enable a location that is in a disabled state.<br><br>See <a href="/api-docs/sell/inventory/types/api:StatusEnum">StatusEnum</a> for the supported values.  <br><br><b>Default</b>: ENABLED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
    */
    private ?string $merchantLocationStatus = null;
    
    /**
     * @var string|null $name The seller-defined name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. A name is not required for warehouse locations. For store locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omits this field in a <strong>createInventoryLocation</strong> call, it becomes required for an <strong>updateInventoryLocation</strong> call.<br><br><b>Max length</b>: 1000
    */
    private ?string $name = null;
    
    /**
     * @var array<OperatingHours>|null $operatingHours This container is used to express the regular operating hours for a store location during each day of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container will be needed for each day of the week that the store location is open.<br><br>Although not technically required, this container is highly recommended to be used to specify operating hours for a store location.
    */
    private ?array $operatingHours = null;
    
    /**
     * @var string|null $phone This field is used to specify the phone number for an inventory location.<br><br><b>Max length</b>: 36
    */
    private ?string $phone = null;
    
    /**
     * @var array<SpecialHours>|null $specialHours This container is used to express the special operating hours for a store inventory location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week.
    */
    private ?array $specialHours = null;
    
    /**
     * @var string|null $timeZoneId This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href="https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets" target="_blank">Java Supported Zone Ids and Offsets</a>.<br><br><span class="tablenote"><b>Note:</b> If specified, this time zone will be used for all hour related fields. If this field is not specified for a fulfillment center location, the time zone will be calculated from the provided address fields.</span>
    */
    private ?string $timeZoneId = null;
    
    /**
     * Instantiates a new InventoryLocationFull and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryLocationFull
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryLocationFull {
        return new InventoryLocationFull();
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
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([LocationDetails::class, 'createFromDiscriminatorValue'])),
            'locationAdditionalInformation' => fn(ParseNode $n) => $o->setLocationAdditionalInformation($n->getStringValue()),
            'locationInstructions' => fn(ParseNode $n) => $o->setLocationInstructions($n->getStringValue()),
            'locationTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocationTypes($val);
            },
            'locationWebUrl' => fn(ParseNode $n) => $o->setLocationWebUrl($n->getStringValue()),
            'merchantLocationStatus' => fn(ParseNode $n) => $o->setMerchantLocationStatus($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'operatingHours' => fn(ParseNode $n) => $o->setOperatingHours($n->getCollectionOfObjectValues([OperatingHours::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'specialHours' => fn(ParseNode $n) => $o->setSpecialHours($n->getCollectionOfObjectValues([SpecialHours::class, 'createFromDiscriminatorValue'])),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fulfillmentCenterSpecifications property value. This type is used to provide shipping specification details, such as the weekly cut-off schedule for order handling and cut-off override(s), for a fulfillment center location. 
     * @return FulfillmentCenterSpecifications|null
    */
    public function getFulfillmentCenterSpecifications(): ?FulfillmentCenterSpecifications {
        return $this->fulfillmentCenterSpecifications;
    }

    /**
     * Gets the location property value. This type is used by the <b>createInventoryLocation</b> call to provide an full or partial address of an inventory location.
     * @return LocationDetails|null
    */
    public function getLocation(): ?LocationDetails {
        return $this->location;
    }

    /**
     * Gets the locationAdditionalInformation property value. This text field is used by the merchant to provide additional information about an inventory location. <br><br><b>Max length</b>: 256
     * @return string|null
    */
    public function getLocationAdditionalInformation(): ?string {
        return $this->locationAdditionalInformation;
    }

    /**
     * Gets the locationInstructions property value. This text field is generally used by the merchant to provide special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available).
     * @return string|null
    */
    public function getLocationInstructions(): ?string {
        return $this->locationInstructions;
    }

    /**
     * Gets the locationTypes property value. This container is used to define the function of the inventory location. Typically, an inventory location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.<br><br>For In-Store Pickup inventory, set <b>StoreTypeEnum</b> to <code>STORE</code>.<br><br>To utilize the Multi-warehouse program, set <b>StoreTypeEnum</b> to <code>FULFILLMENT_CENTER</code>.<br><br>If this container is omitted, the location type of the inventory location will default to <code>WAREHOUSE</code>. See <a href="/api-docs/sell/inventory/types/api:StoreTypeEnum">StoreTypeEnum</a> for the supported values.<br><br><b>Default</b>: <code>WAREHOUSE</code>
     * @return array<string>|null
    */
    public function getLocationTypes(): ?array {
        return $this->locationTypes;
    }

    /**
     * Gets the locationWebUrl property value. This text field is used by the merchant to provide the Website address (URL) associated with the inventory location. <br><br><b>Max length</b>: 512
     * @return string|null
    */
    public function getLocationWebUrl(): ?string {
        return $this->locationWebUrl;
    }

    /**
     * Gets the merchantLocationStatus property value. This field is used to indicate whether the inventory location will be enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). If this field is omitted, a successful <strong>createInventoryLocation</strong> call will automatically enable the location. A merchant may want to create a new location but leave it as disabled if the location is not yet ready for active inventory. Once the location is ready, the merchant can use the <strong>enableInventoryLocation</strong> call to enable a location that is in a disabled state.<br><br>See <a href="/api-docs/sell/inventory/types/api:StatusEnum">StatusEnum</a> for the supported values.  <br><br><b>Default</b>: ENABLED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMerchantLocationStatus(): ?string {
        return $this->merchantLocationStatus;
    }

    /**
     * Gets the name property value. The seller-defined name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. A name is not required for warehouse locations. For store locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omits this field in a <strong>createInventoryLocation</strong> call, it becomes required for an <strong>updateInventoryLocation</strong> call.<br><br><b>Max length</b>: 1000
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the operatingHours property value. This container is used to express the regular operating hours for a store location during each day of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container will be needed for each day of the week that the store location is open.<br><br>Although not technically required, this container is highly recommended to be used to specify operating hours for a store location.
     * @return array<OperatingHours>|null
    */
    public function getOperatingHours(): ?array {
        return $this->operatingHours;
    }

    /**
     * Gets the phone property value. This field is used to specify the phone number for an inventory location.<br><br><b>Max length</b>: 36
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the specialHours property value. This container is used to express the special operating hours for a store inventory location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week.
     * @return array<SpecialHours>|null
    */
    public function getSpecialHours(): ?array {
        return $this->specialHours;
    }

    /**
     * Gets the timeZoneId property value. This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href="https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets" target="_blank">Java Supported Zone Ids and Offsets</a>.<br><br><span class="tablenote"><b>Note:</b> If specified, this time zone will be used for all hour related fields. If this field is not specified for a fulfillment center location, the time zone will be calculated from the provided address fields.</span>
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
        $writer->writeCollectionOfPrimitiveValues('locationTypes', $this->getLocationTypes());
        $writer->writeStringValue('locationWebUrl', $this->getLocationWebUrl());
        $writer->writeStringValue('merchantLocationStatus', $this->getMerchantLocationStatus());
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
     * Sets the fulfillmentCenterSpecifications property value. This type is used to provide shipping specification details, such as the weekly cut-off schedule for order handling and cut-off override(s), for a fulfillment center location. 
     * @param FulfillmentCenterSpecifications|null $value Value to set for the fulfillmentCenterSpecifications property.
    */
    public function setFulfillmentCenterSpecifications(?FulfillmentCenterSpecifications $value): void {
        $this->fulfillmentCenterSpecifications = $value;
    }

    /**
     * Sets the location property value. This type is used by the <b>createInventoryLocation</b> call to provide an full or partial address of an inventory location.
     * @param LocationDetails|null $value Value to set for the location property.
    */
    public function setLocation(?LocationDetails $value): void {
        $this->location = $value;
    }

    /**
     * Sets the locationAdditionalInformation property value. This text field is used by the merchant to provide additional information about an inventory location. <br><br><b>Max length</b>: 256
     * @param string|null $value Value to set for the locationAdditionalInformation property.
    */
    public function setLocationAdditionalInformation(?string $value): void {
        $this->locationAdditionalInformation = $value;
    }

    /**
     * Sets the locationInstructions property value. This text field is generally used by the merchant to provide special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available).
     * @param string|null $value Value to set for the locationInstructions property.
    */
    public function setLocationInstructions(?string $value): void {
        $this->locationInstructions = $value;
    }

    /**
     * Sets the locationTypes property value. This container is used to define the function of the inventory location. Typically, an inventory location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.<br><br>For In-Store Pickup inventory, set <b>StoreTypeEnum</b> to <code>STORE</code>.<br><br>To utilize the Multi-warehouse program, set <b>StoreTypeEnum</b> to <code>FULFILLMENT_CENTER</code>.<br><br>If this container is omitted, the location type of the inventory location will default to <code>WAREHOUSE</code>. See <a href="/api-docs/sell/inventory/types/api:StoreTypeEnum">StoreTypeEnum</a> for the supported values.<br><br><b>Default</b>: <code>WAREHOUSE</code>
     * @param array<string>|null $value Value to set for the locationTypes property.
    */
    public function setLocationTypes(?array $value): void {
        $this->locationTypes = $value;
    }

    /**
     * Sets the locationWebUrl property value. This text field is used by the merchant to provide the Website address (URL) associated with the inventory location. <br><br><b>Max length</b>: 512
     * @param string|null $value Value to set for the locationWebUrl property.
    */
    public function setLocationWebUrl(?string $value): void {
        $this->locationWebUrl = $value;
    }

    /**
     * Sets the merchantLocationStatus property value. This field is used to indicate whether the inventory location will be enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). If this field is omitted, a successful <strong>createInventoryLocation</strong> call will automatically enable the location. A merchant may want to create a new location but leave it as disabled if the location is not yet ready for active inventory. Once the location is ready, the merchant can use the <strong>enableInventoryLocation</strong> call to enable a location that is in a disabled state.<br><br>See <a href="/api-docs/sell/inventory/types/api:StatusEnum">StatusEnum</a> for the supported values.  <br><br><b>Default</b>: ENABLED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the merchantLocationStatus property.
    */
    public function setMerchantLocationStatus(?string $value): void {
        $this->merchantLocationStatus = $value;
    }

    /**
     * Sets the name property value. The seller-defined name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. A name is not required for warehouse locations. For store locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omits this field in a <strong>createInventoryLocation</strong> call, it becomes required for an <strong>updateInventoryLocation</strong> call.<br><br><b>Max length</b>: 1000
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the operatingHours property value. This container is used to express the regular operating hours for a store location during each day of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container will be needed for each day of the week that the store location is open.<br><br>Although not technically required, this container is highly recommended to be used to specify operating hours for a store location.
     * @param array<OperatingHours>|null $value Value to set for the operatingHours property.
    */
    public function setOperatingHours(?array $value): void {
        $this->operatingHours = $value;
    }

    /**
     * Sets the phone property value. This field is used to specify the phone number for an inventory location.<br><br><b>Max length</b>: 36
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the specialHours property value. This container is used to express the special operating hours for a store inventory location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week.
     * @param array<SpecialHours>|null $value Value to set for the specialHours property.
    */
    public function setSpecialHours(?array $value): void {
        $this->specialHours = $value;
    }

    /**
     * Sets the timeZoneId property value. This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href="https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets" target="_blank">Java Supported Zone Ids and Offsets</a>.<br><br><span class="tablenote"><b>Note:</b> If specified, this time zone will be used for all hour related fields. If this field is not specified for a fulfillment center location, the time zone will be calculated from the provided address fields.</span>
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

}
