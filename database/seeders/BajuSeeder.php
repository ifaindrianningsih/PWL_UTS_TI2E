<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baju = [
            [
                'nama_baju' => 'Baju Rib Wanita Lengan Panjang',
                'bahan' => 'Rajut',
                'stok' => 127,
                'motif' => 'Polos',
                'warna' => 'Coksu, Army',
                'ukuran' => 'M, L, XL, XXL',
                'harga' => 35000,
            ],
            [
                'nama_baju' => 'Kemeja Wanita',
                'bahan' => 'Katun',
                'stok' => 300,
                'motif' => 'Polos',
                'warna' => 'Putih, Hitam, Coksu',
                'ukuran' => 'S, M, L, XL, XXL',
                'harga' => 31000,
            ],
            [
                'nama_baju' => 'Kaos Pria Lengan Panjang',
                'bahan' => 'Babyterry',
                'stok' => 45,
                'motif' => 'Lainnya',
                'warna' => 'Kuning, Hitam, Grey',
                'ukuran' => 'M, L, XL, XXL',
                'harga' => 45500,
            ],
        ];

        DB::table('baju')->insert($baju);
    }
}
