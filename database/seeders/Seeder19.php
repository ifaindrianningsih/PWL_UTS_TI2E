<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Seeder19 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen =[
            [
                'nip' => '1999212290',
                'nama' => 'Mahbub Auliaur Rahman',
                'email' => 'mahbub@gamail.com',
                'jabatan' => 'Dosen',
                'alamat' => 'Pandaan Pasuruan',
                'ttl' => 'Blitar, 2 juni 1999',
            ],
            [
                'nip' => '1999212291',
                'nama' => 'Ahamad Prasetyo Dipl. A.',
                'email' => 'pras@gmail.com',
                'jabatan' => 'Wakil Rektor',
                'alamat' => 'Sumbersari Malang',
                'ttl' => 'Surabaya, 2 maret 1989',
            ],
            [
                'nip' => '1999212293',
                'nama' => 'Bagus Ahmadi S.Kom',
                'email' => 'bagus@gmail.com',
                'jabatan' => 'Dosen',
                'alamat' => 'Gempol Pasuruan',
                'ttl' => 'Malang, 13 April 1996',
            ],
            [
                'nip' => '1999212294',
                'nama' => 'Suhendra Bekti M.Si',
                'email' => 'bekti@gamil.com',
                'jabatan' => 'Administrasi',
                'alamat' => 'Sidayu Gresik',
                'ttl' => 'Situbondo, 5 Agustus 1997',
            ],

        ];

        DB::table('dosen')->insert($dosen);
    }
}
