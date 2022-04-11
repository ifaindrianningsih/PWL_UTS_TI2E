<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tas_10 extends Seeder
{
    /**
     * Run the database   seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tas')->insert([
            [
                'merkTas' => 'Kalani Bag',
                'harga' => '180000',
                'stok' => '20',
                'kategori' => 'Tas wanita',
                'deskripsi' => 'Warna : Mocca, berat:400gram,Bahan : kulit sintesis'
            ],
[
                'merkTas' => 'Kanara Bag',
                'harga' => '350000',
                'stok' => '20',
                'kategori' => 'Tas wanita',
                'deskripsi' => 'Kondisi: Baru; Warna netral seperti krem, cokelat, hitan; Bahan : kulit sintesis'
            ],
 [
                'merkTas' => 'Tropis Studio',
                'harga' => '500000',
                'stok' => '25',
                'kategori' => 'Tas wanita',
                'deskripsi' => 'Kondisi: Baru; Motif : bunga, daun, dan pepohonan;'
            ],
 [
                'merkTas' => 'Visval',
                'harga' => '399000',
                'stok' => '30',
                'kategori' => 'Tas Pria',
                'deskripsi' => 'Kondisi: Baru; Warna : hitam, coklat ; Bahan : kulit sintesis'
            ],
 [
                'merkTas' => 'Ryden Original',
                'harga' => '385000',
                'stok' => '10',
                'kategori' => 'Tas Pria',
                'deskripsi' => 'Kondisi: Baru; Warna : hitam, coklat ; Kategori: Tas Selempang Pria'
            ]
        ]);
    }
}
