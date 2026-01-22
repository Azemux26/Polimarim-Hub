<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcment extends Model
{
    protected $fillable = [
        'title', 
        'slug', 
        'description', 
        'author', 
        'start_date', 
        'end_date', 
        'start_time',
        'end_time',
        'location',
        'contact_person',
        'media',
        'theme'
    ];
}
