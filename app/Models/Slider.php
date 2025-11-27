<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'date_event',
        'theme_event',
        'venue',
        'description',
        'logo',
        'is_active',
    ];
    
}
