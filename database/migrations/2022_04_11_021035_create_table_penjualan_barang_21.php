<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenjualanBarang21 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_barang_21', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->date('tanggal_penjualan');
            $table->string('nama_pelanggan');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->string('supplier');
            $table->string('keterangan');
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
        Schema::dropIfExists('table_penjualan_barang_21');
    }
}
