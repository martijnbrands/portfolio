<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
Use Image;
Use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Post::orderBy('created_at' , 'DESC')->get();
       return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'color' => 'required|string',
            'textColor' => 'required|string'

        ]);

        if($request->thumbnail != ""){

            $thumbnail = $request->file('thumbnail');
                    
            $fileName = str_slug($request->title) . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->save(public_path('images/uploads/' . $fileName));

        }

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'color' => request('color'),
            'textColor' => request('textColor'),
            'thumbnail' => $fileName,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($postSlug)
    {
        $post = Post::whereSlug($postSlug)->first();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
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

        $post = Post::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $post->fill($input)->save();

        return view('posts.show', compact('post'));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
