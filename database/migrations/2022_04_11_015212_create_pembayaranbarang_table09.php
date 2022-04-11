<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranbarangTable09 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaranbarang_table09', function (Blueprint $table) {
            $table->bigInteger('id_barang')->autoIncrement();
            $table->string('nama_barang',255);
            $table->string('jenis_barang',255);
            $table->double('harga_satuan');
            $table->integer('jumlah_barang');
            $table->double('total_harga');
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
        Schema::dropIfExists('pembayaranbarang_table09');
    }
}
