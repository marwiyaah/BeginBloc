<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
// for sql
// use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // for eloquent

        // when you want to limit how many posts you want to show in your page -> take(the number)
        // $post = Post::orderBy('created_at', 'desc')->take(10)->get();
        // $post = Post::orderBy('created_at', 'desc')->get();
        // a weird clause below
        // return Post::where('title', 'Post Two')->get();
        
        // for sql query
        // $post = DB::select('SELECT * FROM posts');

        // PAGINATION: the limit you give in the (), it will show that much posts in the page.
        // suppose, paginate(2). If we get any 3rd post, it will give us a link to go to the next page.
        $post = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $post);
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
        $this->validate($request,
         ['title' => 'required',
          'body' => 'required'
        ]);

        // creae post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
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
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request,
         ['title' => 'required',
          'body' => 'required'
        ]);

        // creae post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        
        $post->save();

        return redirect('/posts')->with('success', 'Post updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    
        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
