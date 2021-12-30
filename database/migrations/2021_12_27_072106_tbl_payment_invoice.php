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
            $table -> char('invoice_no', 100);
            $table -> char('id_card', 100);
            $table -> char('username_employee', 100);
            $table -> char('promo_code', 100);
            $table -> double('total', 30);
            $table -> double('cash', 30);
            $table -> double('disc_price', 30);
            $table -> char('status_payment', 100);
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
