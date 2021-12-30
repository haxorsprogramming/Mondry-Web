<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Service_Item;

class C_Service_Item extends Controller
{
    public function serviceItemPage()
    {
        return view('app.serviceItem.serviceItemPage');
    }
    public function processAddServiceItem(Request $request)
    {
        // {'itemName':itemName, 'deks':deks, 'unit':unit, 'type':type, 'price':price}
        $idItem = Str::uuid();
        $si = new M_Service_Item();
        $si -> id_item = $idItem;
        $si -> id_branch = '';
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
}
