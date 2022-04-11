<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Rumah15Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rumah = [
            [   'pemilik' => 'muhammad',
                'alamat' => 'jakarta',
                'harga' => '15000000',
                'warna' => 'merah',
                'tipe' => '21',
            ],
            [   'pemilik' => 'ikhsan',
                'alamat' => 'pasuruan',
                'harga' => '16000000',
                'warna' => 'hitam',
                'tipe' => '36',
            ],
            [   'pemilik' => 'putri',
                'alamat' => 'bandung',
                'harga' => '17000000',
                'warna' => 'kuning',
                'tipe' => '45',
            ],
        ];
    }
}
