<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUmum extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_umums';

    protected $fillable = [
        'gambar_fasilitas',
        'keterangan',
        'fasilitas_umum'
    ];
}
