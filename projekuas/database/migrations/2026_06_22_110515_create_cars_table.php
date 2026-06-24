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
    Schema::create('cars', function (Blueprint $table) {
        $table->id();
        $table->foreignId('brand_id')->constrained()->onDelete('cascade'); 
        $table->string('name');
        $table->string('type'); // MPV, SUV, Sedan
        $table->integer('passenger_capacity');
        $table->string('luggage'); // Sesuai desain lu: "2 Koper"
        $table->integer('price_per_day');
        $table->string('image'); // Syarat: Upload Gambar
        $table->string('label')->nullable(); // Populer, VIP, Ekonomis
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
