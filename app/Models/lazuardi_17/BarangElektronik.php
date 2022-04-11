<?php

namespace App\Models\lazuardi_17;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangElektronik extends Model
{
    use HasFactory;
    protected $table = 'barang_elektroniks';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // public function getRouteKeyName()
    // {
    //     return 'id';
    // }
}
