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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->unsignedBigInteger('id_poli'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->string('telepon');
            $table->string('jadwalpraktek');
            $table->timestamps();

            $table->foreign('id_poli')->references('id')->on('poli'); // Menambahkan foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokters');
    }
};
