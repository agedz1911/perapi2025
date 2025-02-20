<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'category_reg',
        'wilayah_reg',
        'title',
        'early_bird_reg',
        'normal_reg',
        'onsite_reg',
        'is_Active'
    ];
}
