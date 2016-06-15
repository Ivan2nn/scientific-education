<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = ['name','label'];

    public function permissions() 
    {
    	return $this->belongsToMany('App\Permission');
    }

   public function givesPermissionTo(Permission $permission)
   {
   		return $this->permissions()->save($permission);
   }

   public function users() 
   {
   		return $this->hasMany('App\User');
   }
}
