<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Config;
use App\TourBooking;
use App\Tour;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function step2( $alias ) {
        $tour = Tour::where('alias', $alias)->firstOrFail();
        if ($tour) {
            return view('booking.step2', ['tour' => $tour]);
        }
        return redirect('/');
    }

    /*public function step3() {
        $tour = Tour::where('alias', $alias)->firstOrFail();
        if ($tour) {
            return view('booking.step3', ['tour' => $tour]);
        }
        return redirect('/');
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // Format phone number. Ex: (+84) 909787874
        $input['phone'] = '('.$input['phoneCode'].')'.$input['phone'];
        // Format date for database insert
        $input['arrival_date'] = date('Y-m-d', strtotime($input['arrival_date']));
        $input['departure_date'] = date('Y-m-d', strtotime($input['departure_date']));
        // Format hotel room refernce for saving
        $single = $input['single'];
        $double = $input['double'];
        $twin = $input['twin'];
        $triple = $input['triple'];
        $input['hotel_room_reference'] = json_encode(compact('single', 'double', 'twin', 'triple'));
        $booking = TourBooking::create($input);

        // Send email to customer
        Mail::send('email.booking', $input, function ($message) use ($input) {

            $message->from('akjra.vu@gmail.com', 'Akjra Vu');

            $message->to($input['email'])->subject(Config::get('myconfig.SITE_NAME').' - Booking!');

        });

        Session::flash('request_message', 'Your request has been sent successfully. Thank you!');

        $booking = TourBooking::findOrFail($booking->id);
        // hard code alias for testing
        return view('booking.step3', ['booking' => $booking, 'tour' => Tour::find($input['tour_id'])]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
