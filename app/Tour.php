<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    	'name',
    	'alias',
    	'meta_title',
    	'meta_key',
    	'meta_desc',
    	'thumbnail',
    	'map',
    	'depart_from',
    	'going_to',
    	'duration',
    	'destinations',
    	'original_price',
    	'price',
    	'start',
    	'finish',
        'description',
    	'summary',
    	'content',
    	'day_tour',
    	'throughout',
    	'popular_tour',
    	'active',
    	'photos',
        'day_tour_start_time'
    ];

    /**
     * Scope a query to only include active tours.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('active', 1);
    }
}
