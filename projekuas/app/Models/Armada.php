<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    // Masukkan semua nama kolom baru lu ke sini biar diizinkan masuk ke database
    protected $fillable = [
        'nama',
        'tipe',
        'deskripsi',
        'gambar',
        'kapasitas_penumpang',
        'kapasitas_koper',
        'fitur',
        'harga_per_hari',
    ];

    // Beritahu Laravel kalau kolom 'fitur' adalah tipe array/json
    protected $casts = [
        'fitur' => 'array',
    ];
}