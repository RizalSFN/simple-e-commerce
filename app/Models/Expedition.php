<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    use HasFactory;

    protected $table = 'expeditions';
    protected $fillable = [
        'name',
        'rate',
        'desccription'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'id', 'expedition_id');
    }
}
