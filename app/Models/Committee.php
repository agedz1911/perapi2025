<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    
    protected $fillable = [
        'name',
        'title',
        'category',
        'image',
        'no_urut',
        'is_active'
    ];
}
