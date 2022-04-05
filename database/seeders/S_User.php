<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_User;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idBranch = env('ID_BRANCH_DEFAULT');
        $this -> createUser('admin', 'admin', '1', 'default');
    }

    function createUser($username, $password, $role, $idBranch)
    {
        $user = new M_User();
        $user -> username = $username;
        $user -> role = $role;
        $user -> id_branch = '$idBranch';
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> active = '1';
        $user -> save();
    }

}
