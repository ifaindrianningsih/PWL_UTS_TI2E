<?php

namespace App\Models\mahbub_19;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model19 extends Model
{
    use HasFactory;
    protected $table = 'dosen';//Eloquent akan membuat model mahasiswa menimpan record di tabel mahasiswa
    protected $primaryKey='nip';//Memanggil isi DB dengan primary key
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'jabatan',
        'alamat',
        'ttl',
    ];
}
