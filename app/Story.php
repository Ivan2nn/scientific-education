<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Story extends Model
{
    protected $fillable = array('title','body','published_at','excerpt');

    // We have to follow the convention set+NameOfAttributeCamelCase
	public function setPublishedAtAttribute($date) 
	{
		// So we can add the time, not just he php date
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
