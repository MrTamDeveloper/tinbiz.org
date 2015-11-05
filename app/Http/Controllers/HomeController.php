<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TourDestination;
use App\TourReview;
use App\Tour;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['tours']          = Tour::select('alias','name','duration')->latest('created_at')->where('day_tour', 0)->published()->take(6)->get();
        $data['day_tours']      = Tour::select('alias','name')->latest('created_at')->where('day_tour', 1)->published()->take(12)->get();
        $data['destinations']   = TourDestination::where('active', 1)->orderBy('name','ASC')->get();
        $data['reviews']        = TourReview::latest('created_at')->where('active', 1)->take(4)->get();
        $data['title']          = "Vietnam Tours - Planning tours to Vietnam with the best offers";
        $data['description']    = "Book travel for less with specials on cheap airline tickets, hotels, car rentals, and flights on TraveloVietnam.com, your one-stop resource for travel and vacation needs";
        $data['keywords']       = "vietnam travel, travel to vietnam, vietnam tours, tours in vietnam, vietnam hotels, hotels in vietnam, vietnam visa, visa to vietnam";
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
