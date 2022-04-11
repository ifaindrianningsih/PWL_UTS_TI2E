<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tas10 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tas', function (Blueprint $table) {
            $table->id();
            $table->string('merkTas',50);
            $table->integer('harga');
            $table->integer('stok');
	        $table->string('kategori',20);
            $table->text('deskripsi');
            $table->timestamps();
            });
    }

    /**
     * Reverse t  he migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tas');
    }
}
