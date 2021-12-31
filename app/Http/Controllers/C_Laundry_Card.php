<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Customer;

class C_Laundry_Card extends Controller
{
    public function newLaundryCard()
    {
        $cusData = M_Customer::all();
        $dr = ['cusData' => $cusData];
        return view('app.laundryCard.newLaundryCardPage', $dr);
    }
}
