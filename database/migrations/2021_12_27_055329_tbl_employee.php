<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_employee', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 100);
            $table -> char('name', 100);
            $table -> char('address', 200) -> nullable();
            $table -> char('email', 200) -> nullable();
            $table -> char('phone_number', 200) -> nullable();
            $table -> char('id_branch', 100); 
            $table -> timestamps(); 
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_employee');
    }
}
