{{-- @extends('layouts.app')

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: -50px 200px 0;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }
</style>

<div style="width: 70%; max-width: 600px; margin-top: 200px;">
    <!-- Search Bar -->
    <div style="margin-bottom: 20px;">
        <input type="text" id="searchInput" placeholder="Search posts...">
    </div>

    <!-- Search Results Container -->
    <div id="searchResults"></div>

    @if(session('error'))
        <!-- Display Session Message -->
        <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px; margin-top: 50px;">
            {{ session('error') }}
        </div>
    @endif

    <h1>All Posts</h1>

    {{-- Display create post form --}}
    {{-- <div style="margin-bottom: 200px;">
        {{-- @include('posts.create') --}}
    {{-- </div>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>
                    Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}
                </small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
</div>

<!-- Ajax Script for Search -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Trigger search on input change
        $('#searchInput').on('input', function() {
            var query = $(this).val();

            // Perform Ajax request
            $.ajax({
                url: '/search', // Update this with your actual search route
                method: 'GET',
                data: {query: query},
                success: function(response) {
                    // Update the search results container
                    $('#searchResults').html(response);
                }
            });
        });
    });
</script>

@endsection --}}


@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    /* public/css/styles.css */
    body {
        margin: -50px 200px 0;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }
</style>

<div style="width: 70%; max-width: 600px; margin-top: 200px;">
    @if(session('error'))
        <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px; margin-top: 50px;">
            {{ session('error') }}
        </div>
    @endif

    <h1>All Posts</h1>
    <a href="" class="btn btn-success my-3" data-toggle="modal" data-target="#addModal">Add product</a>

    {{-- Display create post form --}}
    <div style="margin-bottom: 200 px 0 20px 0;">
        {{-- @include('posts.create') --}}
    </div>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well" id="post-container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%">
                    </div>
                    <div class="col-md-4 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>
                            Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}
                        </small>
                    </div>
                </div>
            </div>

            
        @endforeach
        <div id="pagination-links">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found.</p>
    @endif
</div>
@include('inc.ajax')
@include('inc.modal')
<script>
    $(document).ready(function () {
        // Initial load of posts
        loadPosts();

        // Handle pagination link clicks
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            loadPosts(page);
        });

        function loadPosts(page = 1) {
    $.ajax({
        url: "{{ route('pagination.paginate-data') }}?page=" + page,
        success: function (data) {
            $('#post-container').html(data);
            $('#pagination-links').html($('.pagination').html());
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
}

    });
</script>
@endsection
