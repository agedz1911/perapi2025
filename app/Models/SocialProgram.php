<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'url',
        'image',
        'description',
        'is_active'
    ];
}
