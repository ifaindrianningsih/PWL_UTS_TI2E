<?php

namespace App\Models\della_10;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tas_10 extends Model
{
    use HasFactory;
    protected $table = "tas"; // Della Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'id',
        'merkTas',
        'harga',
        'stok', 
        'kategori', 
        'deskripsi'
    ];
}
