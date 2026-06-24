<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            
            // Data mobil
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            
            // Data penyewa
            $table->string('nama_lengkap');
            $table->string('no_whatsapp');
            $table->string('email');
            
            // Info sewa
            $table->date('tanggal_ambil');
            $table->time('jam_ambil');
            $table->date('tanggal_kembali');
            $table->time('jam_kembali');
            $table->integer('durasi_hari');
            $table->string('layanan_tambahan'); // lepas kunci / sopir / sopir+bbm
            
            // Harga
            $table->bigInteger('harga_per_hari');
            $table->bigInteger('total_harga');
            
            // Pembayaran
            $table->enum('metode_pembayaran', ['midtrans', 'transfer_manual'])->nullable();
            $table->enum('status_pembayaran', ['pending', 'paid', 'cancelled'])->default('pending');
            $table->string('bukti_transfer')->nullable(); // untuk transfer manual
            $table->string('midtrans_order_id')->nullable(); // untuk midtrans
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};