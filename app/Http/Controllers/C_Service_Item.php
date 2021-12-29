<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Service_Item extends Controller
{
    public function serviceItemPage()
    {
        return view('app.serviceItem.serviceItemPage');
    }
}
