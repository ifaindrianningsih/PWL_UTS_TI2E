<?php

namespace App\Models\firgi_12;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'table_laptop_12';
    protected $guarded = ['id'];

    public function category(){
        return $this->hasMany(Category::class);
    }
}
