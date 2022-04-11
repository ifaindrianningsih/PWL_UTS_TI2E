<?php

namespace App\Models\anjani_06;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mebel_06 extends Model
{
    use HasFactory;
    protected $table="mebel_06"; //Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'nama',
        'bahan',
        'jenis',
        'kualitas',
        'harga',
    ];
}
