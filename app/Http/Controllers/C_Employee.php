<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;

use App\Models\M_Branch;
use App\Models\M_Employee;
use App\Models\M_User;

class C_Employee extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }
    public function employeePage()
    {
        $dataRole = $this -> helperCtr -> getDataRole();
        $dataEmployee = M_Employee::all();
        $dr = ['role' => $dataRole, 'dataEmployee' => $dataEmployee];
        return view('app.employee.employeePage', $dr);
    }
    public function processAddEmployee(Request $request)
    {
        // {'name':name, 'address' : address, 'username':username, 'phoneNumber':phoneNumber, 'password':password, 'email':email, 'role':role}
        // save data employee 
        $employee = new M_Employee();
        $employee -> username = $request -> username;
        $employee -> role = $request -> role;
        $employee -> name = $request -> name;
        $employee -> address = $request -> address;
        $employee -> email = $request -> email;
        $employee -> phone_number = $request -> phoneNumber;
        $employee -> active = "1";
        $employee -> save();
        // save data user 
        $user = new M_User();
        $user -> username = $request -> username;
        $user -> role = $request -> role;
        $user -> password = password_hash($request -> password, PASSWORD_DEFAULT);
        $user -> active = "1";
        $user -> save();
        $dr = ['status' => 'SUCCESS'];
        return \Response::json($dr);
    }
}
