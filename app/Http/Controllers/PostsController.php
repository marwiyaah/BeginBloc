<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// for sql
// use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    } // this will make sure that you have to be logged in to see the posts page. If you are not logged in, it will redirect you to the login page.

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

        
        // $post = Post::orderBy('created_at', 'desc')->paginate(1);
        // return view('posts.index')->with('posts', $post);
        $posts = Post::where('new_amount', '>', 0)
                  ->orderBy('created_at', 'desc')
                  ->paginate(1);

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
    $this->validate($request, [
        'title' => 'required',
        'amount' => 'nullable|numeric',
        'body' => 'nullable',
        'cover_image' => 'image|mimes:jpeg,png,jpg,gif|nullable|max:1999'
    ]);

    if ($request->hasFile('cover_image')) {
        // Handle File Upload
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
    } else {
        $fileNameToStore = 'noimage.jpg';
    }

    // Create post
    $post = new Post;
    $post->title = $request->input('title');
    $post->amount = $request->input('amount');
    $post->new_amount = $request->input('amount'); // Set new_amount initially equal to amount
    $post->body = $request->input('body');
    $post->user_id = auth()->user()->id;
    $post->cover_image = $fileNameToStore;

    // Retrieve the total contribution amount from the session
    $totalContribution = session('calculatedAmount');

    // Update the new_amount column with the total contribution amount
    $post->new_amount -= $totalContribution;
    $post->save();

    // Clear the session after processing
    session()->forget(['calculatedAmount', 'selectedPercentage']);

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
        // check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        } 
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

        $this->validate($request,[
                'title' => 'required',
                'amount' => 'nullable|numeric',
                'body' => 'nullable',
                // validation for cover_image
                // 'cover_image' => 'image|mimes:jpeg,png,jpg,gif|nullable|max:1999'
            ]);

        // Handle File Upload
        if ($request -> hasFile('cover_image')){
            // get the fileName with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension; 
            // upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        // create post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->amount = $request->input('amount');
        $post->body  = $request->input('body');
        if ($request -> hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated Successfully');


        
    }
    public function contribute($id)
        {
            $post = Post::find($id);

            // Check for correct user
            if(auth()->user()->id !== $post->user_id){
                return view('posts.contribute')->with('post', $post);
                
            }
            return redirect('/posts')->with('error', 'Unauthorized Page');
            
        }


        public function submitContribution(Request $request)
        {
            $postID = $request->input('post_id');
            $selectedPercentage = $request->input('selected_percentage');
        
            // Retrieve the post and update the 'new_amount' field
            $post = Post::find($postID);
            $amountToDeduct = ($selectedPercentage / 100) * $post->amount;
            $post->new_amount -= $amountToDeduct;
            $post->save();
        
            // Optionally, you can store the contribution details in the database or perform other actions
        
            // Return a response (you can customize this based on your needs)
            return response()->json(['message' => 'Contribution submitted successfully']);
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

    // check for correct user
    if (auth()->user()->id !== $post->user_id) {
        return redirect('/posts')->with('error', 'Unauthorized Page');
    }

    if ($post->cover_image != 'noimage.jpg') {
        // Delete the image
        Storage::delete('public/cover_images/' . $post->cover_image);
    }

    // Delete the post
    $post->delete();

    return redirect('/posts')->with('success', 'Post deleted!');
}

public function paginateData(Request $request){
    $posts = Post::orderBy('created_at', 'desc')->paginate(3); // Adjust the number of items per page as needed
    return view('inc.pagination_posts', compact('posts'));
}


// add contribution



    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     // Perform search using Eloquent or SQL as needed
    //     $posts = Post::where('title', 'like', '%' . $query . '%')
    //                   ->orWhere('body', 'like', '%' . $query . '%')
    //                   ->orderBy('created_at', 'desc')
    //                   ->paginate(10);

    //     return view('posts.index')->with('posts', $posts);
    // }

    
}
