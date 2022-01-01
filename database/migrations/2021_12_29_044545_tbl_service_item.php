<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblServiceItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_service_item', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_item', 60);
            $table -> char('id_branch', 80);
            $table -> char('name', 200);
            $table -> text('deks');
            $table -> char('unit', 20); // kg, pcs
            $table -> char('type', 1); //service, package
            $table -> double('price_at', 30);
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
        Schema::dropIfExists('tbl_service_item');
    }
}
