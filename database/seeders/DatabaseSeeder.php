<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create default user 
        $this -> createUser('admin','admin', '1');
        // create role 
        $this -> createRole('1','Administrator', '-');
        $this -> createRole('2','Cashier', '-');
        $this -> createRole('3','Washer', '-');
        $this -> createRole('4','Driyer', '-');
        $this -> createRole('5','Iron', '-');
        // create laundry setting 
        $this -> createSetting('LAUNDRY_NAME', 'Laundry Name', 'Mondry');
        $this -> createSetting('PHONE_NUMBER', 'Phone Number', 'Mondry');
        $this -> createSetting('EMAIL', 'Laundry Name', 'Mondry');
        $this -> createSetting('ADDRESS', 'Laundry Name', 'Mondry');
        $this -> createSetting('USERNAME_ADMIN', 'Laundry Name', 'Mondry');
        $this -> createSetting('LAUNDRY_NAME', 'Laundry Name', 'Mondry');
        $this -> createSetting('LAUNDRY_NAME', 'Laundry Name', 'Mondry');


    }

    function createUser($username, $password, $role)
    {
        DB::table('tbl_user') -> insert([
            'username' => $username,
            'role' => $role,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    function createRole($kdRole, $roleName, $deks)
    {
        DB::table('tbl_role') -> insert([
            'kd_role' => $kdRole,
            'role_name' => $roleName,
            'deks' => $deks
        ]);
    }

    function createSetting($caps, $name, $value)
    {
        DB::table('tbl_setting') -> insert([
            'caps_setting' => $caps,
            'setting_name' => $name,
            'value' => $value
        ]);
    }
}
