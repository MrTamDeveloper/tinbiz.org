<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    protected $fillable = [
    	'tour_id',
    	'tour_name',
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
    	'day_tour',
    	'comment',
    	'hotel_class',
    	'hotel_name',
    	'hotel_room_reference',
    	'total_deposit'
    ];
}
