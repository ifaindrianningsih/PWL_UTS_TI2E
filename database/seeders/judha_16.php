<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class judha_16 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {
            DB::table('table_jamtangan_16')->insert([
                'nama' => $faker->firstName(),
                'harga' => $faker->numerify('#####'),
                'merk' => $faker->lastName(),
                'category' => $faker->name(),
                'type' => $faker->name(),
                'stok' => $faker->numerify('####'),
            ]);
        }
    }
}
