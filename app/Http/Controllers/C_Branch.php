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
        $dataBranch = M_Branch::all();
        $dr = ['dataManager' => $dataManager, 'dataBranch' => $dataBranch];
        return view('app.branch.branchPage', $dr);
    }
    public function processAddBranch(Request $request)
    {
        $idBranch = Str::uuid();
        // save branch data 
        $branch = new M_Branch();
        $branch -> id_branch = $idBranch;
        $branch -> branch_name = $request -> name;
        $branch -> username_manager = $request -> manager;
        $branch -> address = $request -> address;
        $branch -> owner_name = $request -> owner;
        $branch -> phone_number = $request -> phone;
        $branch -> main_branch = $request -> main;
        $branch -> status = "ACTIVE";
        $branch -> active = "1";
        $branch -> save();
        // update employee status 
        M_Employee::where('username', $request -> manager) -> update([
            'id_branch' => $idBranch
        ]);
        $status = "SUCCESS";
        $dr = ['status' => $status];
        return \Response::json($dr);
    }
}
