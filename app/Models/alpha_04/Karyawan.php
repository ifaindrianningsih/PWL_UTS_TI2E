<?php

namespace App\Models\Alpha04;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Karyawan as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent


class Karyawan extends Model
{
    protected $table='karyawan';
    //use HasFactory;
    protected $fillable = [
        'id_karyawan',
        'nama',
        'jabatan_id',
        'jeniskelamin_id',
        'noHP',
        'alamat',
        'email',
        ];

        public function jabatan(){
            return $this->belongsTo(jabatan::class);
        }
}
