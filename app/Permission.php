<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
