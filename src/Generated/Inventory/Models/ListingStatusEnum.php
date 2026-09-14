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

class ListingStatusEnum extends Enum {
    public const A_C_T_I_V_E = "ACTIVE";
    public const O_U_T__O_F__S_T_O_C_K = "OUT_OF_STOCK";
    public const I_N_A_C_T_I_V_E = "INACTIVE";
    public const E_N_D_E_D = "ENDED";
    public const E_B_A_Y__E_N_D_E_D = "EBAY_ENDED";
    public const N_O_T__L_I_S_T_E_D = "NOT_LISTED";
}
