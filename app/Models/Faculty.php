<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    

    protected $fillable = [
        'name',
        'country',
        'image',
        'is_active',
        'no_urut'
    ];
}
