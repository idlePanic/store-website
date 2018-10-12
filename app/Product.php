<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

}
