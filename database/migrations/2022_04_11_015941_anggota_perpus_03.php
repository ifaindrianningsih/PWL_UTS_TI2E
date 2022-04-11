<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnggotaPerpus03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotaperpus03', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('jk', 10);
	        $table->date('tglLahir');
            $table->string('jurusan', 50);
            $table->string('no_handphone', 15)->unique();
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
        Schema::dropIfExists('anggotaperpus03');
    }
}
