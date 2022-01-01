<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Customer;
use App\Models\M_Service_Item;
use App\Models\M_Laundry_Card;
use App\Models\M_Card_Item;

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
    public function processAddNewLaundry(Request $request)
    {
        $idCustomer = $request -> idCustomer;
        $itemData = $request -> itemData;
        $idCard = Str::uuid();
        $dataBranch = $this -> helperCtr -> getBranchData();
        $dataUser = $this -> helperCtr -> getUserLoginData();
        $lc = new M_Laundry_Card();
        $lc -> id_card = $idCard;
        $lc -> id_branch = $dataBranch -> id_branch;
        $lc -> id_customer = $idCustomer;
        $lc -> username_employee = $dataUser -> username;
        $lc -> status = "";
        $lc -> status_payment = "";
        $lc -> active = "1";
        $lc -> save();
        $dr = ['status' => 'success', 'idCustomer' => $idCustomer, 'itemData' => $itemData];
        return \Response::json($dr);
    }
}
