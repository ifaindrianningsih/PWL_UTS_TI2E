<?php

namespace App\Models\novianawati_24;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table='motor';
    protected $primaryKey = 'Id_motor';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'Id_motor',
        'Kategori',
        'Nama',
        'Detail',
        'Harga',
    ];
}
