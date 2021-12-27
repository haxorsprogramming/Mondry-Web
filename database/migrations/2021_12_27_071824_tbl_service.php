<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_item_card', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_item', 100);
            $table -> char('id_card', 100);
            $table -> char('id_service', 100);
            $table -> integer('qt');
            $table -> integer('price_at', 50);
            $table -> integer('total', 50);
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
        Schema::dropIfExists('tbl_item_card');
    }
}
