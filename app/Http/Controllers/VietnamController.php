<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourDestination;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class VietnamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::latest('created_at')->published()->get();
        return view('vietnam.index', compact('tours'));
    }

    /**
     * Display tour detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($alias)
    {
        $tour = Tour::where( 'alias', $alias )->first();
        $arr = [$tour->depart_from, $tour->going_to];
        $related_tours = Tour::whereRaw('(going_to IN (?) OR depart_from IN (?))', [implode(',', $arr), implode(',', $arr)] )
                             ->where('id' ,'<>', $tour->id)
                             ->published()->distinct()->get();
        
        $data = [];
        $data['title']          = $tour['name'];
        $data['keywords']       = $tour['meta_key'];
        $data['description']    = $tour['meta_desc'];
        $data['tour']           = $tour;
        $data['related_tours']  = $related_tours;
        
        return view('vietnam.detail', $data);
    }

    /**
     * Display tour detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function day_tour()
    {
        $tours = Tour::where('day_tour',1)->latest('created_at')->get();
        return view('vietnam.daytour.index', compact('tours'));
    }


    /**
     * Display tour detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function day_tour_detail($alias)
    {
        $tour = Tour::where( 'alias', $alias )->first();
        $arr = [$tour->depart_from, $tour->going_to];
        $related_tours = Tour::where('day_tour', 1)
                              ->whereRaw('(going_to IN (?) OR depart_from IN (?))', [implode(',', $arr), implode(',', $arr)] )
                              ->where('id' ,'<>', $tour->id)
                              ->published()->distinct()->get();
        $data = [];
        $data['title']          = $tour['name'];
        $data['keywords']       = $tour['meta_key'];
        $data['description']    = $tour['meta_desc'];
        $data['tour']           = $tour;
        $data['related_tours']  = $related_tours;
        return view('vietnam.daytour.detail', $data);
    }


    /**
     * Show the tours page filter by destination.
     *
     * @return \Illuminate\Http\Response
     */
    public function destination($destination)
    {
        $region = ['northern', 'southern', 'central'];

        if (in_array($destination, $region)) {
            $destinations = TourDestination::where('region', '=' , ucfirst($destination).' Vietnam')->get();
            $des_array = [];

            foreach ($destinations as $des) {
                array_push($des_array, $des->id);
            }

            $tours = Tour::whereIn('going_to', $des_array)
                           ->orWhereIn('depart_from', $des_array)->published()->get();
            return view('vietnam.destination', ['tours' => $tours, 'destination' => ucfirst($destination).' Vietnam']);
        } else {
            $destination = TourDestination::where('alias', '=', $destination)->first();

            if ($destination) {
                $tours = Tour::where('going_to', $destination->id)->orWhere('depart_from', $destination->id)->published()->get();
                return view('vietnam.destination', ['tours' => $tours, 'destination' => $destination->name]);
            }
        }

    }

    /**
     * Show the tours page filter by duration.
     *
     * @return \Illuminate\Http\Response
     */
    public function duration($duration)
    {
        // Get number from input string
        $duration = preg_replace("/[^0-9]/","",$duration);

        $tours = Tour::where('duration', '=', $duration)->published()->get();

        return view('vietnam.duration', ['tours' => $tours, 'duration' => $duration]);
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
