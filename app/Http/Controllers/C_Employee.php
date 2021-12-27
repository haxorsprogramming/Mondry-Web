<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\C_Helper;

class C_Employee extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }
    public function employeePage()
    {
        return view('app.employee.employeePage');
    }
}
