<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Major;
use App\Profile;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Major::all();
        return view('posts.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'                =>  'required',
            'description'          =>  'required',
            'major_id'          =>  'required',
            'user_id'        =>auth()->id()
        ]);

        $posts = array(
            'title'          =>$request->title,
            'description'    =>$request->description,
            'user_id'        =>auth()->id(),
            'major_id'       => $request->major_id

        );
        Post::create($posts);
        return redirect('posts')->with('success', 'Post is successfully added');
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
        $majors=Major::all();
        $posts= Post::find($id);
        return view('posts.edit',compact('posts','majors'));
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
        $posts=Post::find($id);

        $this->validate($request,[
            "title"    => "required",
            "description"  => "required",
            "major_id"     =>"required",
            'user_id'        =>auth()->id()
        ]);
        $posts->title=$request->title;
        $posts->description=$request->description;
        $posts->major_id=$request->major_id;
        $posts->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('posts')->with('success', 'The post is successfully deleted');

    }
}
