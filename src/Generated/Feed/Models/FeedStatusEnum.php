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

use Microsoft\Kiota\Abstractions\Enum;

class FeedStatusEnum extends Enum {
    public const C_R_E_A_T_E_D = "CREATED";
    public const Q_U_E_U_E_D = "QUEUED";
    public const I_N__P_R_O_C_E_S_S = "IN_PROCESS";
    public const C_O_M_P_L_E_T_E_D = "COMPLETED";
    public const C_O_M_P_L_E_T_E_D__W_I_T_H__E_R_R_O_R = "COMPLETED_WITH_ERROR";
    public const F_A_I_L_E_D = "FAILED";
    public const P_A_R_T_I_A_L_L_Y__P_R_O_C_E_S_S_E_D = "PARTIALLY_PROCESSED";
}
