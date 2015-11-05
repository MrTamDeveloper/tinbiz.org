<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Config;
use App\TourDestination;
use App\TourRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = TourDestination::where('active', 1)->get();
        return view('tour_request.index')->withDestinations($destinations);
    }

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
        // Format destinations to json
        $input['destinations'] = json_encode($input['destinations']);
        // Format hotel room refernce for saving
        $single = $input['single'];
        $double = $input['double'];
        $twin = $input['twin'];
        $triple = $input['triple'];
        $input['hotel_room_reference'] = json_encode(compact('single', 'double', 'twin', 'triple'));
        TourRequest::create($input);

        // Send email to customer
        Mail::send('email.request', $input, function ($message) use ($input) {

            $message->from('akjra.vu@gmail.com', 'Akjra Vu');

            $message->to($input['email'])->subject(Config::get('myconfig.SITE_NAME').' - Customized tour!');

        });

        Session::flash('request_message', 'Your request has been sent successfully. Thank you!');

        return redirect()->back();
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
