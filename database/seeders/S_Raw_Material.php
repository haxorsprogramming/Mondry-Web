<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\M_Raw_Material;

class S_Raw_Material extends Seeder
{

    public function run()
    {
        $this -> createRawMaterial();
    }

    function createRawMaterial()
    {
        $dataRaw = file_get_contents("public/ladun/file/rawMaterial.json");
        $dataRaw = json_decode($dataRaw);

        foreach($dataRaw as $raw){
            $rm = new M_Raw_Material();
            $rm -> id_raw = Str::uuid();
            $rm -> raw_name = $raw -> name;
            $rm -> unit = $raw -> unit;
            $rm -> deks = $raw -> deks;
            $rm -> id_branch = env('ID_BRANCH_DEFAULT');
            $rm -> stock = $raw -> stock;
            $rm -> active = "1";
            $rm -> save();
        }
    }
}
