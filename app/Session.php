<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
    	'start_year',
    	'end_year',
    	'is_current'
    ];
}
