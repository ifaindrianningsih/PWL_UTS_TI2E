<?php

namespace App\Models\bella_07;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Tv extends Model
{
    protected $table="tv_table_07"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas

    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nama',
        'merk',
        'tahun',
        'asal',
        'harga',
    ];
}
