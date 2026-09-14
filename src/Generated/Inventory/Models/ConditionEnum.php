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

class ConditionEnum extends Enum {
    public const N_E_W = "NEW";
    public const L_I_K_E__N_E_W = "LIKE_NEW";
    public const N_E_W__O_T_H_E_R = "NEW_OTHER";
    public const N_E_W__W_I_T_H__D_E_F_E_C_T_S = "NEW_WITH_DEFECTS";
    public const M_A_N_U_F_A_C_T_U_R_E_R__R_E_F_U_R_B_I_S_H_E_D = "MANUFACTURER_REFURBISHED";
    public const C_E_R_T_I_F_I_E_D__R_E_F_U_R_B_I_S_H_E_D = "CERTIFIED_REFURBISHED";
    public const E_X_C_E_L_L_E_N_T__R_E_F_U_R_B_I_S_H_E_D = "EXCELLENT_REFURBISHED";
    public const V_E_R_Y__G_O_O_D__R_E_F_U_R_B_I_S_H_E_D = "VERY_GOOD_REFURBISHED";
    public const G_O_O_D__R_E_F_U_R_B_I_S_H_E_D = "GOOD_REFURBISHED";
    public const S_E_L_L_E_R__R_E_F_U_R_B_I_S_H_E_D = "SELLER_REFURBISHED";
    public const U_S_E_D__E_X_C_E_L_L_E_N_T = "USED_EXCELLENT";
    public const U_S_E_D__V_E_R_Y__G_O_O_D = "USED_VERY_GOOD";
    public const U_S_E_D__G_O_O_D = "USED_GOOD";
    public const U_S_E_D__A_C_C_E_P_T_A_B_L_E = "USED_ACCEPTABLE";
    public const F_O_R__P_A_R_T_S__O_R__N_O_T__W_O_R_K_I_N_G = "FOR_PARTS_OR_NOT_WORKING";
    public const P_R_E__O_W_N_E_D__E_X_C_E_L_L_E_N_T = "PRE_OWNED_EXCELLENT";
    public const P_R_E__O_W_N_E_D__F_A_I_R = "PRE_OWNED_FAIR";
}
