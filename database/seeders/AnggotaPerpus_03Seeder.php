<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaPerpus_03Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotaperpus03')->insert([
            [
                'id' => '1041720224',
                'nama' => 'Dimas Anggara',
		        'jk' => 'Laki-Laki',
                'tglLahir' => '2002-12-08',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '085671234567'
            ],
            [
                'id' => '1041720225',
                'nama' => 'Sekar Sari',
		        'jk' => 'Perempuan',
                'tglLahir' => '2002-11-06',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '085671234566'
            ]
        ]);
    }
}
