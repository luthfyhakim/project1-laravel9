<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'id',
        'Nama',
        'Jenis_kelamin',
        'Alamat',
        'Mapel',
        'Foto'
    ];
    // protected $guarded = ['id']; // kebalikan dari $fillable
}
