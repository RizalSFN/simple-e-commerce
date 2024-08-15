<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = 'deliveries';
    protected $fillable = [
        'name',
        'description',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'id', 'delivery_id');
    }
    
}
