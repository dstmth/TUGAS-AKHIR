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
        Schema::table('rekams', function (Blueprint $table) {
            $table->date('hari_pertama_haid')->nullable();
            $table->date('hari_terakhir_haid')->nullable();
            $table->date('taksiran_persalinan')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekams', function (Blueprint $table) {
            //
        });
    }
};
