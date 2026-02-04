<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormCoi extends Model
{

    protected $fillable = [
        'name',
        'institution',
        'email',
        'presentation_titles',
        'no_conflict',
        'has_conflict',
        'conflict_description',
        'have_consultant',
        'have_research_grant',
        'have_speaker_honorarium',
        'have_ownership',
    ];

    protected $casts = [
        'presentation_titles' => 'array', // Cast JSON ke array
        'no_conflict' => 'boolean',
        'has_conflict' => 'boolean',
    ];
}
