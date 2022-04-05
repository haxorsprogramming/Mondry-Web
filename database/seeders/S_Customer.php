<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\M_Customer;

class S_Customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> importCustomer();
    }

    function importCustomer()
    {
        // "name": "Sulistiya Wati",
        // "address" : "Perbaungan",
        // "email" : "s.wati8922@gmail.com",
        // "phoneNumber" : "097822991122"
        $dataCus = file_get_contents("public/ladun/file/fakeCustomer.json");
        $dataCus = json_decode($dataCus);

        foreach($dataCus as $cus){
            $customer = new M_Customer();
            $customer -> id_customer = Str::uuid();
            $customer -> name = $cus -> name;
            $customer -> address = $cus -> address;
            $customer -> email = $cus -> email;
            $customer -> phone_number = $cus -> phoneNumber;
            $customer -> active = "1";
            $customer -> save();
        }

    }

}
