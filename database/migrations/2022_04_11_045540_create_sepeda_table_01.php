<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepedaTable01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepeda', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->integer('kode_sepeda')->nullabel();
            $table->string('jenis_sepeda', 50);
            $table->string('merk', 30);
            $table->string('ukuran', 50);
            $table->string('warna', 15);
            $table->string('harga', 50);
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
        Schema::dropIfExists('sepeda');
    }
}