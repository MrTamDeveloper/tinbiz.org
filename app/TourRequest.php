<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourRequest extends Model
{
    protected $fillable = [
    	'nationality',
    	'gender',
    	'first_name',
    	'last_name',
    	'email',
    	'phone',
    	'payment_method',
    	'departure_date',
    	'arrival_date',
    	'duration',
    	'arrival_port',
    	'destinations',
    	'adults',
    	'children',
    	'babies',
    	'comment',
    	'hotel_class',
    	'hotel_name',
    	'hotel_room_reference'
    ];
}
