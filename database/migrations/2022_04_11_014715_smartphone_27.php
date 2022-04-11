<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Smartphone27 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphone', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 20)->index();
            $table->string('tipe', 50)->index();
            $table->string('warna', 10);
            $table->string('kapasitas', 20);
            $table->string('sistem_operasi', 20);
            $table->string('ukuran_layar', 20);
            $table->string('berat', 20);
            $table->string('resolusi_kamera', 20);
            $table->string('harga', 20);
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
        Schema::dropIfExists('smartphone');
    }
     
}
