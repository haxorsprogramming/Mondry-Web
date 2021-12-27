<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;

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
}
