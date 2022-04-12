<?php

namespace App\Models\ifa_14;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;
    protected $table='baju'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'id_baju'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
    'nama_baju',
    'bahan',
    'stok',
    'motif',
    'warna',
    'ukuran',
    'harga',
    ];
}
