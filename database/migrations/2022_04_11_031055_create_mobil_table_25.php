<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilTable25 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil_table_25', function (Blueprint $table) {
            $table->id('id_mobil');
            $table->id('id_mobil', 20);
            $table->string('nama', 25);
            $table->string('harga', 30);
            $table->string('spesifikasi', 100);
            $table->string('kelebihan', 100);
            $table->string('kekurangan', 100);
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
        Schema::dropIfExists('mobil_table_25');
    }
}
