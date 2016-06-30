<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Material;
use App\Story;
use App\SiteEvent;

class User extends Authenticatable
{
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

    public function role() {
        return $this->belongsTo('App\Role','role_id');
    }

    // User hasRole('manager')
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return $role->intersect($this->roles)->count();
    }

    public function materials()
    {
        return $this->hasMany('Material');
    }

    public function events()
    {
        return $this->hasMany('SiteEvent');
    }

    public function stories()
    {
        return $this->hasMany('Story');
    }

    public function isAdmin()
    {
        foreach ($this->role()->get() as $role)
        {
            if ($role->name == 'administrator')
            {
                return true;
            }
        }

        return false;
    }

    public function isBasic()
    {
        foreach ($this->role()->get() as $role)
        {
            if ($role->name == 'basic')
            {
                return true;
            }
        }

        return false;
    }
}
