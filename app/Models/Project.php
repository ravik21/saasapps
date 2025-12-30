<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'client',
        'link',
        'images',
        'technology',
        'logo',
        'start_date',
        'end_date',
        'is_ongoing',
    ];

    protected $casts = [
        'is_ongoing' => 'boolean',
        'images' => 'array',
        'technology' => 'array',
    ];
}
