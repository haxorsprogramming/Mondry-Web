<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTimeline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_timeline', function (Blueprint $table) {
            $table -> id();
            $table -> uuid('id_timeline');
            $table -> char('username', 100);
            $table -> char('event', 100); 
            $table -> text('deks');
            $table -> timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_timeline');
    }
}
