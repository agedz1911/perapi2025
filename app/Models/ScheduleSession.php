<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScheduleSession extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_sesi',
        'title_ses',
        'date',
        'time',
        'room',
        'moderator',
        'panelist'
    ];
    

    public function schedules() : HasMany
    {
       return $this->hasMany(Schedule::class, 'sesi_id');
    }
}
