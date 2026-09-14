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

use Microsoft\Kiota\Abstractions\Enum;

class AvailabilityTypeEnum extends Enum {
    public const I_N__S_T_O_C_K = "IN_STOCK";
    public const O_U_T__O_F__S_T_O_C_K = "OUT_OF_STOCK";
    public const S_H_I_P__T_O__S_T_O_R_E = "SHIP_TO_STORE";
}
