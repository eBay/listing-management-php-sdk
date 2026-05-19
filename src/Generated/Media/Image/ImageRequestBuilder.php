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

namespace EBay\ListingManagement\Generated\Media\Image;

use EBay\ListingManagement\Generated\Media\Image\Create_image_from_file\Create_image_from_fileRequestBuilder;
use EBay\ListingManagement\Generated\Media\Image\Create_image_from_url\Create_image_from_urlRequestBuilder;
use EBay\ListingManagement\Generated\Media\Image\Item\WithImage_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /image
*/
class ImageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The create_image_from_file property
    */
    public function create_image_from_file(): Create_image_from_fileRequestBuilder {
        return new Create_image_from_fileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The create_image_from_url property
    */
    public function create_image_from_url(): Create_image_from_urlRequestBuilder {
        return new Create_image_from_urlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/ListingManagement/Generated/Media.image.item collection
     * @param string $image_id This path parameter is the unique identifier of a created image. Use the value returned in the location header of the method used to create the image (<b>createImageFromFile</b> or <b>createImageFromUrl</b>, as applicable).
     * @return WithImage_ItemRequestBuilder
    */
    public function byImage_id(string $image_id): WithImage_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['image_id'] = $image_id;
        return new WithImage_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ImageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/image');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
