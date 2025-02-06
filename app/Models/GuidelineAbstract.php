<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuidelineAbstract extends Model
{
    
    protected $fillable = [
        'title',
        'category',
        'description',
        'no_urut'
    ];
}
