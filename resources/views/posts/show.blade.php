@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 100px 0 0 200px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
        display: flex;
        flex-direction: column;
    }

</style>


<div style="width: 70%; max-width: 600px; margin-top: 200px;">
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%"><br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}</small>
    <hr>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success" ><i class="las la-edit"></i>Edit</a>

            <form action="{{ action('App\Http\Controllers\PostsController@destroy', $post->id) }}" method="post" class="pull-right">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
    
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        @endif  
    @endif
    
</div>
@endsection
