<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Facedes\DB;


class ProdukMakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ProdukMakananSeeder_10')->insert([
            [
               'id_produk' => '111111',
               'merk' => 'EcoSpinach',
               'harga' => 'Rp 25000',
               'jenis' => 'Healty Food',
            ],
            [
                'id_produk' => '222222',
                'merk' => 'Meatly',
                'harga' => 'Rp 150000',
                'jenis' => 'Protein Food',
             ],
             [
                'id_produk' => '333333',
                'merk' => 'Eggnaster',
                'harga' => 'Rp 22000',
                'jenis' => 'Protein Food',
             ],
             [
                'id_produk' => '444444',
                'merk' => 'Fagethi',
                'harga' => 'Rp 55000',
                'jenis' => 'Noodles',
             ],
        ]);
    }
}
