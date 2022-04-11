<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder_12 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Gaming',
                'slug' => 'gaming'
            ],
            [
                'name' => 'Ultrabook',
                'slug' => 'ultrabook'
            ]
        ];
        DB::table('table_category_12')->insert($category);
    }
}
