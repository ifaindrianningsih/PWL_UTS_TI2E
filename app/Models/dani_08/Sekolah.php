<?php

namespace App\Models\dani_08;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='sekolah_08'; 
    
    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'notelp',
        'jumlahsiswa',
        'akreditasi',
    ];
}