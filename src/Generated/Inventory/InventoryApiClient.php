<?php

namespace EBay\ListingManagement\Generated\Inventory;

use EBay\ListingManagement\Generated\Inventory\Bulk_create_offer\Bulk_create_offerRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Bulk_create_or_replace_inventory_item\Bulk_create_or_replace_inventory_itemRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Bulk_get_inventory_item\Bulk_get_inventory_itemRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Bulk_migrate_listing\Bulk_migrate_listingRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Bulk_publish_offer\Bulk_publish_offerRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Bulk_update_price_quantity\Bulk_update_price_quantityRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Inventory_item_group\Inventory_item_groupRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Inventory_item\Inventory_itemRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Listing\ListingRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Location\LocationRequestBuilder;
use EBay\ListingManagement\Generated\Inventory\Offer\OfferRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class InventoryApiClient extends BaseRequestBuilder 
{
    /**
     * The bulk_create_offer property
    */
    public function bulk_create_offer(): Bulk_create_offerRequestBuilder {
        return new Bulk_create_offerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_create_or_replace_inventory_item property
    */
    public function bulk_create_or_replace_inventory_item(): Bulk_create_or_replace_inventory_itemRequestBuilder {
        return new Bulk_create_or_replace_inventory_itemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_get_inventory_item property
    */
    public function bulk_get_inventory_item(): Bulk_get_inventory_itemRequestBuilder {
        return new Bulk_get_inventory_itemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_migrate_listing property
    */
    public function bulk_migrate_listing(): Bulk_migrate_listingRequestBuilder {
        return new Bulk_migrate_listingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_publish_offer property
    */
    public function bulk_publish_offer(): Bulk_publish_offerRequestBuilder {
        return new Bulk_publish_offerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_price_quantity property
    */
    public function bulk_update_price_quantity(): Bulk_update_price_quantityRequestBuilder {
        return new Bulk_update_price_quantityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inventory_item property
    */
    public function inventory_item(): Inventory_itemRequestBuilder {
        return new Inventory_itemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inventory_item_group property
    */
    public function inventory_item_group(): Inventory_item_groupRequestBuilder {
        return new Inventory_item_groupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The listing property
    */
    public function listing(): ListingRequestBuilder {
        return new ListingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The location property
    */
    public function location(): LocationRequestBuilder {
        return new LocationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The offer property
    */
    public function offer(): OfferRequestBuilder {
        return new OfferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InventoryApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
