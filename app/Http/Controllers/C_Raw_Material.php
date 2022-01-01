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
        $branchData = $this -> helperCtr -> getBranchData();
        $dataMaterial = M_Raw_Material::where('id_branch', $branchData -> id_branch) -> get();
        $dr = ['dataRaw' => $dataMaterial];
        return view('app.rawMaterial.rawMaterialPage', $dr);
    }
    public function processAddRawMaterial(Request $request)
    {
        $idMaster = $this -> helperCtr -> generateIdMaster('tbl_raw', 'RAW');
        $idRaw = $idMaster['noId'];
        $branchData = $this -> helperCtr -> getBranchData();
        $raw = new M_Raw_Material();
        $raw -> id_raw = $idRaw;
        $raw -> ord = $idMaster['ord'];
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
    public function processDeleteRawMaterial(Request $request)
    {
        // {'idRaw':idRaw}
        $idRaw = $request -> idRaw;
        M_Raw_Material::where('id_raw', $idRaw) -> delete();
        $this -> helperCtr -> createTimeline("RAW_MATERIAL_DELETE", "Raw material deleted");
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
    public function editRawMaterialPage(Request $request, $idRaw)
    {
        $dataRaw = M_Raw_Material::where('id_raw', $idRaw) -> first();
        $dr = ['dataRaw' => $dataRaw];
        return view('app.rawMaterial.formEditRawMaterial', $dr);    
    }
    public function processsUpdateRawMaterial(Request $request)
    {
        // {'name':name, 'deks':deks, 'unit':unit, 'stock':stock}
        $idRaw = $request -> idRaw;
        M_Raw_Material::where('id_raw', $idRaw) -> update([
            'raw_name' => $request -> name,
            'unit' => $request -> unit,
            'deks' => $request -> deks,
            'stock' => $request -> stock,
        ]);
        $this -> helperCtr -> createTimeline("RAW_MATERIAL_UPDATE", "Raw material update");
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
}
