
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
