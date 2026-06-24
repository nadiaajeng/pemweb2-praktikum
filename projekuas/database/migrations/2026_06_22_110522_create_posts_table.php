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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('brand_id')->constrained()->onDelete('cascade'); // Relasi ke brand
        $table->string('name'); // Ubah yang tadinya 'title' menjadi 'name'
        $table->string('type');
        $table->integer('passenger_capacity');
        $table->string('luggage');
        $table->bigInteger('price_per_day');
        $table->string('image');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
