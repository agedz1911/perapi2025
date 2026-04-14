<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class submit_abstracts extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_id',
        'title',
        'abstract',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
