<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_Setting;

class S_Setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> importSetting();
    }

    function importSetting()
    {
        $dataSetting = file_get_contents("public/ladun/file/settingsData.json");
        $dataSetting = json_decode($dataSetting);

        foreach($dataSetting as $setting){
            // echo $setting -> name."\n";
            $set = new M_Setting();
            $set -> caps_setting = $setting -> caps;
            $set -> setting_name = $setting -> name;
            $set -> value = $setting -> value;
            $set -> save();
        }
        
    }
}
