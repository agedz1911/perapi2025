<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'hotel_name',
        'distance',
        'hotel_star',
        'idr_price',
        'usd_price',
        'url',
        'image',
        'tag',
        'no_urut',
        'is_active',
        'direction'
    ];
}
