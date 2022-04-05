<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_User;
use App\Models\M_Employee;

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
        // create super user 
        // $this -> createUser('admin', 'admin', '1', 'default');
        $this -> createEmployee('admin','admin','Administrator','1','default');
        $this -> createEmployee('aditia', 'admin123', 'Aditia Darma', "2", $idBranch);
        $this -> createEmployee('vivi', 'admin123', 'Vivi Amalia', "3", $idBranch);
        
    }

    function createEmployee($username, $password, $name, $role, $idBranch)
    {
        // save data user 
        $user = new M_User();
        $user -> username = $username;
        $user -> role = $role;
        $user -> id_branch = $idBranch;
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> active = "1";
        $user -> save();
        // save data profile 
        $emp = new M_Employee();
        $emp -> username = $username;
        $emp -> role = $role;
        $emp -> name = $name;
        $emp -> address = "-";
        $emp -> email = "-";
        $emp -> phone_number = "-";
        $emp -> id_branch = $idBranch;
        $emp -> active = "1";
        $emp -> save();
    }

}
