<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDestination extends Model
{
    protected $fillable = [
    	'name',
    	'alias',
    	'region',
    	'active'
    ];
}
