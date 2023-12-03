
@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 0 200px 0;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }
</style>

    <div style="width: 70%; max-width: 600px; margin-top: 200px;">
        <h1>All Posts</h1>

        {{-- Display create post form --}}
        <div style="margin-bottom: 200 px 0 20px 0;">
            {{-- @include('posts.create') --}}
        </div>

        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>
                        Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}
                    </small>

                    {{-- @if($post->user)
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    @endif --}}

                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found.</p>
        @endif
        
    </div>
@endsection
