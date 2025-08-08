<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event', 'tanggal_mulai', 'tanggal_selesai', 'lokasi', 'deskripsi'
    ];

    public function penyewas()
    {
        return $this->hasMany(Penyewa::class);
    }
}
