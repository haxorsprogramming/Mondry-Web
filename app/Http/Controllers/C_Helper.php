<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Setting;

class C_Helper extends Controller
{
    public function getSetting($capsSetting)
    {
        $dataSetting = M_Setting::where('caps_setting', $capsSetting) -> first();
        return $dataSetting -> value;
    }
}
