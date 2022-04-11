<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolah08Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah_08', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('alamat',100);
            $table->string('email',50);
            $table->string('notelp',13);
            $table->integer('jumlahsiswa');
            $table->string('akreditasi',1);
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
        Schema::dropIfExists('sekolah_08');
    }
}
