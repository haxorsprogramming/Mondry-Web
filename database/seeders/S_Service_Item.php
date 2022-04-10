<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use App\Models\M_Service_Item;

class S_Service_Item extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> importServiceItem();
    }

    function importServiceItem()
    {
        $dataItem = file_get_contents("public/ladun/file/serviceItem.json");
        $dataItem = json_decode($dataItem);
        foreach($dataItem as $item){
            $si = new M_Service_Item();
            $si -> id_item = Str::uuid();
            $si -> id_branch = env('ID_BRANCH_DEFAULT');
            $si -> name = $item -> name;
            $si -> deks = $item -> deks;
            $si -> unit = $item -> unit;
            $si -> type = $item -> type;
            $si -> price_at = $item -> price;
            $si -> active = "1";
            $si -> save();
        }
    }
}
