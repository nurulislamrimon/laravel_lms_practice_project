<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // input
    protected $fillable = ['name', 'slug', 'images', 'category_id', 'brand_id', 'description', 'price', 'stock', 'is_active', 'is_featured', 'is_stock', 'on_sale'];

    public $casts = [
        'images' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
