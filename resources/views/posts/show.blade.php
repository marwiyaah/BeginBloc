
@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-default">Go Back</a>

    @if($post)
        <h1>{{ $post->title }}</h1>

        <div>
            {{ $post->body }}
        </div>

        <hr>

        <small>Written on {{ $post->created_at }}</small>
    @else
        <p>Post not found.</p>
    @endif

@endsection
