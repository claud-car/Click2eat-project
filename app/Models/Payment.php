<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'payment_information',
        'amount',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
