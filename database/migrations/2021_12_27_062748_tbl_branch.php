<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_branch', function (Blueprint $table) {
            $table -> id();
            $table -> uuid('id_branch');
            $table -> integer('ord');
            $table -> char('branch_name', 100);
            $table -> char('username_manager', 100);
            $table -> text('address');
            $table -> char('owner_name', 100);
            $table -> char('phone_number', 100);
            $table -> char('main_branch', 1);
            $table -> char('status', 100); //open - closed
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
        Schema::dropIfExists('tbl_branch');
    }
}
