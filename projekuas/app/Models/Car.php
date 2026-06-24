<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Car extends Model
{
    protected $table = 'posts';
    
    protected $fillable = ['brand_id', 'name', 'type', 'passenger_capacity', 'luggage', 'price_per_day', 'image', 'label'];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function features() {
        return $this->belongsToMany(Feature::class);
    }
}