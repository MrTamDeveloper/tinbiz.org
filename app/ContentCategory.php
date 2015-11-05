<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    protected $fillable = [
    	'title',
    	'alias',
    	'meta_title',
    	'meta_key',
    	'meta_desc',
    	'description',
    	'parent',
    ];
}
