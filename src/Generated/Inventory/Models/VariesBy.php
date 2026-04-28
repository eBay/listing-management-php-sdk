<?php

namespace EBay\ListingManagement\Generated\Inventory\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type is used to specify the product aspect(s) where individual items of the group vary, as well as a list of the available variations of those aspects.
*/
class VariesBy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $aspectsImageVariesBy This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the variations of the inventory item group vary, such as color. If <code>Color</code> is specified in this field, <code>Color</code> must also be one of the <strong>specifications.name</strong> values, and all available colors must appear in the corresponding <strong>specifications.values</strong> array.<br><br>If the <strong>aspectsImageVariesBy</strong> container is used, links to images of each variation should be specified through the <strong>imageUrls</strong> container of the inventory item group, or the seller can choose to include those links to images in each inventory item record for the inventory items in the group. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one aspect (such as <code>Color</code>) must be specified before an offer can be published to create an active listing.</p></span></div>
    */
    private ?array $aspectsImageVariesBy = null;
    
    /**
     * @var array<Specification>|null $specifications This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the first offer of the inventory item group is published. <br><br>If a product aspect is specified in the <strong>aspectsImageVariesBy</strong> container, this product aspect (along with all variations of that product aspect) must be included in the <strong>specifications</strong> container. Before offers related to the inventory item group are published, the product aspects and values specified through the <strong>specifications</strong> container should be in synch with the name-value pairs specified through the <strong>product.aspects</strong> containers of the inventory items contained in the group. For example, if <code>Color</code> and <code>Size</code> are in this <strong>specifications</strong> container, each inventory item of the group should also have <code>Color</code> and <code>Size</code> as aspect names in their inventory item records.<br><br>This container is always returned if one or more offers associated with the inventory item group have been published. For inventory item groups that have yet to have any published offers, this container is only returned if set.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one aspect with the available variations must be specified.</p></span></div>
    */
    private ?array $specifications = null;
    
    /**
     * Instantiates a new VariesBy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VariesBy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VariesBy {
        return new VariesBy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspectsImageVariesBy property value. This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the variations of the inventory item group vary, such as color. If <code>Color</code> is specified in this field, <code>Color</code> must also be one of the <strong>specifications.name</strong> values, and all available colors must appear in the corresponding <strong>specifications.values</strong> array.<br><br>If the <strong>aspectsImageVariesBy</strong> container is used, links to images of each variation should be specified through the <strong>imageUrls</strong> container of the inventory item group, or the seller can choose to include those links to images in each inventory item record for the inventory items in the group. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one aspect (such as <code>Color</code>) must be specified before an offer can be published to create an active listing.</p></span></div>
     * @return array<string>|null
    */
    public function getAspectsImageVariesBy(): ?array {
        return $this->aspectsImageVariesBy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspectsImageVariesBy' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAspectsImageVariesBy($val);
            },
            'specifications' => fn(ParseNode $n) => $o->setSpecifications($n->getCollectionOfObjectValues([Specification::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the specifications property value. This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the first offer of the inventory item group is published. <br><br>If a product aspect is specified in the <strong>aspectsImageVariesBy</strong> container, this product aspect (along with all variations of that product aspect) must be included in the <strong>specifications</strong> container. Before offers related to the inventory item group are published, the product aspects and values specified through the <strong>specifications</strong> container should be in synch with the name-value pairs specified through the <strong>product.aspects</strong> containers of the inventory items contained in the group. For example, if <code>Color</code> and <code>Size</code> are in this <strong>specifications</strong> container, each inventory item of the group should also have <code>Color</code> and <code>Size</code> as aspect names in their inventory item records.<br><br>This container is always returned if one or more offers associated with the inventory item group have been published. For inventory item groups that have yet to have any published offers, this container is only returned if set.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one aspect with the available variations must be specified.</p></span></div>
     * @return array<Specification>|null
    */
    public function getSpecifications(): ?array {
        return $this->specifications;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aspectsImageVariesBy', $this->getAspectsImageVariesBy());
        $writer->writeCollectionOfObjectValues('specifications', $this->getSpecifications());
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
     * Sets the aspectsImageVariesBy property value. This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the variations of the inventory item group vary, such as color. If <code>Color</code> is specified in this field, <code>Color</code> must also be one of the <strong>specifications.name</strong> values, and all available colors must appear in the corresponding <strong>specifications.values</strong> array.<br><br>If the <strong>aspectsImageVariesBy</strong> container is used, links to images of each variation should be specified through the <strong>imageUrls</strong> container of the inventory item group, or the seller can choose to include those links to images in each inventory item record for the inventory items in the group. <br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one aspect (such as <code>Color</code>) must be specified before an offer can be published to create an active listing.</p></span></div>
     * @param array<string>|null $value Value to set for the aspectsImageVariesBy property.
    */
    public function setAspectsImageVariesBy(?array $value): void {
        $this->aspectsImageVariesBy = $value;
    }

    /**
     * Sets the specifications property value. This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the first offer of the inventory item group is published. <br><br>If a product aspect is specified in the <strong>aspectsImageVariesBy</strong> container, this product aspect (along with all variations of that product aspect) must be included in the <strong>specifications</strong> container. Before offers related to the inventory item group are published, the product aspects and values specified through the <strong>specifications</strong> container should be in synch with the name-value pairs specified through the <strong>product.aspects</strong> containers of the inventory items contained in the group. For example, if <code>Color</code> and <code>Size</code> are in this <strong>specifications</strong> container, each inventory item of the group should also have <code>Color</code> and <code>Size</code> as aspect names in their inventory item records.<br><br>This container is always returned if one or more offers associated with the inventory item group have been published. For inventory item groups that have yet to have any published offers, this container is only returned if set.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one aspect with the available variations must be specified.</p></span></div>
     * @param array<Specification>|null $value Value to set for the specifications property.
    */
    public function setSpecifications(?array $value): void {
        $this->specifications = $value;
    }

}
