<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KepalaRumah extends Model
{
    protected $fillable = [
        'name',
        'nik',
        'phone',
        'jml_anggota',
        'pekerjaan',
        'tgl_lhr',
        'jenkel',
        'status',
        'image',
        'email',
        'password',
    ];
}
