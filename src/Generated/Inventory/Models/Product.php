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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type is used to define the product details, such as a title, a product description, product aspects/item specifics, and links to images for the product. Optionally, in a <strong>createOrReplaceInventoryItem</strong> call, a seller can pass in an eBay Product Identifier (ePID) or a Global Trade Item Number (GTIN) value, such as an EAN, an ISBN, a UPC, to identify a product to be matched with a product in the eBay Catalog. The information in this type is also returned in the <strong>getInventoryItem</strong>, <strong>getInventoryItems</strong>, and <strong>bulkGetInventoryItem</strong> calls if defined.
*/
class Product implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $aspects This is a collection of item specifics (aka product aspects) name-value pairs that provide more information about the product and might make it easier for buyers to find. To view required/recommended product aspects/item specifics names (and corresponding values) for a specific eBay category, sellers can use the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API. Alternatively, sellers can view similar items on eBay.com in the same category to get an idea of what other sellers are using for product aspects/item specifics.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Effective from December 28th, 2024, sellers offering certain rechargeable devices in EU and Northern Ireland markets must comply with the Common Charger Directive (CCD) and list appropriate charger-related aspects and values on their listings. See <a href="/api-docs/sell/static/inventory/common-charger-directive.html" target="_blank">Common Charger Directive</a> for more information.</p></div><br>Sellers also have the option of specifying an eBay Product ID (ePID) or optionally, a Global Trade Item Number (GTIN) through the corresponding fields in the <strong>product</strong> container in an attempt to find a product match in the eBay Catalog. If a match is found based on the ePID or GTIN value, the product aspects that are defined for the eBay Catalog product will automatically get picked up by the newly created/updated inventory item. <br><br>Below is an example of the proper JSON syntax to use when manually inputting item specifics. Note that one item specific name, such as 'Features', can have more than one value. If an item specific name has more than one value, each value is delimited with a comma.<br><br><pre>"aspects": {<br> "Brand": ["GoPro"],<br> "Storage Type": ["Removable"]<br> }</pre><br>Note that inventory items that will become part of an inventory item group and multiple-variation listing should have the same attributes that are defined for the inventory item group.<br><br>This container will be returned if one or more item specific pairs are defined for the inventory item.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length for Aspect Name</strong>: 40<br><br><strong>Maximum length for Aspect Value</strong>: 50
    */
    private ?string $aspects = null;
    
    /**
     * @var string|null $brand The brand of the product. This field is often paired with the <strong>mpn</strong> field to identify a specific product by Manufacturer Part Number. This field is conditionally required if the eBay category requires a Manufacturer Part Number (MPN) value. If eBay is able to find a product match in the eBay Catalog when an eBay Product ID (ePID) or GTIN value (UPC, ISBN, or EAN) is supplied, all product details of that eBay Catalog product is picked up by the inventory item record (including brand) if the <strong>createOrReplaceInventoryItem</strong> call is successful. <br><br>This field is returned if defined for an inventory item. If a brand was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>brand</strong> field.<br><br><strong>Maximum length</strong>: 65
    */
    private ?string $brand = null;
    
    /**
     * @var string|null $description The description of the product. The description of an existing inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. The description of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>Note that this field is optional but recommended. If a <strong>listingDescription</strong> field is omitted when creating and publishing a single-variation offer, the text in this field will be used instead. If neither the <strong>product.description</strong> field for the inventory item nor the <strong>listingDescription</strong> field for the offer exist, the <strong>publishOffer</strong> call will fail. If the inventory item will be part of an inventory item group/multiple-variation listing, this field should definitely be used to specify how the corresponding product variation is different (e.g. <em>This is the green, extra-large version of the shirt</em>). However, in the case of an inventory item group, the text in the <strong>description</strong> field of the inventory item group will become the listing description of the actual eBay listing instead of the text in this field.<br><br>Basic HTML tags are supported, including the following tags:<ul><li>&lt;b&gt;</li><li>&lt;strong&gt;</li><li>&lt;br&gt;</li><li>&lt;ol&gt;</li><li>&lt;ul&gt;</li><li>&lt;li&gt;</li><li>Table tags including &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;, &lt;thead&gt;, &lt;tfoot&gt;, &lt;tbody&gt;, &lt;caption&gt;, &lt;colgroup&gt;, and &lt;col&gt;</li></ul>A seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions.<br><br>This field is returned if defined for an inventory item. If one of the GTIN types (e.g. UPC) was passed in when the inventory item was created/modified and a product match was found in the eBay catalog, product description is one of the details that gets picked up from the catalog product.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length</strong>: 4000
    */
    private ?string $description = null;
    
    /**
     * @var array<string>|null $ean The European Article Number/International Article Number (EAN) for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified EAN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an EAN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>ean</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an EAN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
    */
    private ?array $ean = null;
    
    /**
     * @var string|null $epid The eBay Product Identifier (ePID) for the product. This field can be used to directly identify an eBay Catalog product. Based on its specified ePID value, eBay will search for the product in the eBay Catalog, and if a match is found, the inventory item is automatically populated with available product details such as product title, product description, product aspects, and a link to any stock image that exists for the catalog product.<br><br>In an attempt to find a eBay Catalog product match, an ePID value is always preferred over the other product identifiers, since it is possible that one GTIN value can be associated with multiple eBay Catalog products, and if multiple products are found, product details will not be picked up by the Inventory Item object.<p><br><span class="tablenote"><strong>Note:</strong> When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), the use of catalog products is required. For more information, see <a href="/api-docs/sell/static/inventory/tuning-devices-and-software-rest.html" target="_blank">Tuning devices and software</a>.</span></p><br>This field is returned if defined for an inventory item.
    */
    private ?string $epid = null;
    
    /**
     * @var array<string>|null $imageUrls An array of one or more links to images for the product. URLs must use the "HTTPS" protocol. Images can be self-hosted by the seller, or sellers can use the <a href="/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html "  target="_blank">UploadSiteHostedPictures</a> call of the Trading API to upload images to an eBay Picture Server. If successful, the response of the <a href="/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html " target="_blank">UploadSiteHostedPictures</a> call will contain a full URL to the image on an eBay Picture Server. This is the URL that will be passed in through the <strong>imageUrls</strong> array. Before an offer can be published, at least one image must exist for the inventory item. In almost any category at no cost, sellers can include up to 24 pictures in one listing. For inventory items that are a part of an inventory item group/multiple-variation listings, a maximum of 12 pictures may be used per inventory item in the group. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127 " target="_blank">Fees for selling vehicles on eBay Motors</a>).<br><br>A link to a stock image for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>This container will always be returned for an inventory item that is part of a published offer since a published offer will always have at least one picture, but this container will only be returned if defined for inventory items that are not a part of a published offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one image URL must be specified before an offer can be published to create an active listing.</p></span></div>
    */
    private ?array $imageUrls = null;
    
    /**
     * @var array<string>|null $isbn The International Standard Book Number (ISBN) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified ISBN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an ISBN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>isbn</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an ISBN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
    */
    private ?array $isbn = null;
    
    /**
     * @var string|null $mpn The Manufacturer Part Number (MPN) of a product. This field is paired with the <strong>brand</strong> field to identify a product. Some eBay categories require MPN values. The <a href/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method in the Taxonomy API can be used to see if a category requires an MPN. The MPN value for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. <br><br>This field is returned if defined for an inventory item. If an MPN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>mpn</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an MPN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p><strong>Maximum length</strong>: 65
    */
    private ?string $mpn = null;
    
    /**
     * @var string|null $subtitle A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged to the seller if a subtitle is used. For more information on using listing subtitles on the US site, see the <a href="https://pages.ebay.com/help/sell/itemsubtitle.html " target="_blank">Adding a subtitle to your listings</a> help page. The subtitle of an existing inventory item can added, modified, or removed with a <strong>createOrReplaceInventoryItem</strong> call.<br><br>Note that the same <strong>subtitle</strong> text should be used for each inventory item that will be part of an inventory item group, and ultimately become one product variation within a multiple-variation listing.<br><br>This field will only be returned if set for an inventory item.<br><br><strong>Maximum length</strong>: 55
    */
    private ?string $subtitle = null;
    
    /**
     * @var string|null $title The title of an inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. Although not immediately required, a title will be needed before an offer with the inventory item is published. The title of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. If the inventory item will become part of a single-variation offer, and the listing is not a product-based listing, the text in this field will become the actual listing title for the published offer. However, if the inventory item will become part of a multiple-variation offer, the text in <strong>title</strong> field of the inventory item group entity will actually become the listing title for the published offer instead, although a title can still be provided for the inventory item, and it will actually become the title of the variation.<br><br>This field will always be returned for an inventory item that is part of a published offer since a published offer will always have a listing title, but this field will only be returned if defined for inventory items that are not a part of a published offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length</strong>: 80
    */
    private ?string $title = null;
    
    /**
     * @var array<string>|null $upc The Universal Product Code (UPC) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified UPC value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If a UPC was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>upc</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires a UPC value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
    */
    private ?array $upc = null;
    
    /**
     * @var array<string>|null $videoIds An array of one or more <b>videoId</b> values for the product. A video ID is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the  <a href="/develop/api/sell/media_api#sell-media_api-video-uploadvideo" target="_blank">uploadVideo</a> method of the <a href="/develop/api/sell/media_api" target="_blank">Media API</a>.<br><br>For information on supported marketplaces and platforms, as well as other requirements and limitations of video support, please refer to <a href="/api-docs/sell/static/inventory/managing-video-media.html " target="_blank">Managing videos</a>.<br><br><span class="tablenote"><b>Note:</b> Only one video per listing is supported.</span>
    */
    private ?array $videoIds = null;
    
    /**
     * Instantiates a new Product and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Product
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Product {
        return new Product();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspects property value. This is a collection of item specifics (aka product aspects) name-value pairs that provide more information about the product and might make it easier for buyers to find. To view required/recommended product aspects/item specifics names (and corresponding values) for a specific eBay category, sellers can use the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API. Alternatively, sellers can view similar items on eBay.com in the same category to get an idea of what other sellers are using for product aspects/item specifics.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Effective from December 28th, 2024, sellers offering certain rechargeable devices in EU and Northern Ireland markets must comply with the Common Charger Directive (CCD) and list appropriate charger-related aspects and values on their listings. See <a href="/api-docs/sell/static/inventory/common-charger-directive.html" target="_blank">Common Charger Directive</a> for more information.</p></div><br>Sellers also have the option of specifying an eBay Product ID (ePID) or optionally, a Global Trade Item Number (GTIN) through the corresponding fields in the <strong>product</strong> container in an attempt to find a product match in the eBay Catalog. If a match is found based on the ePID or GTIN value, the product aspects that are defined for the eBay Catalog product will automatically get picked up by the newly created/updated inventory item. <br><br>Below is an example of the proper JSON syntax to use when manually inputting item specifics. Note that one item specific name, such as 'Features', can have more than one value. If an item specific name has more than one value, each value is delimited with a comma.<br><br><pre>"aspects": {<br> "Brand": ["GoPro"],<br> "Storage Type": ["Removable"]<br> }</pre><br>Note that inventory items that will become part of an inventory item group and multiple-variation listing should have the same attributes that are defined for the inventory item group.<br><br>This container will be returned if one or more item specific pairs are defined for the inventory item.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length for Aspect Name</strong>: 40<br><br><strong>Maximum length for Aspect Value</strong>: 50
     * @return string|null
    */
    public function getAspects(): ?string {
        return $this->aspects;
    }

    /**
     * Gets the brand property value. The brand of the product. This field is often paired with the <strong>mpn</strong> field to identify a specific product by Manufacturer Part Number. This field is conditionally required if the eBay category requires a Manufacturer Part Number (MPN) value. If eBay is able to find a product match in the eBay Catalog when an eBay Product ID (ePID) or GTIN value (UPC, ISBN, or EAN) is supplied, all product details of that eBay Catalog product is picked up by the inventory item record (including brand) if the <strong>createOrReplaceInventoryItem</strong> call is successful. <br><br>This field is returned if defined for an inventory item. If a brand was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>brand</strong> field.<br><br><strong>Maximum length</strong>: 65
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * Gets the description property value. The description of the product. The description of an existing inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. The description of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>Note that this field is optional but recommended. If a <strong>listingDescription</strong> field is omitted when creating and publishing a single-variation offer, the text in this field will be used instead. If neither the <strong>product.description</strong> field for the inventory item nor the <strong>listingDescription</strong> field for the offer exist, the <strong>publishOffer</strong> call will fail. If the inventory item will be part of an inventory item group/multiple-variation listing, this field should definitely be used to specify how the corresponding product variation is different (e.g. <em>This is the green, extra-large version of the shirt</em>). However, in the case of an inventory item group, the text in the <strong>description</strong> field of the inventory item group will become the listing description of the actual eBay listing instead of the text in this field.<br><br>Basic HTML tags are supported, including the following tags:<ul><li>&lt;b&gt;</li><li>&lt;strong&gt;</li><li>&lt;br&gt;</li><li>&lt;ol&gt;</li><li>&lt;ul&gt;</li><li>&lt;li&gt;</li><li>Table tags including &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;, &lt;thead&gt;, &lt;tfoot&gt;, &lt;tbody&gt;, &lt;caption&gt;, &lt;colgroup&gt;, and &lt;col&gt;</li></ul>A seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions.<br><br>This field is returned if defined for an inventory item. If one of the GTIN types (e.g. UPC) was passed in when the inventory item was created/modified and a product match was found in the eBay catalog, product description is one of the details that gets picked up from the catalog product.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length</strong>: 4000
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the ean property value. The European Article Number/International Article Number (EAN) for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified EAN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an EAN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>ean</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an EAN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
     * @return array<string>|null
    */
    public function getEan(): ?array {
        return $this->ean;
    }

    /**
     * Gets the epid property value. The eBay Product Identifier (ePID) for the product. This field can be used to directly identify an eBay Catalog product. Based on its specified ePID value, eBay will search for the product in the eBay Catalog, and if a match is found, the inventory item is automatically populated with available product details such as product title, product description, product aspects, and a link to any stock image that exists for the catalog product.<br><br>In an attempt to find a eBay Catalog product match, an ePID value is always preferred over the other product identifiers, since it is possible that one GTIN value can be associated with multiple eBay Catalog products, and if multiple products are found, product details will not be picked up by the Inventory Item object.<p><br><span class="tablenote"><strong>Note:</strong> When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), the use of catalog products is required. For more information, see <a href="/api-docs/sell/static/inventory/tuning-devices-and-software-rest.html" target="_blank">Tuning devices and software</a>.</span></p><br>This field is returned if defined for an inventory item.
     * @return string|null
    */
    public function getEpid(): ?string {
        return $this->epid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspects' => fn(ParseNode $n) => $o->setAspects($n->getStringValue()),
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ean' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEan($val);
            },
            'epid' => fn(ParseNode $n) => $o->setEpid($n->getStringValue()),
            'imageUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setImageUrls($val);
            },
            'isbn' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIsbn($val);
            },
            'mpn' => fn(ParseNode $n) => $o->setMpn($n->getStringValue()),
            'subtitle' => fn(ParseNode $n) => $o->setSubtitle($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'upc' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUpc($val);
            },
            'videoIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setVideoIds($val);
            },
        ];
    }

    /**
     * Gets the imageUrls property value. An array of one or more links to images for the product. URLs must use the "HTTPS" protocol. Images can be self-hosted by the seller, or sellers can use the <a href="/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html "  target="_blank">UploadSiteHostedPictures</a> call of the Trading API to upload images to an eBay Picture Server. If successful, the response of the <a href="/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html " target="_blank">UploadSiteHostedPictures</a> call will contain a full URL to the image on an eBay Picture Server. This is the URL that will be passed in through the <strong>imageUrls</strong> array. Before an offer can be published, at least one image must exist for the inventory item. In almost any category at no cost, sellers can include up to 24 pictures in one listing. For inventory items that are a part of an inventory item group/multiple-variation listings, a maximum of 12 pictures may be used per inventory item in the group. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127 " target="_blank">Fees for selling vehicles on eBay Motors</a>).<br><br>A link to a stock image for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>This container will always be returned for an inventory item that is part of a published offer since a published offer will always have at least one picture, but this container will only be returned if defined for inventory items that are not a part of a published offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one image URL must be specified before an offer can be published to create an active listing.</p></span></div>
     * @return array<string>|null
    */
    public function getImageUrls(): ?array {
        return $this->imageUrls;
    }

    /**
     * Gets the isbn property value. The International Standard Book Number (ISBN) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified ISBN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an ISBN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>isbn</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an ISBN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
     * @return array<string>|null
    */
    public function getIsbn(): ?array {
        return $this->isbn;
    }

    /**
     * Gets the mpn property value. The Manufacturer Part Number (MPN) of a product. This field is paired with the <strong>brand</strong> field to identify a product. Some eBay categories require MPN values. The <a href/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method in the Taxonomy API can be used to see if a category requires an MPN. The MPN value for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. <br><br>This field is returned if defined for an inventory item. If an MPN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>mpn</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an MPN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p><strong>Maximum length</strong>: 65
     * @return string|null
    */
    public function getMpn(): ?string {
        return $this->mpn;
    }

    /**
     * Gets the subtitle property value. A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged to the seller if a subtitle is used. For more information on using listing subtitles on the US site, see the <a href="https://pages.ebay.com/help/sell/itemsubtitle.html " target="_blank">Adding a subtitle to your listings</a> help page. The subtitle of an existing inventory item can added, modified, or removed with a <strong>createOrReplaceInventoryItem</strong> call.<br><br>Note that the same <strong>subtitle</strong> text should be used for each inventory item that will be part of an inventory item group, and ultimately become one product variation within a multiple-variation listing.<br><br>This field will only be returned if set for an inventory item.<br><br><strong>Maximum length</strong>: 55
     * @return string|null
    */
    public function getSubtitle(): ?string {
        return $this->subtitle;
    }

    /**
     * Gets the title property value. The title of an inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. Although not immediately required, a title will be needed before an offer with the inventory item is published. The title of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. If the inventory item will become part of a single-variation offer, and the listing is not a product-based listing, the text in this field will become the actual listing title for the published offer. However, if the inventory item will become part of a multiple-variation offer, the text in <strong>title</strong> field of the inventory item group entity will actually become the listing title for the published offer instead, although a title can still be provided for the inventory item, and it will actually become the title of the variation.<br><br>This field will always be returned for an inventory item that is part of a published offer since a published offer will always have a listing title, but this field will only be returned if defined for inventory items that are not a part of a published offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length</strong>: 80
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the upc property value. The Universal Product Code (UPC) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified UPC value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If a UPC was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>upc</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires a UPC value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
     * @return array<string>|null
    */
    public function getUpc(): ?array {
        return $this->upc;
    }

    /**
     * Gets the videoIds property value. An array of one or more <b>videoId</b> values for the product. A video ID is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the  <a href="/develop/api/sell/media_api#sell-media_api-video-uploadvideo" target="_blank">uploadVideo</a> method of the <a href="/develop/api/sell/media_api" target="_blank">Media API</a>.<br><br>For information on supported marketplaces and platforms, as well as other requirements and limitations of video support, please refer to <a href="/api-docs/sell/static/inventory/managing-video-media.html " target="_blank">Managing videos</a>.<br><br><span class="tablenote"><b>Note:</b> Only one video per listing is supported.</span>
     * @return array<string>|null
    */
    public function getVideoIds(): ?array {
        return $this->videoIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aspects', $this->getAspects());
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfPrimitiveValues('ean', $this->getEan());
        $writer->writeStringValue('epid', $this->getEpid());
        $writer->writeCollectionOfPrimitiveValues('imageUrls', $this->getImageUrls());
        $writer->writeCollectionOfPrimitiveValues('isbn', $this->getIsbn());
        $writer->writeStringValue('mpn', $this->getMpn());
        $writer->writeStringValue('subtitle', $this->getSubtitle());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeCollectionOfPrimitiveValues('upc', $this->getUpc());
        $writer->writeCollectionOfPrimitiveValues('videoIds', $this->getVideoIds());
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
     * Sets the aspects property value. This is a collection of item specifics (aka product aspects) name-value pairs that provide more information about the product and might make it easier for buyers to find. To view required/recommended product aspects/item specifics names (and corresponding values) for a specific eBay category, sellers can use the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API. Alternatively, sellers can view similar items on eBay.com in the same category to get an idea of what other sellers are using for product aspects/item specifics.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Effective from December 28th, 2024, sellers offering certain rechargeable devices in EU and Northern Ireland markets must comply with the Common Charger Directive (CCD) and list appropriate charger-related aspects and values on their listings. See <a href="/api-docs/sell/static/inventory/common-charger-directive.html" target="_blank">Common Charger Directive</a> for more information.</p></div><br>Sellers also have the option of specifying an eBay Product ID (ePID) or optionally, a Global Trade Item Number (GTIN) through the corresponding fields in the <strong>product</strong> container in an attempt to find a product match in the eBay Catalog. If a match is found based on the ePID or GTIN value, the product aspects that are defined for the eBay Catalog product will automatically get picked up by the newly created/updated inventory item. <br><br>Below is an example of the proper JSON syntax to use when manually inputting item specifics. Note that one item specific name, such as 'Features', can have more than one value. If an item specific name has more than one value, each value is delimited with a comma.<br><br><pre>"aspects": {<br> "Brand": ["GoPro"],<br> "Storage Type": ["Removable"]<br> }</pre><br>Note that inventory items that will become part of an inventory item group and multiple-variation listing should have the same attributes that are defined for the inventory item group.<br><br>This container will be returned if one or more item specific pairs are defined for the inventory item.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length for Aspect Name</strong>: 40<br><br><strong>Maximum length for Aspect Value</strong>: 50
     * @param string|null $value Value to set for the aspects property.
    */
    public function setAspects(?string $value): void {
        $this->aspects = $value;
    }

    /**
     * Sets the brand property value. The brand of the product. This field is often paired with the <strong>mpn</strong> field to identify a specific product by Manufacturer Part Number. This field is conditionally required if the eBay category requires a Manufacturer Part Number (MPN) value. If eBay is able to find a product match in the eBay Catalog when an eBay Product ID (ePID) or GTIN value (UPC, ISBN, or EAN) is supplied, all product details of that eBay Catalog product is picked up by the inventory item record (including brand) if the <strong>createOrReplaceInventoryItem</strong> call is successful. <br><br>This field is returned if defined for an inventory item. If a brand was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>brand</strong> field.<br><br><strong>Maximum length</strong>: 65
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the description property value. The description of the product. The description of an existing inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. The description of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>Note that this field is optional but recommended. If a <strong>listingDescription</strong> field is omitted when creating and publishing a single-variation offer, the text in this field will be used instead. If neither the <strong>product.description</strong> field for the inventory item nor the <strong>listingDescription</strong> field for the offer exist, the <strong>publishOffer</strong> call will fail. If the inventory item will be part of an inventory item group/multiple-variation listing, this field should definitely be used to specify how the corresponding product variation is different (e.g. <em>This is the green, extra-large version of the shirt</em>). However, in the case of an inventory item group, the text in the <strong>description</strong> field of the inventory item group will become the listing description of the actual eBay listing instead of the text in this field.<br><br>Basic HTML tags are supported, including the following tags:<ul><li>&lt;b&gt;</li><li>&lt;strong&gt;</li><li>&lt;br&gt;</li><li>&lt;ol&gt;</li><li>&lt;ul&gt;</li><li>&lt;li&gt;</li><li>Table tags including &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;, &lt;thead&gt;, &lt;tfoot&gt;, &lt;tbody&gt;, &lt;caption&gt;, &lt;colgroup&gt;, and &lt;col&gt;</li></ul>A seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions.<br><br>This field is returned if defined for an inventory item. If one of the GTIN types (e.g. UPC) was passed in when the inventory item was created/modified and a product match was found in the eBay catalog, product description is one of the details that gets picked up from the catalog product.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length</strong>: 4000
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the ean property value. The European Article Number/International Article Number (EAN) for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified EAN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an EAN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>ean</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an EAN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
     * @param array<string>|null $value Value to set for the ean property.
    */
    public function setEan(?array $value): void {
        $this->ean = $value;
    }

    /**
     * Sets the epid property value. The eBay Product Identifier (ePID) for the product. This field can be used to directly identify an eBay Catalog product. Based on its specified ePID value, eBay will search for the product in the eBay Catalog, and if a match is found, the inventory item is automatically populated with available product details such as product title, product description, product aspects, and a link to any stock image that exists for the catalog product.<br><br>In an attempt to find a eBay Catalog product match, an ePID value is always preferred over the other product identifiers, since it is possible that one GTIN value can be associated with multiple eBay Catalog products, and if multiple products are found, product details will not be picked up by the Inventory Item object.<p><br><span class="tablenote"><strong>Note:</strong> When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), the use of catalog products is required. For more information, see <a href="/api-docs/sell/static/inventory/tuning-devices-and-software-rest.html" target="_blank">Tuning devices and software</a>.</span></p><br>This field is returned if defined for an inventory item.
     * @param string|null $value Value to set for the epid property.
    */
    public function setEpid(?string $value): void {
        $this->epid = $value;
    }

    /**
     * Sets the imageUrls property value. An array of one or more links to images for the product. URLs must use the "HTTPS" protocol. Images can be self-hosted by the seller, or sellers can use the <a href="/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html "  target="_blank">UploadSiteHostedPictures</a> call of the Trading API to upload images to an eBay Picture Server. If successful, the response of the <a href="/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html " target="_blank">UploadSiteHostedPictures</a> call will contain a full URL to the image on an eBay Picture Server. This is the URL that will be passed in through the <strong>imageUrls</strong> array. Before an offer can be published, at least one image must exist for the inventory item. In almost any category at no cost, sellers can include up to 24 pictures in one listing. For inventory items that are a part of an inventory item group/multiple-variation listings, a maximum of 12 pictures may be used per inventory item in the group. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127 " target="_blank">Fees for selling vehicles on eBay Motors</a>).<br><br>A link to a stock image for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>This container will always be returned for an inventory item that is part of a published offer since a published offer will always have at least one picture, but this container will only be returned if defined for inventory items that are not a part of a published offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This array is required and at least one image URL must be specified before an offer can be published to create an active listing.</p></span></div>
     * @param array<string>|null $value Value to set for the imageUrls property.
    */
    public function setImageUrls(?array $value): void {
        $this->imageUrls = $value;
    }

    /**
     * Sets the isbn property value. The International Standard Book Number (ISBN) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified ISBN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an ISBN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>isbn</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an ISBN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
     * @param array<string>|null $value Value to set for the isbn property.
    */
    public function setIsbn(?array $value): void {
        $this->isbn = $value;
    }

    /**
     * Sets the mpn property value. The Manufacturer Part Number (MPN) of a product. This field is paired with the <strong>brand</strong> field to identify a product. Some eBay categories require MPN values. The <a href/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getitemaspectsforcategory" target="_blank">getItemAspectsForCategory</a> method in the Taxonomy API can be used to see if a category requires an MPN. The MPN value for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. <br><br>This field is returned if defined for an inventory item. If an MPN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>mpn</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires an MPN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p><strong>Maximum length</strong>: 65
     * @param string|null $value Value to set for the mpn property.
    */
    public function setMpn(?string $value): void {
        $this->mpn = $value;
    }

    /**
     * Sets the subtitle property value. A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged to the seller if a subtitle is used. For more information on using listing subtitles on the US site, see the <a href="https://pages.ebay.com/help/sell/itemsubtitle.html " target="_blank">Adding a subtitle to your listings</a> help page. The subtitle of an existing inventory item can added, modified, or removed with a <strong>createOrReplaceInventoryItem</strong> call.<br><br>Note that the same <strong>subtitle</strong> text should be used for each inventory item that will be part of an inventory item group, and ultimately become one product variation within a multiple-variation listing.<br><br>This field will only be returned if set for an inventory item.<br><br><strong>Maximum length</strong>: 55
     * @param string|null $value Value to set for the subtitle property.
    */
    public function setSubtitle(?string $value): void {
        $this->subtitle = $value;
    }

    /**
     * Sets the title property value. The title of an inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. Although not immediately required, a title will be needed before an offer with the inventory item is published. The title of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. If the inventory item will become part of a single-variation offer, and the listing is not a product-based listing, the text in this field will become the actual listing title for the published offer. However, if the inventory item will become part of a multiple-variation offer, the text in <strong>title</strong> field of the inventory item group entity will actually become the listing title for the published offer instead, although a title can still be provided for the inventory item, and it will actually become the title of the variation.<br><br>This field will always be returned for an inventory item that is part of a published offer since a published offer will always have a listing title, but this field will only be returned if defined for inventory items that are not a part of a published offer.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div><br><strong>Maximum length</strong>: 80
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the upc property value. The Universal Product Code (UPC) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified UPC value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If a UPC was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>upc</strong> field.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the item is being listed in a category that requires a UPC value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.</span></p>
     * @param array<string>|null $value Value to set for the upc property.
    */
    public function setUpc(?array $value): void {
        $this->upc = $value;
    }

    /**
     * Sets the videoIds property value. An array of one or more <b>videoId</b> values for the product. A video ID is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the  <a href="/develop/api/sell/media_api#sell-media_api-video-uploadvideo" target="_blank">uploadVideo</a> method of the <a href="/develop/api/sell/media_api" target="_blank">Media API</a>.<br><br>For information on supported marketplaces and platforms, as well as other requirements and limitations of video support, please refer to <a href="/api-docs/sell/static/inventory/managing-video-media.html " target="_blank">Managing videos</a>.<br><br><span class="tablenote"><b>Note:</b> Only one video per listing is supported.</span>
     * @param array<string>|null $value Value to set for the videoIds property.
    */
    public function setVideoIds(?array $value): void {
        $this->videoIds = $value;
    }

}
