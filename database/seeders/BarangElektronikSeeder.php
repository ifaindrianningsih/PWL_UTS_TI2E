<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangElektronikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_elektroniks')->insert([
            [
                'nama_barang' => 'Laptop',
                'foto' => 'laptop.jpg',
                'merk' => 'Lenovo',
                'warna' => 'Hitam',
                'ukuran' => '15.6 Inch',
                'harga' => 11500000,
                'stok' => '10',
            ],
            [
                'nama_barang' => 'Blender',
                'foto' => 'blender.jpg',
                'merk' => 'philips',
                'warna' => 'Putih',
                'ukuran' => '2 Liter',
                'harga' => 1250000,
                'stok' => '5',
            ],
            [
                'nama_barang' => 'TV',
                'foto' => 'tv.jpg',
                'merk' => 'LG',
                'warna' => 'Hitam',
                'ukuran' => '32 Inch',
                'harga' => 2500000,
                'stok' => '10',
            ],
            [
                'nama_barang' => 'Kulkas',
                'foto' => 'kulkas.jpg',
                'merk' => 'LG',
                'warna' => 'Hitam',
                'ukuran' => '2 pintu',
                'harga' => 2500000,
                'stok' => '10',
            ],
            [
                'nama_barang' => 'AC',
                'foto' => 'ac.jpg',
                'merk' => 'Panasonic',
                'warna' => 'Putih',
                'ukuran' => '1pk',
                'harga' => 2500000,
                'stok' => '10',
            ]
        ]);
    }
}
