<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidMail extends Model
{
    protected $fillable = array('email', 'fullname');
}
