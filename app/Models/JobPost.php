<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'description',
        'requirement',
        'allowance',
        'duration',
        'type',
        'location',
        'experience_level',
        'user_id',
        'company',
        'industry',
        'beneficial_skills',
        'closing_date',
        'cover_image_url'
    ];
}
