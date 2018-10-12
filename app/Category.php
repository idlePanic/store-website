<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
