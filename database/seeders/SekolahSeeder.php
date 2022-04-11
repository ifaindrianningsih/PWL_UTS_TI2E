<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolah_08')->insert([
            [
                'nama'=>'SMA N 1 KEJAYAN',
                'alamat'=>'jl. kejayan no 02 kabupaten pasuruan',
                'email'=>'sma1kejayan@gmail.com',
                'notelp'=>'085666778844',
                'jumlahsiswa'=>200,
                'akreditasi'=>'A',
            ],
            [
                'nama'=>'SMAN 1 Gondangwetan',
                'alamat'=>'jl. gondangwetan no 01 kabupaten pasuruan',
                'email'=>'sma1kejayan@gmail.com',
                'notelp'=>'085666778844',
                'jumlahsiswa'=>200,
                'akreditasi'=>'A',
            ],
            [
                'nama'=>'SMAN 1 Kota Pasuruan',
                'alamat'=>' Jl Mangga Dua Raya ITC Mangga Dua Bl B/46 Lt Dasar, Dki Jakarta',
                'email'=>'sma1kejayan@gmail.com',
                'notelp'=>'085666778844',
                'jumlahsiswa'=>200,
                'akreditasi'=>'A',
            ],
            [
                'nama'=>'SMAN 2 Kota Pasuruan',
                'alamat'=>'Jl P Jayakarta 66 Bl A/12, Dki Jakarta',
                'email'=>'sma1kejayan@gmail.com',
                'notelp'=>'085666774455',
                'jumlahsiswa'=>200,
                'akreditasi'=>'A',
            ],
            
        ]);
    }
}
