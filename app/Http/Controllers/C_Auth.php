<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;

use App\Http\Controllers\C_Helper;

use App\Models\M_User;

class C_Auth extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function loginPage()
    {
        $appName = $this -> helperCtr -> getSetting('APP_NAME');
        $dr = ['pageTitle' => 'Login Page', 'page' => 'login', 'appName' => $appName];
        return view('auth.loginPage', $dr);
    }

    public function loginProcess(Request $request)
    {
        // {'username':username, 'password':password}
        $username = $request -> username;
        $password = $request -> password;
        // cari total user 
        $tUser = M_User::where('username', $username) -> count();
        if($tUser < 1){
            $status = "NO_USER";
            $tokenJwt = "";
        }else{
            // cari data user 
            $dataUser = M_User::where('username', $username) -> first();
            $passwordDb = $dataUser -> password;
            $cek_password = password_verify($password, $passwordDb);
            if($cek_password == true){
                $key = env('JWT_KEY');
                $role = $dataUser -> role;
                $payload = array(
                    "username" => $username,
                    "role" => $role
                );
                $tokenJwt = JWT::encode($payload, $key, 'HS256');
                $status = "ACCESS_GRANTED";
            }else{
                $status = "WRONG_PASSWORD";
                $tokenJwt = "";
            }
        }
        $dr = ['status' => $status, 'token' => $tokenJwt];
        return \Response::json($dr);
    }

    public function logout(Request $request)
    { 
        setcookie("MONDRY_TOKEN", "", time() - 3600);
        $request -> session() -> flush();
        return redirect('/login');
    }

}
