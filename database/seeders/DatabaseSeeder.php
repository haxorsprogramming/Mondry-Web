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
        $this -> createRole('2','Manager Branch', '-');
        $this -> createRole('3','Cashier', '-');
        $this -> createRole('4','Washer', '-');
        $this -> createRole('5','Driyer', '-');
        $this -> createRole('6','Iron', '-');
        $this -> createRole('7','Courier', '-');
        $this -> createRole('8','Cleaning Service', '-');
        // create laundry setting 
        $this -> createSetting('APP_NAME', 'Application Name', 'Mondry');
        $this -> createSetting('OWNER', 'Owner Name', 'NadhMedia');
        $this -> createSetting('EMAIL', 'Email', 'hi@nadhamedia.com');
        $this -> createSetting('ADDRESS', 'Laundry Name', 'Mondry');
        $this -> createSetting('LANG', 'Language', 'ID');
        $this -> createSetting('DOMAIN', 'Domain name', 'http://mondry.nadhamedia.com');
        $this -> createSetting('USING_WHATSAPP_GATEWAY', 'Laundry using whatsapp gateway','Y');
    }

    function createUser($username, $password, $role)
    {
        DB::table('tbl_user') -> insert([
            'username' => $username,
            'role' => $role,
            'id_branch' => 'default',
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
