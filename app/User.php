<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function sells()
    {
        return $this->belongsToMany(Sell::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function owns($related)
    {
        return $this->id == $related->user_id;
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
//        return !! $role->intersect($this->roles)->count;
        foreach ($role as $r) {
            if($this->hasRole($r->name)){
                return true;
            }
            else{
                return false;
            }
    }
        }

}
