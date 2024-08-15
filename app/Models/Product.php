<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'stok',
        'description',
        'price',
        'photo',
        'seller_id',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }

    public function product_reviews()
    {
        return $this->hasMany(ProductReview::class, 'id', 'product_id');
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class, 'id', 'product_id');
    }

    public function best_products()
    {
        return $this->hasMany(BestProduct::class, 'id', 'product_id');
    }
}
