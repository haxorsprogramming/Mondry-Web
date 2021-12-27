<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Employee;

class C_Branch extends Controller
{
    public function branchPage()
    {
        $dataManager = M_Employee::where('role', '2') -> get();
        $dr = ['dataManager' => $dataManager];
        return view('app.branch.branchPage', $dr);
    }
}
