<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'image',
        'is_active',
        'no_urut',
        'description',
        'category',
        'abstract_id'
    ];


    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'faculty_id');
    }

    public function submit_abstracts()
    {
        return $this->hasMany(Submit_Abstracts::class);
    }
}
