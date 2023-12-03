@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

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
    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    <form action="{{ action('App\Http\Controllers\PostsController@destroy', $post->id) }}" method="post" class="pull-right">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>
@endsection
