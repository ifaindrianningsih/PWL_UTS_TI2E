<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kendaraan =[
            ['nama' => 'Bus',
            'roda' => '4',
            'nomor' => 'A678',
            'jenis' => 'Kendaraan Umum Darat',
            'tahun' => '2013',
            'merk' => 'Bus Pariwisata',
            'muatan' => '25 orang',
            ],
        ];

        DB::table('kendaraan_umum')->insert($kendaraan);
        //
    }
}
