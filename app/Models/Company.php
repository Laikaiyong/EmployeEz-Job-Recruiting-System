<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Jetstream\HasProfilePhoto;

class Company extends Model
{
    use HasFactory;
    use HasProfilePhoto;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'type', 
        'email', 
        'password',
        'description',
        'url',
        'address',
        'city',
        'state',
        'latitude',
        'longitude'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
