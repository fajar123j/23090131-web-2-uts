<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    // Menambahkan properti $fillable
    protected $fillable = [
        'name', 'slug', 'description', 'sku', 'price', 'stock', 'product_category_id', 'is_active', 'image_url'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'product_category_id');
    }
}