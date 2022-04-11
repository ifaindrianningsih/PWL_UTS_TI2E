<?php

namespace App\Models\shintya_28;

use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AksesorisPakaian28 extends Model
{
    use HasFactory;
    protected $table="aksesoris_pakaian_28"; 
    public $timestamps= false; 
    protected $primaryKey = 'id'; 
 
    protected $fillable = [
        'nama',
        'gambar',
        'bahan',
        'harga',
        'stok_awal',
        'stook_akhir',
    ];
}
