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
        $this -> branchData = $helperCtr -> getBranchData();
    }

    public function laundryCardPage()
    {
        $cardData = M_Laundry_Card::where('id_branch', $this -> branchData -> id_branch) -> get();
        $dr = ['cardData' => $cardData];
        return view('app.laundryCard.laundryCardPage', $dr);
    }
    public function newLaundryCard()
    {
        $cusData = M_Customer::all();
        $serviceItem = M_Service_Item::where('id_branch', $this -> branchData -> id_branch) -> get();
        $dr = ['cusData' => $cusData, 'serviceItem' => $serviceItem];
        return view('app.laundryCard.newLaundryCardPage', $dr);
    }
    public function processAddNewLaundry(Request $request)
    {
        $idCustomer = $request -> idCustomer;
        $itemData = $request -> itemData;
        $idCard = Str::uuid();
        $dataUser = $this -> helperCtr -> getUserLoginData();
        // create new laundry card 
        $lc = new M_Laundry_Card();
        $lc -> id_card = $idCard;
        $lc -> id_branch = $this -> branchData -> id_branch;
        $lc -> id_customer = $idCustomer;
        $lc -> username_employee = $dataUser -> username;
        $lc -> status = "REGISTERED";
        $lc -> status_payment = "PENDING";
        $lc -> active = "1";
        $lc -> save();
        // save card item
        $or = 0;
        foreach($itemData as $is){
            $ci = new M_Card_Item();
            $ci -> id_card = $idCard;
            $ci -> id_service_item = $itemData[$or]['idItem'];
            $ci -> price_at = $itemData[$or]['priceAt'];
            $ci -> qt = $itemData[$or]['qt'];
            $ci -> total = $itemData[$or]['total'];
            $ci -> active = "1";
            $ci -> save();
            $or++;
        }
        $dr = ['status' => 'success', 'idCustomer' => $idCustomer, 'itemData' => $itemData];
        return \Response::json($dr);
    }
}
