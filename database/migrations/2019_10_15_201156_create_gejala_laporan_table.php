<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGejalaLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gejala_laporan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gejala_id')->nullable();
            $table->unsignedBigInteger('laporan_id')->nullable();
            $table->timestamps();
        });

        Schema::table('gejala_laporan', function (Blueprint $table) {

            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
            $table->foreign('laporan_id')->references('id')->on('laporans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gejala_laporan');
    }
}
