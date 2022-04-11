<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKelaminSeeder04 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jeniskelamin04=[
            ['jeniskelamin'=>'Laki-Laki',],
            ['jeniskelamin'=>'Perempuan',],
        ];
        DB::table('jeniskelamin')->insert($jeniskelamin04);
    }
}
