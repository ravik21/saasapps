<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    protected $fillable = [
        'client_name',
        'company_name',
        'job_title',
        'review',
        'rating',
        'video_link',
        'duration',
    ];
}
