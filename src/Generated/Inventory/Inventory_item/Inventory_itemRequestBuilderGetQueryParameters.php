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

namespace EBay\ListingManagement\Generated\Inventory\Inventory_item;

/**
 * This call retrieves all inventory item records defined for the seller's account. The <strong>limit</strong> query parameter allows the seller to control how many records are returned per page, and the <strong>offset</strong> query parameter is used to retrieve a specific page of records. The seller can make multiple calls to scan through multiple pages of records. There is no request payload for this call.<br><br>The <code>authorization</code> header is the only required HTTP header for this call, and it is required for all Inventory API calls. See the <strong>HTTP request headers</strong> section for more information.<br><br>For those who prefer to retrieve numerous inventory item records by SKU value with one call (up to 25 at a time), the <strong>bulkGetInventoryItem</strong> method can be used.
*/
class Inventory_itemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be an integer from <code>1</code> to <code>200</code>.<br><br><strong>Min:</strong> 1<br><br><strong>Max:</strong> 200<br><br><b>Default:</b> 25
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned. 
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Inventory_itemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be an integer from <code>1</code> to <code>200</code>.<br><br><strong>Min:</strong> 1<br><br><strong>Max:</strong> 200<br><br><b>Default:</b> 25
     * @param string|null $offset The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned. 
    */
    public function __construct(?string $limit = null, ?string $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
