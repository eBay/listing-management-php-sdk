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

namespace EBay\ListingManagement\Generated\Feed;

use EBay\ListingManagement\Generated\Feed\Customer_service_metric_task\Customer_service_metric_taskRequestBuilder;
use EBay\ListingManagement\Generated\Feed\Inventory_task\Inventory_taskRequestBuilder;
use EBay\ListingManagement\Generated\Feed\Order_task\Order_taskRequestBuilder;
use EBay\ListingManagement\Generated\Feed\Schedule_template\Schedule_templateRequestBuilder;
use EBay\ListingManagement\Generated\Feed\Schedule\ScheduleRequestBuilder;
use EBay\ListingManagement\Generated\Feed\Task\TaskRequestBuilder;
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
class FeedApiClient extends BaseRequestBuilder 
{
    /**
     * The customer_service_metric_task property
    */
    public function customer_service_metric_task(): Customer_service_metric_taskRequestBuilder {
        return new Customer_service_metric_taskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inventory_task property
    */
    public function inventory_task(): Inventory_taskRequestBuilder {
        return new Inventory_taskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The order_task property
    */
    public function order_task(): Order_taskRequestBuilder {
        return new Order_taskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The schedule property
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The schedule_template property
    */
    public function schedule_template(): Schedule_templateRequestBuilder {
        return new Schedule_templateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The task property
    */
    public function task(): TaskRequestBuilder {
        return new TaskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FeedApiClient and sets the default values.
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
            $this->requestAdapter->setBaseUrl('https://api.ebay.com/sell/feed/v1');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
