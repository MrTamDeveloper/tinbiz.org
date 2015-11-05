<?php

namespace App\Http\Controllers\Admin;

use Request;
// use Illuminate\Http\Request;
use Input;
use Session;
use App\Tour;
use App\TourDestination;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::latest('created_at')->get();
        $destinations = TourDestination::orderBy('name')->where('active','1')->get();
        return view('admin.tours.index', ['tours' => $tours, 'destinations' => $destinations]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = TourDestination::orderBy('name')->where('active','1')->get();
        return view('admin.tours.new', compact('destinations'));
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
        if(empty($input['alias'])) {
            $input['alias'] = genTopicAlias($input['name']);
            $data = Tour::where('alias', $input['alias'])->first();
            if(!empty($data)) {
                $input['alias'] = create_permalink($input['alias']);
            }
        }else {
            $data = Tour::where('alias', $input['alias'])->first();
            if(!empty($data)) {
                $input['alias'] = create_permalink($input['alias']);
            }
        }
        $photos = [];
        if(!empty($input['photo'])) {
            $temp = count($input['photo']);
            for ($i=0; $i < $temp ; $i++) {
                $photos[] = [
                    'src'   => $input['photo'][$i],
                    'title' => $input['title_img'][$i],
                    'desc'  => $input['desc_img'][$i]
                ];
            }
            $input['photos'] = json_encode($photos);
        }
        $input['destinations'] = destination_encode($input['destinations']);
        Tour::create($input);
        return redirect()->action('Admin\TourController@index');
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
        $tour = Tour::findOrFail($id);
        $destinations = TourDestination::orderBy('name')->where('active','1')->get();
        return view('admin.tours.edit', ['tour' => $tour, 'destinations' => $destinations]);
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
        $tour = Tour::findOrFail($id);

        $input = Request::all();
        $data = Tour::whereRaw('alias = ? AND id != ?', [$input['alias'],$id])->first();

        if(!empty($data)) {
            $input['alias'] = create_permalink($input['alias']);
        }
        $photos = [];
        if(!empty($input['photo'])) {
            $temp = count($input['photo']);
            for ($i=0; $i < $temp ; $i++) {
                $photos[] = [
                    'src'   => $input['photo'][$i],
                    'title' => $input['title_img'][$i],
                    'desc'  => $input['desc_img'][$i]
                ];
            }
            $input['photos'] = json_encode($photos);
        }

        $input['destinations'] = destination_encode($input['destinations']);

        $tour->fill($input)->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteTours()
    {
        Tour::destroy(Input::get('cbid'));
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
        $tour = Tour::findOrFail($id);
        $tour->delete();
    }


    public function tour_reviews()
    {
        return view('admin.tours.reviews');
    }

    public function tour_request()
    {
        return view('admin.tours.request');
    }

    public function edit_tags( $taxonomy )
    {
        return view('admin.tours.request');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destination()
    {
        return view('admin.destination');
    }

    /**
     * Ajax Update the specified to be published or unpublished.
     *
     * @return echo out result
     */
    public function setActiveStatus() {
        $data = Input::all();
        if(Request::ajax())
        {
            $id = Input::get('id');
            $tour = Tour::find($id);
            $tour->active = $data['active'];
            $tour->update();
            echo $data['active'];
        }
    }
}
