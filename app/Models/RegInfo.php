<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegInfo extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'no_urut',
        'is_active'
    ];
}
