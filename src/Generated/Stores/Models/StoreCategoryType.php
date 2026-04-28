<?php

namespace EBay\ListingManagement\Generated\Stores\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide details about a customized eBay Store category.
*/
class StoreCategoryType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId Unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryName The seller-specified name of the custom category.
    */
    private ?string $categoryName = null;
    
    /**
     * @var array<StoreCategoryType>|null $childrenCategories This array is returned to show second and third-level store categories. eBay Stores support up to three category levels.
    */
    private ?array $childrenCategories = null;
    
    /**
     * @var int|null $level The level indicates the category level of the category tree.<br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported. All categories belonging to the same parent should have the same level.</span>
    */
    private ?int $level = null;
    
    /**
     * @var int|null $order The order in which the custom store category appears in the list of store categories when the eBay store is visited.
    */
    private ?int $order = null;
    
    /**
     * Instantiates a new StoreCategoryType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StoreCategoryType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StoreCategoryType {
        return new StoreCategoryType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. Unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryName property value. The seller-specified name of the custom category.
     * @return string|null
    */
    public function getCategoryName(): ?string {
        return $this->categoryName;
    }

    /**
     * Gets the childrenCategories property value. This array is returned to show second and third-level store categories. eBay Stores support up to three category levels.
     * @return array<StoreCategoryType>|null
    */
    public function getChildrenCategories(): ?array {
        return $this->childrenCategories;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryName' => fn(ParseNode $n) => $o->setCategoryName($n->getStringValue()),
            'childrenCategories' => fn(ParseNode $n) => $o->setChildrenCategories($n->getCollectionOfObjectValues([StoreCategoryType::class, 'createFromDiscriminatorValue'])),
            'level' => fn(ParseNode $n) => $o->setLevel($n->getIntegerValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the level property value. The level indicates the category level of the category tree.<br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported. All categories belonging to the same parent should have the same level.</span>
     * @return int|null
    */
    public function getLevel(): ?int {
        return $this->level;
    }

    /**
     * Gets the order property value. The order in which the custom store category appears in the list of store categories when the eBay store is visited.
     * @return int|null
    */
    public function getOrder(): ?int {
        return $this->order;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryName', $this->getCategoryName());
        $writer->writeCollectionOfObjectValues('childrenCategories', $this->getChildrenCategories());
        $writer->writeIntegerValue('level', $this->getLevel());
        $writer->writeIntegerValue('order', $this->getOrder());
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
     * Sets the categoryId property value. Unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryName property value. The seller-specified name of the custom category.
     * @param string|null $value Value to set for the categoryName property.
    */
    public function setCategoryName(?string $value): void {
        $this->categoryName = $value;
    }

    /**
     * Sets the childrenCategories property value. This array is returned to show second and third-level store categories. eBay Stores support up to three category levels.
     * @param array<StoreCategoryType>|null $value Value to set for the childrenCategories property.
    */
    public function setChildrenCategories(?array $value): void {
        $this->childrenCategories = $value;
    }

    /**
     * Sets the level property value. The level indicates the category level of the category tree.<br><span class="tablenote"><strong>Note:</strong> Three levels of store categories are supported. All categories belonging to the same parent should have the same level.</span>
     * @param int|null $value Value to set for the level property.
    */
    public function setLevel(?int $value): void {
        $this->level = $value;
    }

    /**
     * Sets the order property value. The order in which the custom store category appears in the list of store categories when the eBay store is visited.
     * @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value): void {
        $this->order = $value;
    }

}
