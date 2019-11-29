<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjadwalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjadwalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sawah');
            $table->string('kegiatan');
            $table->string('tanggal');
            $table->string('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjadwalan');
    }
}
