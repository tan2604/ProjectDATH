<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 'name', 'slug', 'description', 'price', 'sku', 'featured'
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
