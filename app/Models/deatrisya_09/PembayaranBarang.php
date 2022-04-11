<?php

namespace App\Models\deatrisya_09;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\deatrisya_09\PembayaranBarang

class PembayaranBarang extends Model
{
    use HasFactory;
    protected $table = "pembayaranbarang_table09";
    protected $primaryKey = "id_barang";

    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'harga_satuan',
        'jumlah_barang',
        'total_harga'
    ];
}
