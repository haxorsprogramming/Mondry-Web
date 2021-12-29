<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

use App\Models\M_Role;
use App\Models\M_Setting;
use App\Models\M_Timeline;

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
    
    public function getDataRole()
    {
        return M_Role::all();
    }

    public function createTimeline($event, $deks)
    {
        $dataLogin = $this -> getUserLoginData();

        $timeline = New M_Timeline();
        $timeline -> token = Str::uuid();
        $timeline -> username = $dataLogin -> username;
        $timeline -> event = $event;
        $timeline -> deks = $deks;
        $timeline -> save();
    }

    public function getRoleName($kdRole)
    {
        $roleData = M_Role::where('kd_role', $kdRole) -> first();
        return $roleData -> role_name;
    }
}
