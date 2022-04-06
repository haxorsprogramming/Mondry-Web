<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_Role;

class S_Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> importRole();
    }

    function importRole()
    {
        $dataRole = file_get_contents("public/ladun/file/roleUser.json");
        $dataRole = json_decode($dataRole);
        foreach($dataRole as $roleName){
            $role = new M_Role();
            $role -> kd_role = $roleName -> kdRole;
            $role -> role_name = $roleName -> namaRole;
            $role -> deks = "-";
            $role -> save();
        }
    }

}
