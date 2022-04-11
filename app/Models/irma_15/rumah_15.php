<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumah_15 extends Model
{
    use HasFactory;
    protected $table = "rumah_irma_15";
    protected $primaryKey = 'pemilik';

    protected $fillable = [
        'alamat',
        'harga',
        'warna',
        'tipe',
    ];
}
