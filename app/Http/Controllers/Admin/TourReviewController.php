<?php

namespace App\Http\Controllers\Admin;

use Input;
use Request;
use Session;
use App\TourReview;
// use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = TourReview::latest('created_at')->get();

        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
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

        TourReview::create($input);

        return redirect()->route('administrator.review.index');
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
        $review = TourReview::findOrFail($id);
        return view('admin.reviews.edit')->withReview($review);
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
        $review = TourReview::findOrFail($id);

        $input = Request::all();

        $review->fill($input)->save();

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
            $review = TourReview::find($id);
            $review->active = $data['active'];
            $review->update();
            echo $data['active'];
        }
    }

    /**
     * Update selected reviews
     *
     * @return \Illuminate\Http\Response
     */
    public function updatereviews()
    {
        // var_dump(Input::get('cbid'));die();
        TourReview::destroy(Input::get('cbid'));
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
        $review = TourReview::findOrFail($id);
        $review->delete();
    }
}
