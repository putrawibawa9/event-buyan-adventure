<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Penyewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id', 'nama_penyewa', 'kontak', 'jenis_barang', 'jumlah'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
