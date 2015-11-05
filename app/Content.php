<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
    	'title',
    	'alias',
    	'meta_title',
    	'meta_key',
    	'meta_desc',
    	'thumbnail',
    	'summary',
    	'content',
    	'active'
    ];
}
