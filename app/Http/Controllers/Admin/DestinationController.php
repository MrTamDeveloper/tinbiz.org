<?php

namespace App\Http\Controllers\Admin;

use Input;
use Request;
use Session;
use App\TourDestination;
// use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = TourDestination::latest('created_at')->get();

        return view('admin.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Request::all();

        TourDestination::create($input);

        return redirect()->action('Admin\DestinationController@index');
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
        $destination = TourDestination::findOrFail($id);
        return view('admin.destination.edit')->withDestination($destination);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $destination = TourDestination::findOrFail($id);

        $input = Request::all();

        $destination->fill($input)->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Ajax Update the specified to be published or unpublished.
     *
     * @return echo out result
     */
    public function setActiveStatus()
    {
        $data = Input::all();
        if(Request::ajax())
        {
            $id = Input::get('id');
            $destination = TourDestination::find($id);
            $destination->active = $data['active'];
            $destination->update();
            echo $data['active'];
        }
    }

    /**
     * Update selected destinations
     *
     * @return \Illuminate\Http\Response
     */
    public function updateDestinations()
    {
        // var_dump(Input::get('cbid'));die();
        TourDestination::destroy(Input::get('cbid'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = TourDestination::findOrFail($id);
        $destination->delete();
    }
}
