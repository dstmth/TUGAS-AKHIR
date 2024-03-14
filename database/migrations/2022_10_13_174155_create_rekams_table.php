<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('id_pasien')->references('id')->on('pasiens');
            $table->string('nomorantrian');
            $table->date('tanggalperiksa')->nullable();
            $table->string('layanan');
            $table->string('keluhan');
            $table->foreign('id_dokter')->references('id')->on('dokter');
            $table->string('diagnosa')->nullable();
            $table->foreign('id_obat')->references('id')->on('obat')->nullable();
            $table->string('jumlahobat')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('rawat')->nullable();
            $table->string('lamabaru')->nullable();
            $table->string('darah')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('berat')->nullable();
            $table->string('pinggang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekams');
    }
};
