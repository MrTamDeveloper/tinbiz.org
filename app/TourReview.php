<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    protected $fillable = [
    	'title',
    	'nationality',
    	'full_name',
    	'email',
    	'avatar',
    	'review_title',
    	'content',
    	'active'
    ];
}
