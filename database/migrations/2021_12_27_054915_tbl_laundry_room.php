<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblLaundryRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_laundry_room', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_room', 100);
            $table -> char('id_card', 100);
            $table -> char('handle_by', 100);
            $table -> char('status', 100); //wash-drying-ironing-done
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
        Schema::dropIfExists('tbl_laundry_room');
    }
}
