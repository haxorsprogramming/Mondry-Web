<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\C_Helper;

use App\Models\M_Service_Item;

class C_Service_Item extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function serviceItemPage()
    {
        $branchData = $this -> helperCtr -> getBranchData();
        $dataIServiceItem = M_Service_Item::where('id_branch', $branchData -> id_branch) -> get();
        $dr = ['dataItem' => $dataIServiceItem];
        return view('app.serviceItem.serviceItemPage', $dr);
    }
    public function processAddServiceItem(Request $request)
    {
        $branchData = $this -> helperCtr -> getBranchData();
        $idItem = Str::uuid();
        $si = new M_Service_Item();
        $si -> id_item = $idItem;
        $si -> id_branch = $branchData -> id_branch;
        $si -> name = $request -> itemName;
        $si -> deks = $request -> deks;
        $si -> unit = $request -> unit;
        $si -> type = $request -> type;
        $si -> price_at = $request -> price;
        $si -> active = "1";
        $si -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function processDeleteServiceItem(Request $request)
    {
        // {'idItem':idItem}
        $idItem = $request -> idItem;
        M_Service_Item::where('id_item', $idItem) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
