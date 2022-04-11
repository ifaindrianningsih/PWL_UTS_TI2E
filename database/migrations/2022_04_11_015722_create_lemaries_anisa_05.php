<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLemariesAnisa05 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lemaries_anisa_05', function (Blueprint $table) {
            $table->id();
            $table->string('merek', 15);
            $table->string('jenis',15);
            $table->string('warna', 10);
            $table->string('jumlah_pintu', 5);
            $table->string('berat', 5);

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
        Schema::dropIfExists('lemaries_anisa_05');
    }
}
