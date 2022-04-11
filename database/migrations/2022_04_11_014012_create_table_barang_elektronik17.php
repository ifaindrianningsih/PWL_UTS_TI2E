<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarangElektronik17 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_elektroniks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('foto')->nullable();
            $table->string('merk');
            $table->string('warna');
            $table->string('ukuran');
            $table->integer('harga');
            $table->integer('stok');
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
        Schema::dropIfExists('barang_elektroniks');
    }
}
