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
 * This type provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the item.
*/
class ExtendedProducerResponsibility implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $ecoParticipationFee This type is used to express a dollar value and the applicable currency.
    */
    private ?Amount $ecoParticipationFee = null;
    
    /**
     * @var string|null $producerProductId <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
    */
    private ?string $producerProductId = null;
    
    /**
     * @var string|null $productDocumentationId <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
    */
    private ?string $productDocumentationId = null;
    
    /**
     * @var string|null $productPackageId <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
    */
    private ?string $productPackageId = null;
    
    /**
     * @var string|null $shipmentPackageId <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
    */
    private ?string $shipmentPackageId = null;
    
    /**
     * Instantiates a new ExtendedProducerResponsibility and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendedProducerResponsibility
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendedProducerResponsibility {
        return new ExtendedProducerResponsibility();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ecoParticipationFee property value. This type is used to express a dollar value and the applicable currency.
     * @return Amount|null
    */
    public function getEcoParticipationFee(): ?Amount {
        return $this->ecoParticipationFee;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ecoParticipationFee' => fn(ParseNode $n) => $o->setEcoParticipationFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'producerProductId' => fn(ParseNode $n) => $o->setProducerProductId($n->getStringValue()),
            'productDocumentationId' => fn(ParseNode $n) => $o->setProductDocumentationId($n->getStringValue()),
            'productPackageId' => fn(ParseNode $n) => $o->setProductPackageId($n->getStringValue()),
            'shipmentPackageId' => fn(ParseNode $n) => $o->setShipmentPackageId($n->getStringValue()),
        ];
    }

    /**
     * Gets the producerProductId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @return string|null
    */
    public function getProducerProductId(): ?string {
        return $this->producerProductId;
    }

    /**
     * Gets the productDocumentationId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @return string|null
    */
    public function getProductDocumentationId(): ?string {
        return $this->productDocumentationId;
    }

    /**
     * Gets the productPackageId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @return string|null
    */
    public function getProductPackageId(): ?string {
        return $this->productPackageId;
    }

    /**
     * Gets the shipmentPackageId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @return string|null
    */
    public function getShipmentPackageId(): ?string {
        return $this->shipmentPackageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ecoParticipationFee', $this->getEcoParticipationFee());
        $writer->writeStringValue('producerProductId', $this->getProducerProductId());
        $writer->writeStringValue('productDocumentationId', $this->getProductDocumentationId());
        $writer->writeStringValue('productPackageId', $this->getProductPackageId());
        $writer->writeStringValue('shipmentPackageId', $this->getShipmentPackageId());
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
     * Sets the ecoParticipationFee property value. This type is used to express a dollar value and the applicable currency.
     * @param Amount|null $value Value to set for the ecoParticipationFee property.
    */
    public function setEcoParticipationFee(?Amount $value): void {
        $this->ecoParticipationFee = $value;
    }

    /**
     * Sets the producerProductId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @param string|null $value Value to set for the producerProductId property.
    */
    public function setProducerProductId(?string $value): void {
        $this->producerProductId = $value;
    }

    /**
     * Sets the productDocumentationId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @param string|null $value Value to set for the productDocumentationId property.
    */
    public function setProductDocumentationId(?string $value): void {
        $this->productDocumentationId = $value;
    }

    /**
     * Sets the productPackageId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @param string|null $value Value to set for the productPackageId property.
    */
    public function setProductPackageId(?string $value): void {
        $this->productPackageId = $value;
    }

    /**
     * Sets the shipmentPackageId property value. <span class="tablenote"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href="https://accountsettings.ebay.com/epr-fr" target="_blank">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href="https://accountsettings.ebay.fr/epr-fr" target="_blank">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     * @param string|null $value Value to set for the shipmentPackageId property.
    */
    public function setShipmentPackageId(?string $value): void {
        $this->shipmentPackageId = $value;
    }

}
