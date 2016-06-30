<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class SiteEvent extends Model
{
    protected $fillable = array('title','body','published_at','event_date');

    protected $dates = ['event_date'];
    // We have to follow the convention set+NameOfAttributeCamelCase
	public function setPublishedAtAttribute($date) 
    {
        // So we can add the time, not just he php date
        $this->attributes['published_at'] = Carbon::createFromFormat('d-m-Y', $date);
    }

    public function setEventDateAttribute($event_date)
    {
        $this->attributes['event_date'] = Carbon::createFromFormat('d-m-Y', $event_date);
    }

    public function getPublishedAtAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['published_at']));
    }

    public function getExcerptAttribute()
    {
        if ($this->attribute['excerpt'] == null) {
            return substr($this->attributes['body'],0,14) . '...';
        }
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
