<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMebel06 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mebel_06', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bahan'); //dari bahan kayu, plastik, alumunium, besi
            $table->string('jenis'); //furnitur Rumah, Kantor, Rumah Sakit, Sekolah
            $table->string('kualitas'); //premium, rendah
            $table->string('harga');
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
        Schema::dropIfExists('mebel_06');
    }
}
