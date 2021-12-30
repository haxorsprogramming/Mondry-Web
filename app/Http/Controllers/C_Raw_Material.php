<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Raw_Material extends Controller
{
    public function rawMaterialPage()
    {
        return view('app.rawMaterial.rawMaterialPage');
    }
}
