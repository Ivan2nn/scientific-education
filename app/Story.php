<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Story extends Model
{
    protected $fillable = array('title','body','published_at','story_date');

    // We have to follow the convention set+NameOfAttributeCamelCase
	public function setPublishedAtAttribute($date) 
    {
        // So we can add the time, not just he php date
        $this->attributes['published_at'] = Carbon::createFromFormat('d-m-Y', $date);
    }

    public function setStoryDateAttribute($event_date)
    {
        $this->attributes['story_date'] = Carbon::createFromFormat('d-m-Y', $event_date);
    }

    public function getPublishedAtAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['published_at']));
    }

    public function getStoryDateAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['story_date']));
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
