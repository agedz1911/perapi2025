<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtGlance extends Model
{
    use HasFactory;

    public function time()
    {
        return $this->belongsTo(Time::class, 'time_id');
    }
}
