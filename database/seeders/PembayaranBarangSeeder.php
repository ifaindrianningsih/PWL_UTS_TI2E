<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'nama_barang' => 'Celana Panjang',
                'jenis_barang' => 'Celana Jeans',
                'harga_satuan' => 50000,
                'jumlah_barang' => 2,
                'total_harga' => 100000
            ],
        ];
        DB::table('pembayaranbarang_table09')->insert($barang);
    }
}
