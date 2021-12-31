<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Customer;
use App\Models\M_Service_Item;

use App\Http\Controllers\C_Helper;

class C_Laundry_Card extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function newLaundryCard()
    {
        $branchData = $this -> helperCtr -> getBranchData();
        $cusData = M_Customer::all();
        $serviceItem = M_Service_Item::where('id_branch', $branchData -> id_branch) -> get();
        $dr = ['cusData' => $cusData, 'serviceItem' => $serviceItem];
        return view('app.laundryCard.newLaundryCardPage', $dr);
    }
}
