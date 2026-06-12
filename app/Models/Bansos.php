<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    protected $fillable = [
        'name',
        'kategori',
        'nominal',
        'nama_pemberi_bantuan',
        'deskripsi',
        'status',
        'gambar',
    ];
}
