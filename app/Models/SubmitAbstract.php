<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubmitAbstract extends Model
{
    protected $fillable = [
        'user_id',
        'presenter_type',
        'presentation_title',
        'session_type',
        'abstract_type',
        'file'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
