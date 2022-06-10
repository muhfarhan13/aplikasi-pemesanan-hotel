<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';

    protected $fillable = [
        'tipe',
        'jumlah_kamar',
        'harga_kamar',
        'gambar_kamar'
    ];

    public function fasilitasKamar()
    {
        return $this->hasMany(FasilitasKamar::class);
    }

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }
}
