<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportantDate extends Model
{
    
    protected $fillable = [
        'title',
        'date',
        'date_end',
        'no_urut',
        'is_active'
    ];
}
