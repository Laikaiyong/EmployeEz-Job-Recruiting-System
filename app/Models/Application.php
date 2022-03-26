<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'resume',
        'jobpostid',
        'jobpost_type',
        'jobpost_title',
        'jobpost_cover',
        'jobpost_location',
        'jobpost_industry',
        'company_id',
        'company_name',
        'user_id',
        'user_name',
        'additional_comments'
    ];
}
