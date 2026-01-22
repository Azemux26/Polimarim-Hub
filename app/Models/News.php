<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        'category_id', 
        'title', 
        'slug', 
        'content', 
        'image', 
        'is_published', 
        'published_at'
    ];
    function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
