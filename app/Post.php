<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable =['title', 'image', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tag(): BelongsToMany
        {
            return $this->belongsToMany(Tag::class);
        }
    
}