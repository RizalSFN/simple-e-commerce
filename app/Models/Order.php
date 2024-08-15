<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'delivery_id',
        'expedition_id',
        'payment_id',
        'delivery_service_fee',
        'epedition_service_fee',
        'payment_service_fee',
        'sub_total',
        'total_payment',
        'sender_address',
        'destination_address',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function deliveries()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id', 'id');
    }

    public function expeditions()
    {
        return $this->belongsTo(Expedition::class, 'expedition_id', 'id');
    }

    public function payments()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class, 'id', 'order_id');
    }

    public function complains()
    {
        return $this->hasMany(Complain::class, 'id', 'order_id');
    }
}
