<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Izinkan semua kolom ini buat diisi mass-assignment
    protected $fillable = [
        'brand_id', 
        'name', 
        'type', 
        'passenger_capacity', 
        'luggage', 
        'price_per_day', 
        'image'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'post_feature');
    }
}