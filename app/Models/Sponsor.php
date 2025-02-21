<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    
    protected $fillable = [
        'company',
        'logo',
        'website',
        'category',
        'is_active',
        'no_urut',
        'company_profile'
    ];
}
