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

namespace EBay\ListingManagement\Generated\Media\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DocumentStatusEnum extends Enum {
    public const S_U_B_M_I_T_T_E_D = "SUBMITTED";
    public const A_C_C_E_P_T_E_D = "ACCEPTED";
    public const R_E_J_E_C_T_E_D = "REJECTED";
    public const P_E_N_D_I_N_G__U_P_L_O_A_D = "PENDING_UPLOAD";
    public const E_X_P_I_R_E_D = "EXPIRED";
}
