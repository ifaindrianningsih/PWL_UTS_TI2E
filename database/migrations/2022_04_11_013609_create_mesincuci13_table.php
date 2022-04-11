<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesincuci13Table extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesincuci13', function (Blueprint $table) {
            $table->id();
            $table->integer('kodebarang')->unique();
            $table->string('nama',100);
            $table->string('spesifikasi',100);
            $table->string('merk',100);
            $table->double('harga');
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
        Schema::dropIfExists('mesincuci13');
    }
}
