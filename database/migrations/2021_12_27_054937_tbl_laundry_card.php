<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblLaundryCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_laundry_card', function (Blueprint $table) {
            $table -> id();
            $table -> uuid('id_card');
            $table -> char('id_branch', 100);
            $table -> char('id_customer', 100);
            $table -> char('username_employee', 100);
            $table -> char('status', 100); //registered-enter_the_room-done
            $table -> char('status_payment', 100); //pending-done
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
        Schema::dropIfExists('tbl_laundry_card');
    }
}
