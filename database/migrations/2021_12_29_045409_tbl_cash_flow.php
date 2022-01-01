<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCashFlow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cash_flow', function (Blueprint $table) {
            $table -> id();
            $table -> uuid('id_flow');
            $table -> char('flow', 1); // in - out
            $table -> text('deks');
            $table -> double('total', 30);
            $table -> char('user_effect', 200);
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
        Schema::dropIfExists('tbl_cash_flow');
    }
}
