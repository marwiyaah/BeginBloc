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
        {{$posts->links()}}
    {{-- @else
        <p>No posts found.</p>
    @endif
@endsection --}} 
@extends('layouts.app')

@section('content')
    <div style="width: 70%; max-width: 600px; margin: auto;">
        <h1>All Posts</h1>

        {{-- Display create post form --}}
        <div style="margin-bottom: 20px;">
            @include('posts.create')
        </div>

        @if(count($posts) > 0)
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
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection
