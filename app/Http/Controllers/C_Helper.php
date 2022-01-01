<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\DB;

use App\Models\M_Role;
use App\Models\M_Setting;
use App\Models\M_Timeline;
use App\Models\M_User;
use App\Models\M_Branch;

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

    public function getBranchData()
    {
        $dataLogin = $this -> getUserLoginData();
        $username = $dataLogin -> username;
        $dataUser = M_User::where('username', $username) -> first();
        return $dataUser -> branchData;
    }

    public function generateIdMaster($tableName, $prefix)
    {
        $totalRecord = DB::table($tableName) -> count();
        if($totalRecord == 0){
            $urutan = (int) substr(0, 3, 3);
            $urutan++;
            $huruf = $prefix."-";
            $noId = $huruf . sprintf("%07s", $urutan);
            $ord = 1;
            $dataId = ['ord' => $ord, 'noId' => $noId];
        }else{
            $noIdLast = DB::table($tableName) -> orderby('id', 'desc') -> limit(1) -> get();
            $noId = $noIdLast[0] -> id;
            $nowOrd = $noId + 1;
            $huruf = $prefix."-";
            $noId = $huruf . sprintf("%07s", $nowOrd);
            $dataId = ['ord' => $nowOrd, 'noId' => $noId];
        }
        return $dataId;
    }

}
