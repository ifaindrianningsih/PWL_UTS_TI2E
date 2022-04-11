<?php

namespace App\Models\firgi_12;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'table_category_12';
    protected $guarded = ['id'];

    public function laptop(){
        return $this->belongTo(Laptop::class);
    }
}
