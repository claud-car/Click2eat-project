<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'customer_name',
        'customer_surname',
        'customer_address',
        'phone_number',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function plates()
    {
        return $this->belongsToMany(Payment::plate);
    }
}
