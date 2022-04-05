<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_Branch;

class S_Branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createBranch("Mondry", "aditia", "Rika Safitri");
    }

    function createBranch($name, $manager, $owner)
    {
        $branch = new M_Branch();
        $branch -> id_branch = env('ID_BRANCH_DEFAULT');
        $branch -> branch_name = $name;
        $branch -> username_manager = $manager;
        $branch -> address = "-";
        $branch -> owner_name = $owner;
        $branch -> phone_number = "-";
        $branch -> main_branch = "Y";
        $branch -> status = "ACTIVE";
        $branch -> active = "1";
        $branch -> save();
    }

}
