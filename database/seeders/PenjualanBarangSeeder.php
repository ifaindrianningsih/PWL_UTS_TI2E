<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjualan_barang_21')->insert([
            [
                'nama_barang'=>'Laptop',
                'tanggal_penjualan'=>'2020-01-01',
                'nama_pelanggan'=>'Restu Habibi Com',
                'jumlah'=>20,
                'harga'=>5000000,
                'supplier'=>'CV. Singajaya',
                'keterangan'=> 'Lunas',

            ],
        ]);
    }
}
