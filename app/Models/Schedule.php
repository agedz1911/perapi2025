<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    
    protected $fillable = [
        'time',
        'title',
        'panelist',
        'sesi_id'
    ];

    public function sesi() : BelongsTo
    {
        return $this->belongsTo(ScheduleSession::class, 'sesi_id');
    }
}
