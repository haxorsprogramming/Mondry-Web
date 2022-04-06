<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this -> call([
            S_Raw_Material::class,
            S_User::class,
            S_Role::class,
            S_Setting::class,
            S_Branch::class,
            S_Customer::class,
            S_Service_Item::class
        ]);
        // // create promo code 
        // $this -> createPromoCode($idBranch, "MERDEKA", "Promo Kemerdekaan", "5", "20");
        // $this -> createPromoCode($idBranch, "NEWYEAR", "Promo Tahun Baru", "10", "30");
        // $this -> createPromoCode($idBranch, "IDULFITRI","Promo Hari raya idul fitri", "15", "20");
    }

    function createPromoCode($idBranch, $promoCode, $name, $value, $quota)
    {
        DB::table('tbl_promo_code') -> insert([
            'id_code' => Str::uuid(),
            'id_branch' => $idBranch,
            'promo_code' => $promoCode,
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

}
