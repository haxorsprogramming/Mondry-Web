<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblExpenditure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_expenditure', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_expenditure', 10);
            $table -> char('id_branch', 80);
            $table -> char('name', 200);
            $table -> text('deks');
            $table -> char('type', 1); //employee salary, electricity, stationery, tax, other
            $table -> double('total', 30);
            $table -> char('user_create', 200);
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
        Schema::dropIfExists('tbl_expenditure');
    }
}
