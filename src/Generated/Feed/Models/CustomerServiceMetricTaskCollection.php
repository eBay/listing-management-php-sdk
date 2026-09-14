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

namespace EBay\ListingManagement\Generated\Feed\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines customer service metric task response fields.
*/
class CustomerServiceMetricTaskCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URI of the current page of results.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The value of the <strong>limit</strong> parameter submitted in the request, which is the maximum number of tasks to return per page, from the result set. A result set is the complete set of tasks returned by the method. <p> <span class="tablenote"><strong>Note:</strong> Even though this parameter is not required to be submitted in the request, the parameter defaults to 10 if omitted.</span></p><p> <span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer tasks than the limit value. To determine the number of pages in a result set, divide the total value (total number of tasks matching input criteria) by this limit value, and then round up to the next integer. For example, if the <strong>total</strong> value was <code>120</code> (120 total tasks) and the <strong>limit</strong> value was <code>50</code> (show 50 tasks per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getCustomerServiceMetricTasks</strong> calls to view all tasks matching the input criteria.</span></p>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The relative path to the call URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The number of results skipped in the result set before returning the first result. This value can be set in the request with the <b>offset</b> query parameter. <p class="tablenote"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The URI for the previous page of results. This parameter is returned if a previous page of results from the result set exists.
    */
    private ?string $prev = null;
    
    /**
     * @var array<ServiceMetricsTask>|null $tasks An array of the customer service tasks on this page. The tasks are sorted by creation date. An empty array is returned if the filter criteria excludes all tasks.
    */
    private ?array $tasks = null;
    
    /**
     * @var int|null $total The total number of tasks that match the criteria.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new CustomerServiceMetricTaskCollection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setLimit(10);
        $this->setOffset(0);
        $this->setTotal(0);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerServiceMetricTaskCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerServiceMetricTaskCollection {
        return new CustomerServiceMetricTaskCollection();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([ServiceMetricsTask::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI of the current page of results.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The value of the <strong>limit</strong> parameter submitted in the request, which is the maximum number of tasks to return per page, from the result set. A result set is the complete set of tasks returned by the method. <p> <span class="tablenote"><strong>Note:</strong> Even though this parameter is not required to be submitted in the request, the parameter defaults to 10 if omitted.</span></p><p> <span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer tasks than the limit value. To determine the number of pages in a result set, divide the total value (total number of tasks matching input criteria) by this limit value, and then round up to the next integer. For example, if the <strong>total</strong> value was <code>120</code> (120 total tasks) and the <strong>limit</strong> value was <code>50</code> (show 50 tasks per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getCustomerServiceMetricTasks</strong> calls to view all tasks matching the input criteria.</span></p>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The relative path to the call URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The number of results skipped in the result set before returning the first result. This value can be set in the request with the <b>offset</b> query parameter. <p class="tablenote"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The URI for the previous page of results. This parameter is returned if a previous page of results from the result set exists.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the tasks property value. An array of the customer service tasks on this page. The tasks are sorted by creation date. An empty array is returned if the filter criteria excludes all tasks.
     * @return array<ServiceMetricsTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Gets the total property value. The total number of tasks that match the criteria.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. The URI of the current page of results.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The value of the <strong>limit</strong> parameter submitted in the request, which is the maximum number of tasks to return per page, from the result set. A result set is the complete set of tasks returned by the method. <p> <span class="tablenote"><strong>Note:</strong> Even though this parameter is not required to be submitted in the request, the parameter defaults to 10 if omitted.</span></p><p> <span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer tasks than the limit value. To determine the number of pages in a result set, divide the total value (total number of tasks matching input criteria) by this limit value, and then round up to the next integer. For example, if the <strong>total</strong> value was <code>120</code> (120 total tasks) and the <strong>limit</strong> value was <code>50</code> (show 50 tasks per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getCustomerServiceMetricTasks</strong> calls to view all tasks matching the input criteria.</span></p>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The relative path to the call URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The number of results skipped in the result set before returning the first result. This value can be set in the request with the <b>offset</b> query parameter. <p class="tablenote"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The URI for the previous page of results. This parameter is returned if a previous page of results from the result set exists.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the tasks property value. An array of the customer service tasks on this page. The tasks are sorted by creation date. An empty array is returned if the filter criteria excludes all tasks.
     * @param array<ServiceMetricsTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->tasks = $value;
    }

    /**
     * Sets the total property value. The total number of tasks that match the criteria.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
