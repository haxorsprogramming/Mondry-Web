<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;

class C_Main_App extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function mainApp()
    {
        $appName = $this -> helperCtr -> getSetting('APP_NAME');
        $userData = $this -> helperCtr -> getUserLoginData();
        $role = $this -> helperCtr -> getRoleName($userData -> role);
        $dr = [
            'pageTitle' => 'Dashboard Page',
            'page' => 'mainApp',
            'appName' => $appName,
            'userLogin' => $userData -> username,
            'role' => $role
        ];
        return view('app.mainApp', $dr);
    }

    public function dashboardPage()
    {
        echo "Dashboard";
    }
}
