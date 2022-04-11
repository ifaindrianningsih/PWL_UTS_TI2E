<?php

namespace App\Models\gilang_13;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesinCuci extends Model
{
    use HasFactory;
    protected $table = "mesincuci13"; 
    protected $primaryKey = "kodebarang";

    protected $flliable = [
        'kodebarang',
        'nama',
        'spesifikasi',
        'merk',
        'harga',
    ];
}
