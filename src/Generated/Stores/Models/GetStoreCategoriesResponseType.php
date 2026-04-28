<?php

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base response type of the <b>getStoreCategories</b> method. This type provides the entire category hierarchy for the store.
*/
class GetStoreCategoriesResponseType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<StoreCategoryType>|null $storeCategories An array of top-level categories defined for the eBay store. A childrenCategories array is used for second and third-level categories, if defined for the store.
    */
    private ?array $storeCategories = null;
    
    /**
     * Instantiates a new GetStoreCategoriesResponseType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetStoreCategoriesResponseType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetStoreCategoriesResponseType {
        return new GetStoreCategoriesResponseType();
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
            'storeCategories' => fn(ParseNode $n) => $o->setStoreCategories($n->getCollectionOfObjectValues([StoreCategoryType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the storeCategories property value. An array of top-level categories defined for the eBay store. A childrenCategories array is used for second and third-level categories, if defined for the store.
     * @return array<StoreCategoryType>|null
    */
    public function getStoreCategories(): ?array {
        return $this->storeCategories;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('storeCategories', $this->getStoreCategories());
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
     * Sets the storeCategories property value. An array of top-level categories defined for the eBay store. A childrenCategories array is used for second and third-level categories, if defined for the store.
     * @param array<StoreCategoryType>|null $value Value to set for the storeCategories property.
    */
    public function setStoreCategories(?array $value): void {
        $this->storeCategories = $value;
    }

}
