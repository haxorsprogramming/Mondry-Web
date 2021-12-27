<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPaymentInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_payment_invoice', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_payment', 100);
            $table -> char('id_card', 100);
            $table -> char('username_employee', 100);
            $table -> char('promo_code', 100);
            $table -> integer('total', 50);
            $table -> integer('cash', 50);;
            $table -> integer('disc_price', 50);
            
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
        Schema::dropIfExists('tbl_payment_invoice');
    }
}
