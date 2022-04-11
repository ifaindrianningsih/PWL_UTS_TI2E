<?php

namespace App\Models\novitasari_25;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table='mobil';
    protected $primaryKey = 'id_mobil';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'id_mobil',
    'nama',
    'harga',
    'spesifikasi',
    'kelebihan',
    'kekurangan',
    ];
}
