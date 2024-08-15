<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestProduct extends Model
{
    use HasFactory;

    protected $table = 'best_products';
    protected $fillable = [
        'product_id',
        'status'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
