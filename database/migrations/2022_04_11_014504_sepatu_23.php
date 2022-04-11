<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sepatu23 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepatu', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 20)->index();
            $table->string('warna', 20);
            $table->integer('ukuran');
            $table->string('jenis', 20);
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
        Schema::dropIfExists('sepatu');
    }
}
