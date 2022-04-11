<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AksesorisPakaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Kancing Kelapa',
                'gambar' => 'https://bit.ly/3KKfraZ',
                'bahan' => 'batok kelapa',
                'harga' => 'Rp 50.000',
                'stok_awal' => '20',
                'stok_akhir' => '5'
            ],
            [
                'nama' => 'Bros Bunga',
                'gambar' => 'https://bit.ly/38tYl2z',
                'bahan' => 'Manik Manik',
                'harga' => 'Rp 40.000',
                'stok_awal' => '10',
                'stok_akhir' => '5'
            ],
        ];
        DB::table('aksesoris_pakaian_28')->insert($data);
    }
}
