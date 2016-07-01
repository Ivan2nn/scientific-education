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

    public function isMediaFile() {
        if ($this->attributes['filetype'] == 'mp3' || 
            $this->attributes['filetype'] == 'mpga' || 
            $this->attributes['filetype'] == 'ogg') {
            return true;
        }

        return false;
    }

    public function isTextFile() {
        if ($this->attributes['filetype'] == 'doc' || 
            $this->attributes['filetype'] == 'docx' ||
            $this->attributes['filetype'] == 'txt' ) {

            return true;
        }
        return false;
    }

    public function isAcrobatFile() {
        if ($this->attributes['filetype'] == 'pdf') {
            return true;
        }

        return false;
    }
}
