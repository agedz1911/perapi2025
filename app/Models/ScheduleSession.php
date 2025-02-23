<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScheduleSession extends Model
{
    
    protected $fillable = [
        'category_sesi',
        'title_ses',
        'date',
        'time',
        'room',
        'moderator',
        'panelist'
    ];
    

    public function schedules() 
    {
       return $this->hasMany(Schedule::class, 'id');
    }
}
