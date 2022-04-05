<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\M_Raw_Material;

class S_Raw_Material extends Seeder
{
    // protected $faker;

    // public function __construct()
    // {
    //     require_once 'vendor/autoload.php';
    //     $faker = Faker\Factory::create('id_ID');
    //     $this -> faker = $faker;
    // }

    public function run()
    {
        $idBranch = env('ID_BRANCH_DEFAULT');
        echo $idBranch;
    }

    function createRawMaterial($name, $idBranch, $stock)
    {
        // DB::table('tbl_raw') -> insert([
        //     'id_raw' => Str::uuid(),
        //     'raw_name' => $name,
        //     'unit' => 'Kg',
        //     'deks' => $this -> faker -> text($maxNbChars = 100),
        //     'id_branch' => $idBranch,
        //     'stock' => $stock,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'active' => '1'
        // ]);

    }
}
