<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillaable = [
        'name',
        'service_fee',
        'description'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'id', 'payment_id');
    }
}
