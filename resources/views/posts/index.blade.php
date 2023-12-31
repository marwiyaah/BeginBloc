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

        .post-container img {
            width: 100%; /* Adjust the width of the images to fill the container */
            height: auto; /* Maintain the aspect ratio */
        }

        .post-container h3 {
            margin-bottom: 0; /* Remove the default bottom margin for h3 */
        }

        /* Add spacing to the post container */
        .post-container {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd; /* Add a border for separation */
            border-radius: 8px;
            width: 1000px;
        }

        /* Add spacing to the top of the page */
        h1 {
            margin-top: 20px;
        }
        
    </style>

    <div style="width: 70%; max-width: 600px; margin-top: 200px;">
    @if(session('error'))
        <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px; margin-top: 50px;">
            {{ session('error') }}
        </div>
    @endif

    <h1>All Posts</h1>

    @if (!Auth::guest())
    <a href="/posts/create" class="btn btn-success my-3" data-toggle="modal" data-target="#addModal">Create Post</a>
    @endif
    

    {{-- Display create post form --}}
    <div style="margin-bottom: 200px 0 20px 0;">
        {{-- @include('posts.create') --}}
    </div>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            @if($post->new_amount > 0)
                    <div class="well post-container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4"  style="width: 100px; height: 100px;">
                                <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>
                                    Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}
                                </small>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <small style=" margin: -200px 0 0 85px;">Amount needed for deployment: <span style="color: #b87a40;">${!! $post->new_amount !!}</span></small>
                        </div>
                    </div>
            @endif
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
                    $('.post-container').html(data);
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
