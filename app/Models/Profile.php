<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'nik',
        'title',
        'title_specialist',
        'type',
        'name_on_certificate',
        'institution',
        'address',
        'country',
        'province',
        'city',
        'postal_code',
        'phone_number'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
