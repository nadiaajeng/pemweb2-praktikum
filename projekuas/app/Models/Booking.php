<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'post_id',
        'nama_lengkap',
        'no_whatsapp',
        'email',
        'tanggal_ambil',
        'jam_ambil',
        'tanggal_kembali',
        'jam_kembali',
        'durasi_hari',
        'layanan_tambahan',
        'harga_per_hari',
        'total_harga',
        'metode_pembayaran',
        'status_pembayaran',
        'bukti_transfer',
        'midtrans_order_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}