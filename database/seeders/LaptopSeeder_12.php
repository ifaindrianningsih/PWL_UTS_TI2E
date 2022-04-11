<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder_12 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptop = [
            [
                'name' => 'Legion 5',
                'slug' => 'gaming',
                'merk' => 'Lenovo',
                'harga' => 20000000,
                'deskripsi' => 'Laptop Gaming dengan procesor AMD',
                'gambar' => '/laptop/legion.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Asus ZenBook',
                'slug' => 'asus-zenbook',
                'merk' => 'Asus',
                'harga' => 15000000,
                'deskripsi' => 'Asus Zenbook',
                'gambar' => '/laptop/zenbook.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Asus Tuf',
                'slug' => 'asus-tuf',
                'merk' => 'Asus',
                'harga' => 18000000,
                'deskripsi' => 'Asus Tuf Gaming',
                'gambar' => '/laptop/tuf.jpg',
                'category_id' => 1
            ]
        ];
        DB::table('table_laptop_12')->insert($laptop);
    }
}
