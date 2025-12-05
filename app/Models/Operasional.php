<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operasional extends Model
{
    protected $fillable = [
        'kategori',
        'petugas',
        'lokasi',
        'tanggal',
        'keterangan'
    ];
}