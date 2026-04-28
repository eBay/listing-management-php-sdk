<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to display the expected listing fees for each unpublished offer specified in the request of the <strong>getListingFees</strong> call.
*/
class FeeSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Fee>|null $fees This container is an array of listing fees that can be expected to be applied to an offer on the specified eBay marketplace (<strong>marketplaceId</strong> value). Many fee types will get returned even when they are <code>0.0</code>.<br><br>See the <a href="https://pages.ebay.com/help/sell/fees.html " target="_blank">Standard selling fees</a> help page for more information on listing fees.
    */
    private ?array $fees = null;
    
    /**
     * @var string|null $marketplaceId This is the unique identifier of the eBay site for which  listing fees for the offer are applicable. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var array<Error>|null $warnings This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new FeeSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeeSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeeSummary {
        return new FeeSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the fees property value. This container is an array of listing fees that can be expected to be applied to an offer on the specified eBay marketplace (<strong>marketplaceId</strong> value). Many fee types will get returned even when they are <code>0.0</code>.<br><br>See the <a href="https://pages.ebay.com/help/sell/fees.html " target="_blank">Standard selling fees</a> help page for more information on listing fees.
     * @return array<Fee>|null
    */
    public function getFees(): ?array {
        return $this->fees;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fees' => fn(ParseNode $n) => $o->setFees($n->getCollectionOfObjectValues([Fee::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the marketplaceId property value. This is the unique identifier of the eBay site for which  listing fees for the offer are applicable. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the warnings property value. This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('fees', $this->getFees());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the fees property value. This container is an array of listing fees that can be expected to be applied to an offer on the specified eBay marketplace (<strong>marketplaceId</strong> value). Many fee types will get returned even when they are <code>0.0</code>.<br><br>See the <a href="https://pages.ebay.com/help/sell/fees.html " target="_blank">Standard selling fees</a> help page for more information on listing fees.
     * @param array<Fee>|null $value Value to set for the fees property.
    */
    public function setFees(?array $value): void {
        $this->fees = $value;
    }

    /**
     * Sets the marketplaceId property value. This is the unique identifier of the eBay site for which  listing fees for the offer are applicable. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the warnings property value. This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
