<?php

namespace App\Models\salwa_27;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone_27 extends Model
{
    use HasFactory;
    protected $table = 'smartphone';
    protected $primaryKey = 'id';

    protected $fillable = [
        'merk',
        'tipe',
        'warna',
        'kapasitas',
        'sistem_operasi',
        'ukuran_layar',
        'berat',
        'resolusi_kamera',
        'harga',
    ];
    
}



