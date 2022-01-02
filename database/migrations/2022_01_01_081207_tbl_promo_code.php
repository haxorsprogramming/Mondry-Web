<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPromoCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_promo_code', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_code', 60);
            $table -> char('id_branch', 60);
            $table -> char('promo_name', 200);
            $table -> text('deks');
            $table -> char('type', 1); // percent (P) - value (V)
            $table -> double('value');
            $table -> char('quota', 5) -> nullable(); // if unlimited set "UNLIMITED"
            $table -> date('expired_on');
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
        Schema::dropIfExists('tbl_promo_code');
    }
}
