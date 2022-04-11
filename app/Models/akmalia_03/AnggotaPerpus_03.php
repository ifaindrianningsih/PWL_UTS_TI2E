<?php

namespace App\Models\akmalia_03;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaPerpus_03 extends Model
{
    use HasFactory;

    protected $table="anggotaperpus03"; 
    public $timestamps= false;
    protected $primaryKey ='id';
    
    protected $fillable = [
        'id',
        'nama',
        'jk',
        'tglLahir',
        'jurusan',
        'no_handphone',
        ];
}
