<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Employee;
use App\Models\M_Branch;

class C_Branch extends Controller
{
    public function branchPage()
    {
        $dataManager = M_Employee::where('role', '2') -> get();
        $dr = ['dataManager' => $dataManager];
        return view('app.branch.branchPage', $dr);
    }
    public function processAddBranch(Request $request)
    {
        // {'name':name, 'address':address, 'owner':owner, 
            // 'phone':phone, 'main':main, 'manager':manager}
        $branch = new M_Branch();
        $branch -> id_branch = Str::uuid();
        $branch -> branch_name = $request -> name;
        $branch -> username_manager = $request -> manager;
        $branch -> address = $request -> address;
        $branch -> owner_name = $request -> owner;
        $branch -> phone_number = $request -> phone;
        $branch -> main_branch = $request -> main;
        $branch -> status = "ACTIVE";
        $branch -> active = "1";
        $branch -> save();
        $status = "SUCCESS";
        $dr = ['status' => $status];
        return \Response::json($dr);
    }
}
