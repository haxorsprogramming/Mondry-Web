<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Customer;

use App\Http\Controllers\C_Helper;

class C_Customer extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }
    
    public function customerPage()
    {
        $cusData = M_Customer::all();
        $dr = ['cusData' => $cusData];
        return view('app.customer.customerPage', $dr);
    }
    public function processAddCustomer(Request $request)
    {
        $idMaster = $this -> helperCtr -> generateIdMaster('tbl_customer', 'CUS');
        $idCustomer = $idMaster['noId'];
        $cus = new M_Customer();
        $cus -> id_customer = $idCustomer;
        $cus -> ord = $idMaster['ord'];
        $cus -> name = $request -> name;
        $cus -> address = $request -> address;
        $cus -> email = $request -> email;
        $cus -> phone_number = $request -> phone;
        $cus -> active = "1";
        $cus -> save();
        $dr = ['status' => 'sucess'];
        return \Response::json($dr);
    }
    public function processDeleteCustomer(Request $request)
    {
        $idCustomer = $request -> idCustomer;
        M_Customer::where('id_customer', $idCustomer) -> delete();
        $dr = ['status' => 'sucess'];
        return \Response::json($dr);
    }
}
