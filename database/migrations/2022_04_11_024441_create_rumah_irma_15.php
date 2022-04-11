<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahIrma15 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah_irma_15', function (Blueprint $table) {
            $table->id();
            $table->string("pemilik", 30);
            $table->string("alamat", 30);
            $table->string("harga", 30);
            $table->string("warna", 10);
            $table->string("tipe", 10);
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
        Schema::dropIfExists('rumah_irma_15');
    }
}
