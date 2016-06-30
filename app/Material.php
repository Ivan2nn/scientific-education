<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Material extends Model
{
    protected $fillable = array('title','file','published_at','description');

    protected $dates = ['published_at'];
    // We have to follow the convention set+NameOfAttributeCamelCase
	public function setPublishedAtAttribute($date) 
	{
		// So we can add the time, not just he php date
		$this->attributes['published_at'] = Carbon::createFromFormat('d-m-Y', $date);
	}

    /*
    public function getPublishedAtAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['published_at']));
    }*/

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
