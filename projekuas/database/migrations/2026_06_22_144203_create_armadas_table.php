<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('armadas', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('tipe')->nullable(); // Contoh: MPV Premium, Luxury MPV, City Car
    $table->text('deskripsi')->nullable();
    $table->string('gambar')->nullable(); // Tempat simpan path foto dari Filament
    $table->integer('kapasitas_penumpang')->default(5);
    $table->integer('kapasitas_koper')->default(2);
    $table->json('fitur')->nullable(); // Untuk menyimpan fitur tambahan seperti ['AC', 'USB Port']
    $table->integer('harga_per_hari');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armadas');
    }
};
