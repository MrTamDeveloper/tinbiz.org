<?php

namespace App\Http\Controllers\Admin;

use Input;
use Request;
use Session;
use App\Content;
// use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Content::latest('created_at')->get();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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

        Content::create($input);

        return redirect()->route('administrator.post.index');
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
        $post = Content::findOrFail($id);
        return view('admin.posts.edit')->withPost($post);
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
        $post = Content::findOrFail($id);

        $input = Request::all();

        $post->fill($input)->save();

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
            $post = Content::find($id);
            $post->active = $data['active'];
            $post->update();
            echo $data['active'];
        }
    }

    /**
     * Update selected posts
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePosts()
    {
        // var_dump(Input::get('cbid'));die();
        Content::destroy(Input::get('cbid'));
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
        $post = Content::findOrFail($id);
        $post->delete();
    }
}
