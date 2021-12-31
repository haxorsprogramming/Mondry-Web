<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Customer extends Controller
{
    public function customerPage()
    {
        return view('app.customer.customerPage');
    }
}
