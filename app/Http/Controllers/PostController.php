<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use DB;
use Illuminate\Support\Facades\DB;
use HasRoles;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $posts = Post::all();
        //$posts = Post::orderby('title','desc') ->get();
        //return $post = Post::where('title','like','Post two') -> get();
        $posts = DB::select('SELECT * FROM posts');

        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index') ->with('posts', $posts);
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
        // //
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required'
        //     // 'password' => 'required|min:6',
        // ]);

        // return 123;

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // return redirect('/posts/index')->with('success', 'Post Created');
        //create post

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
        // return redirect()->route('posts.show')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $post = Post::find($title);
        return view('posts.show')->with('post', $post);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // for deleting
     public function destroy($id)
    {
        //
    }
}
