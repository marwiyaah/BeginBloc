{{-- @extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}></a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach

        {{-- Pagination links --}}
        {{-- {{$posts->links()}} --}}
    {{-- @else
        <p>No posts found.</p>
    @endif
@endsection --}} 
@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin-top: 150px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }

    h1 {
    /* Add specific styles for the h1 tag if needed */
    }

    .list-group-item {
    /* Add specific styles for list items if needed */
    }

    /* Add other styles as needed */

</style>
    <div style="width: 70%; max-width: 600px; margin-top: 200px;">
        <h1>All Posts</h1>

        {{-- Display create post form --}}
        <div style="margin-bottom: 200 px 0 20px 0;">
            @include('posts.create')
        </div>

        @if(count($posts) > 0)
            <div>
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->body }}</p>
                        </li>
                    @endforeach
                </ul>
                {{-- Pagination links --}}
                {{ $posts->links() }}
            </div>
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection
