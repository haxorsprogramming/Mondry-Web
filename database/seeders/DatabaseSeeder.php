<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

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

}
