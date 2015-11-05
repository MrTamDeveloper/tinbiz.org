<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TourDestination;
use Input;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = Input::all();
        $destination = TourDestination::where('name', '=', $input['slDestination'])->first();
        $jquery = DB::table('tours');
        if($input['slDestination'] != 1) {
            $jquery->whereRaw('(depart_from = ? OR going_to = ?)', [$destination->id,$destination->id]);
        }
        if($input['slDuration'] != -1) {
            $duration = explode('-', $input['slDuration']);
            if($duration['1'] == ">") {
                $jquery->whereRaw('duration > ?', [$duration[0]]);
            }else {
                $jquery->whereBetween('duration', $duration);
            }
        }
        if($input['slPrice'] != -1) {
            $price = explode('-', $input['slPrice']);
            if($price['1'] == ">") {
                $jquery->whereRaw('price > ?', [$price[0]]);
            }else {
                $jquery->whereBetween('price', $price);
            }
        }
        $data = $jquery->where('active',1)->get();
        return view('search.findyourstrip', compact('data'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchAll()
    {
        echo "day la search all nhé";
    }
}
