<?php

namespace App\Models\nazela_23;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepatu_23 extends Model
{
    use HasFactory;

    protected $table = 'sepatu';
    protected $primaryKey = 'id';

    protected $fillable = [
        'merk',
        'warna',
        'ukuran',
        'jenis',
        'harga',
    ];

}
