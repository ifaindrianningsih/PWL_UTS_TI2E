<?php

namespace App\Models\afvanie_01;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Sepeda extends Model
{
    protected $table="sepeda"; // Eloquent akan membuat model sepeda menyimpan record di tabel sepedas
    public $timestamps= false;
    protected $primaryKey = 'kode_sepeda'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'kode_sepeda',
        'jenis_sepeda',
        'merk',
        'ukuran',
        'warna',
        'harga',
    ];
}