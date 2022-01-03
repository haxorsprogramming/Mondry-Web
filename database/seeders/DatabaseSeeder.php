<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    
    protected $faker;

    public function __construct()
    {
        require_once 'vendor/autoload.php';
        $faker = Faker\Factory::create('id_ID');
        $this -> faker = $faker;
    }

    public function run()
    {
        $idBranch = Str::uuid();
        // create default user 
        $this -> createSuperUser('admin','admin', '1');
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
        $this -> createEmployee('aditia', 'admin123', 'Aditia Darma', $idBranch, "2");
        // create default branch 
        $this -> createBranch($idBranch, "Mondry", "aditia", "Rahmat Hasibuan");
        // create cashier 
        $this -> createEmployee('vivi', 'admin123', 'Vivi Maulida', $idBranch, "3");
        // create customer 
        $this -> createFakeCustomer(30);
        // create service item 
        $this -> createServiceItem($idBranch, "Base Clothes", "6000");
        $this -> createServiceItem($idBranch, "Sprei", "9000");
        $this -> createServiceItem($idBranch, "Carpet", "11000");
        $this -> createServiceItem($idBranch, "Shoes", "7000");
        $this -> createServiceItem($idBranch, "Gorden", "12000");
        $this -> createServiceItem($idBranch, "Blanket", "8000");
        // create raw material 
        $this -> createRawMaterial("Shampoo", $idBranch, "20");
        $this -> createRawMaterial("Parfum", $idBranch, "12");
        $this -> createRawMaterial("Deterjent", $idBranch, "10");
        $this -> createRawMaterial("Plastic", $idBranch, "15");
        $this -> createRawMaterial("Soap", $idBranch, "23");
        // create promo code 
        $this -> createPromoCode($idBranch, "Promo Kemerdekaan", "5", "20");
        $this -> createPromoCode($idBranch, "Promo Tahun Baru", "10", "30");
        $this -> createPromoCode($idBranch, "Promo Hari raya idul fitri", "15", "20");
    }

    function createPromoCode($idBranch, $name, $value, $quota)
    {
        DB::table('tbl_promo_code') -> insert([
            'id_code' => Str::uuid(),
            'id_branch' => $idBranch,
            'promo_name' => $name,
            'deks' => $this -> faker -> text($maxNbChars = 100),
            'type' => "P",
            'value' => $value,
            'quota' => $quota,
            'expired_on' => $this -> faker -> dateTime($min = 'now', $timezone = null),
            'created_at' => now(),
            'updated_at' => now(),
            'active' => '1'
        ]);
    }

    function createRawMaterial($name, $idBranch, $stock)
    {
        DB::table('tbl_raw') -> insert([
            'id_raw' => Str::uuid(),
            'raw_name' => $name,
            'unit' => 'Kg',
            'deks' => $this -> faker -> text($maxNbChars = 100),
            'id_branch' => $idBranch,
            'stock' => $stock,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => '1'
        ]);
    }

    function createServiceItem($idBranch, $name, $price)
    {
        DB::table('tbl_service_item') -> insert([
            'id_item' => Str::uuid(),
            'id_branch' => $idBranch,
            'name' => $name,
            'deks' => $this -> faker -> text($maxNbChars = 100),
            'unit' => 'Kg',
            'type' => 'I',
            'price_at' => $price,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => '1'
        ]);
    }

    function createFakeCustomer($count)
    {
        for ($x = 0; $x < $count; $x++) {
            $this -> createCustomer();
          }
    }

    function createCustomer()
    {
        DB::table('tbl_customer') -> insert([
            'id_customer' => Str::uuid(),
            'name' => $this -> faker -> name,
            'email' => $this -> faker -> unique() -> safeEmail(),
            'address' => $this -> faker -> address(),
            'phone_number' => $this -> faker -> phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
            'active' => '1'
        ]);
    }

    function createBranch($idBranch, $branchName, $manager, $owner)
    {
        DB::table('tbl_branch') -> insert([
            'id_branch' => $idBranch,
            'branch_name' => $branchName,
            'username_manager' => $manager,
            'address' => $this -> faker -> address(),
            'owner_name' => $owner,
            'phone_number' => $this -> faker -> phoneNumber(),
            'main_branch' => "Y",
            'status' => "ACTIVE",
            'active' => "1",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    function createEmployee($username, $password, $name, $idBranch, $role)
    {
        // save table user 
        DB::table('tbl_user') -> insert([
            'username' => $username,
            'role' => $role,
            'id_branch' => $idBranch,
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
            'address' => $this -> faker -> address(),
            'email' =>$this -> faker -> unique() -> safeEmail(),
            'phone_number' => $this -> faker -> phoneNumber(),
            'id_branch' => $idBranch,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => "1"
        ]);
    }

    function createSuperUser($username, $password, $role)
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
