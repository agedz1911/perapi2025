<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $fillable = [
        'title',
        'description',
        'flyer',
        'is_active'
    ];
    
    protected $casts = [
        'flyer' => 'array',
    ];
}
