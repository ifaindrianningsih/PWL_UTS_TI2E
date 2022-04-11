<?php

namespace App\Models\anisa_05;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LemariEs extends Model
{
    use HasFactory;
    protected $table='lemaries_anisa_05'; 
    protected $primaryKey = 'id'; 



    protected $fillable = [ 
        'merek', 
        'jenis', 
        'warna', 
        'jumlah_pintu',
        'berat', 
        ]; 
}
