<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Firebase\JWT\JWT;

use App\Models\M_Setting;

class C_Helper extends Controller
{
    public function getUserLoginData()
    {
        $key = env('JWT_KEY');
        $jwt = $_COOKIE['MONDRY_TOKEN'];
        $data = JWT::decode($jwt, new Key($key, 'HS256'));
        return $data;
    }

    public function getSetting($capsSetting)
    {
        $dataSetting = M_Setting::where('caps_setting', $capsSetting) -> first();
        return $dataSetting -> value;
    }
}
