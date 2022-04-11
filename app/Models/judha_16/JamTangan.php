<?php

namespace App\Models\judha_16;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamTangan extends Model
{
    use HasFactory;

    protected $table = 'table_jamtangan_16';

    protected $fillable = [
        'nama',
        'harga',
        'merk',
        'category',
        'type',
        'stok'
    ];
}
