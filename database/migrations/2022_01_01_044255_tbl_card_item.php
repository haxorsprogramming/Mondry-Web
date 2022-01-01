<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCardItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_card_item', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_card', 60);
            $table -> char('id_service_item', 60);
            $table -> double('price_at');
            $table -> integer('qt');
            $table -> double('total');
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
        Schema::dropIfExists('tbl_card_item');
    }
}
