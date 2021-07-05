<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'thumb_path',
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
