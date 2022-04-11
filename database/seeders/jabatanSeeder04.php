<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jabatanSeeder04 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jabatan04 =[
            ['nama_jabatan'=>'Kasir',],
            ['nama_jabatan'=>'sales',],
            ['nama_jabatan'=>'teknisi',],
            ['nama_jabatan'=>'manajer',],
        ];
        DB::table('jeniskelamin')->insert($jabatan04);
    }
}
