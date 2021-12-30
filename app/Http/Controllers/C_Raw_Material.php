<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\C_Helper;

use App\Models\M_Raw_Material;

class C_Raw_Material extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function rawMaterialPage()
    {
        $dataMaterial = M_Raw_Material::all();
        $dr = ['dataRaw' => $dataMaterial];
        return view('app.rawMaterial.rawMaterialPage', $dr);
    }
    public function processAddRawMaterial(Request $request)
    {
        // {'name':name, 'deks':deks, 'unit':unit, 'stock':stock}
        $idRaw = Str::uuid();
        $branchData = $this -> helperCtr -> getBranchData();
        $raw = new M_Raw_Material();
        $raw -> id_raw = $idRaw;
        $raw -> raw_name = $request -> name;
        $raw -> unit = $request -> unit;
        $raw -> deks = $request -> deks;
        $raw -> id_branch = $branchData -> id_branch;
        $raw -> stock = $request -> stock;
        $raw -> active = "1";
        $raw -> save();
        // craate timeline 
        $this -> helperCtr -> createTimeline("RAW_MATERIAL_CREATED", "Raw material ".$request -> name." created");
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
    public function procesDeleteRawMaterial(Request $request)
    {
        // {'idRaw':idRaw}
        $idRaw = $request -> idRaw;
        M_Raw_Material::where('id_raw', $idRaw) -> delete();
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
}
