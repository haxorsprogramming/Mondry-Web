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
        $this -> createSetting('OWNER', 'Owner Name', 'NadhaMedia');
        $this -> createSetting('EMAIL', 'Email', 'hi@nadhamedia.com');
        $this -> createSetting('ADDRESS', 'Laundry Name', 'Mondry');
        $this -> createSetting('LANG', 'Language', 'ID');
        $this -> createSetting('DOMAIN', 'Domain name', 'http://mondry.nadhamedia.com');
        $this -> createSetting('USING_WHATSAPP_GATEWAY', 'Laundry using whatsapp gateway','Y');
        $this -> createSetting('API_WOOWA', 'API Key Woowa', '-');
        // create manager 
        $this -> createManager('aditia', 'admin123', 'Aditia Darma', 'Medan', 'adit@gmail.com', '0878123412');
        $this -> createManager('hasnah', 'admin123', 'Hasnah Ardita', 'Medan', 'hasnah@gmail.com', '0878123412');
        $this -> createManager('adam', 'admin123', 'Adam Falizufa', 'Medan', 'adam@gmail.com', '0878123412');
        $this -> createManager('diana', 'admin123', 'Diana Vita', 'Medan', 'diana@gmail.com', '0878123412');
        $this -> createManager('nisa', 'admin123', 'Khairunnisa Siregar', 'Medan', 'nisa@gmail.com', '0878123412');
    }

    function createManager($username, $password, $name, $address, $email, $phone)
    {
        // save table user 
        DB::table('tbl_user') -> insert([
            'username' => $username,
            'role' => "2",
            'id_branch' => 'default',
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // save table employee
        DB::table('tbl_employee') -> insert([
            'username' => $username,
            'role' => "2",
            'name' => $name,
            'address' => $address,
            'email' => $email,
            'phone_number' => $phone,
            'active' => "1"
        ]);
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
