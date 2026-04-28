<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type lists regional product compliance policies to be used by an offer when it is published and converted to a listing.
*/
class RegionalProductCompliancePolicies implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CountryPolicy>|null $countryPolicies The array of country-specific product compliance policies to be used by an offer when it is published and converted to a listing.
    */
    private ?array $countryPolicies = null;
    
    /**
     * Instantiates a new RegionalProductCompliancePolicies and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegionalProductCompliancePolicies
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegionalProductCompliancePolicies {
        return new RegionalProductCompliancePolicies();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryPolicies property value. The array of country-specific product compliance policies to be used by an offer when it is published and converted to a listing.
     * @return array<CountryPolicy>|null
    */
    public function getCountryPolicies(): ?array {
        return $this->countryPolicies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryPolicies' => fn(ParseNode $n) => $o->setCountryPolicies($n->getCollectionOfObjectValues([CountryPolicy::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('countryPolicies', $this->getCountryPolicies());
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
     * Sets the countryPolicies property value. The array of country-specific product compliance policies to be used by an offer when it is published and converted to a listing.
     * @param array<CountryPolicy>|null $value Value to set for the countryPolicies property.
    */
    public function setCountryPolicies(?array $value): void {
        $this->countryPolicies = $value;
    }

}
