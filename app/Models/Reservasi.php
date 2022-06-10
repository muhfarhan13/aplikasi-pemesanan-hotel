<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';

    protected $fillable = [
        'kamar_id',
        'nama_pemesan',
        'nama_tamu',
        'email',
        'no_handphone',
        'jumlah_kamar',
        'total_harga',
        'tanggal_checkin',
        'tanggal_checkout',
        'status'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
