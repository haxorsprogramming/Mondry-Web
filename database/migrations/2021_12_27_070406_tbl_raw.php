<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblRaw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_raw', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_raw', 60);
            $table -> char('raw_name', 100);
            $table -> char('unit', 20); //kg - litre - dozen - rim - pcs - box
            $table -> text('deks');
            $table -> char('id_branch', 100);
            $table -> integer('stock');
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
        Schema::dropIfExists('tbl_raw');
    }
}
