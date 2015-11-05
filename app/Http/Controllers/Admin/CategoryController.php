<?php

namespace App\Http\Controllers\Admin;

use Input;
use Request;
use Session;
use App\ContentCategory;
// use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ContentCategory::latest('created_at')->get();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ContentCategory::all();
        return view('admin.category.create')->withCategories($categories);
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

        ContentCategory::create($input);

        return redirect()->route('administrator.category.index');
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
        $categories = ContentCategory::all();
        $category = ContentCategory::findOrFail($id);
        return view('admin.category.edit', ['category' => $category, 'categories' => $categories]);
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
        $category = ContentCategory::findOrFail($id);

        $input = Request::all();

        $category->fill($input)->save();

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
            $category = ContentCategory::find($id);
            $category->active = $data['active'];
            $category->update();
            echo $data['active'];
        }
    }

    /**
     * Update selected categories
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCategories()
    {
        // var_dump(Input::get('cbid'));die();
        ContentCategory::destroy(Input::get('cbid'));
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
        $category = ContentCategory::findOrFail($id);
        $category->delete();
    }
}
