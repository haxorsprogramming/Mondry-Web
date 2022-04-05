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
        $this -> createSuperUser('admin', 'admin', '1');
        
    }

    function createSuperUser($username, $password, $role)
    {
        $user = new M_User();
        $user -> username = $username;
        $user -> role = $role;
        $user -> id_branch = 'default';
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> active = '1';
        $user -> save();
        // DB::table('tbl_user') -> insert([
        //     'username' => $username,
        //     'role' => $role,
        //     'id_branch' => 'default',
        //     'password' => password_hash($password, PASSWORD_DEFAULT),
        //     'active' => '1',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }

}
